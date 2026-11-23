<?php
/* PAGE CONTACT : affichage du formulaire + traitement de l'envoi */
use PHPMailer\PHPMailer\PHPMailer;

define('CONTACT_DEST', 'dev@thibaut-gerard.fr');

session_start();

if (empty($_SESSION['contact_csrf'])) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}

$errors = [];
$values = ['nom' => '', 'prenom' => '', 'email' => '', 'telephone' => '', 'message' => ''];

// Message de confirmation affiché après redirection (évite le double envoi au rafraîchissement)
$success = !empty($_SESSION['contact_success']);
unset($_SESSION['contact_success']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($values as $key => $_) {
        $values[$key] = trim((string)($_POST[$key] ?? ''));
    }

    if (!hash_equals($_SESSION['contact_csrf'], (string)($_POST['csrf'] ?? ''))) {
        $errors['global'] = "Session expirée, merci de réessayer.";
    } elseif (!empty($_POST['website'])) {
        // Champ piège (honeypot) rempli : on fait semblant que tout s'est bien passé
        $_SESSION['contact_success'] = true;
        header('Location: /Contact');
        exit;
    } else {
        if ($values['nom'] === '' || strlen($values['nom']) > 100) {
            $errors['nom'] = "Merci d'indiquer votre nom.";
        }
        if ($values['prenom'] === '' || strlen($values['prenom']) > 100) {
            $errors['prenom'] = "Merci d'indiquer votre prénom.";
        }
        if ($values['email'] !== '' && (strlen($values['email']) > 150 || !filter_var($values['email'], FILTER_VALIDATE_EMAIL))) {
            $errors['email'] = "Cette adresse mail ne semble pas valide.";
        }
        if ($values['telephone'] !== '' && !preg_match('/^\+?[0-9 .\-()]{6,20}$/', $values['telephone'])) {
            $errors['telephone'] = "Ce numéro de téléphone ne semble pas valide.";
        }
        if (strlen($values['message']) < 10 || strlen($values['message']) > 5000) {
            $errors['message'] = "Votre message doit contenir entre 10 et 5000 caractères.";
        }
    }

    if (!$errors) {
        $nomComplet = preg_replace('/[\r\n]+/', ' ', $values['prenom'] . ' ' . $values['nom']);
        $corps = "Nom : $nomComplet\n"
            . "Mail : " . ($values['email'] ?: 'non renseigné') . "\n"
            . "Téléphone : " . ($values['telephone'] ?: 'non renseigné') . "\n\n"
            . $values['message'];

        $subject = "Contact du site : $nomComplet";
        $envoye = false;

        try {
            require_once __DIR__ . '/../vendor/autoload.php';

            $smtpUser = (string)getenv('SMTP_USER');
            $smtpPort = (int)(getenv('SMTP_PORT') ?: 587);

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = getenv('SMTP_HOST') ?: 'ssl0.ovh.net';
            $mail->Port = $smtpPort;
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUser;
            $mail->Password = (string)getenv('SMTP_PASSWORD');
            $mail->SMTPSecure = $smtpPort === 465 ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
            $mail->CharSet = PHPMailer::CHARSET_UTF8;

            // OVH exige que l'expéditeur soit le compte SMTP authentifié
            $mail->setFrom($smtpUser, 'Site thibaut-gerard.fr');
            $mail->addAddress(CONTACT_DEST);
            if ($values['email'] !== '') {
                $mail->addReplyTo($values['email'], $nomComplet);
            }
            $mail->Subject = $subject;
            $mail->Body = $corps;

            $envoye = $mail->send();
        } catch (Throwable $ex) {
            error_log('[CONTACT] Envoi impossible : ' . $ex->getMessage());
        }

        if ($envoye) {
            $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
            $_SESSION['contact_success'] = true;
            header('Location: /Contact');
            exit;
        }

        // Filet de sécurité : le message reste récupérable dans les logs PHP / docker logs
        error_log("[CONTACT] Message non envoyé :\n$corps");
        $errors['global'] = "L'envoi a échoué. Merci de réessayer plus tard.";
    }
}

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// Classes communes aux champs, avec mise en évidence en cas d'erreur
function fieldClass(array $errors, string $name): string
{
    $base = 'w-full rounded-lg bg-surface-container-lowest/80 text-on-surface placeholder:text-outline px-4 py-3 font-body-md text-body-md transition-colors duration-300 focus:ring-2 focus:ring-primary-container focus:border-primary-container';
    return $base . (isset($errors[$name]) ? ' border-error' : ' border-outline-variant');
}

include_once __DIR__ . '/../views/Portfolio/contact.php';
?>