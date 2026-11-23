<!DOCTYPE html>
<html class="dark" lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Contactez Thibaut GERARD, développeur web dans l'Oise, pour un projet de site internet ou de développement logiciel.">
    <meta name="keywords" content="contact, Thibaut GERARD, développeur web, Oise">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="assets/img/acceuil/iconSite.ico" type="image/x-icon"/>
    <title>Thibaut GERARD - Me contacter</title>

    <!-- Fichiers CSS pour le thème et le style -->
    <link rel="stylesheet" href="/assets/css/Portfolio/theme.css">
    <link rel="stylesheet" href="/assets/css/Portfolio/style.css">
    <link rel="stylesheet" href="/assets/css/Portfolio/animations.css">
    <link rel="stylesheet" href="/assets/css/Portfolio/header.css">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="/assets/js/Portfolio/tailwind-config.js"></script>
</head>

<body class="antialiased relative">
    <?php include 'Components/background.php'; ?>
    <?php include 'Components/header.php'; ?>
    <main class="flex flex-col gap-16 justify-center pt-32">
        <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop relative z-10 pb-12" id="contact">
            <div class="bg-surface-container-high border border-outline-variant rounded-2xl p-6 sm:p-8 md:p-12 relative overflow-hidden shadow-2xl group">
                <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px] opacity-20 group-hover:opacity-40 transition-opacity duration-700"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/5 via-transparent to-primary/5 opacity-50"></div>
                <div class="absolute top-0 left-0 w-2 h-full bg-secondary"></div>
                <div class="absolute top-4 right-4 flex gap-2">
                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                    <div class="w-2 h-2 rounded-full bg-secondary animate-pulse"></div>
                </div>

                <div class="max-w-3xl mx-auto relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-secondary text-2xl">mail</span>
                        <h1 class="font-technical-sm text-technical-sm text-secondary tracking-widest uppercase">Me contacter</h1>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold mb-2">Un projet, une question ?</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant text-lg leading-relaxed mb-8">
                        Laissez-moi un message. Le mail et le téléphone sont facultatifs : renseignez-en au moins un si vous souhaitez que je vous rappelle ou vous réponde.
                    </p>

                    <?php if ($success): ?>
                        <div role="status" class="flex items-start gap-3 rounded-lg border border-primary-container/50 bg-primary-container/10 p-4 mb-8 text-on-surface">
                            <span class="material-symbols-outlined text-primary-container">check_circle</span>
                            <p class="font-body-md text-body-md">Merci, votre message a bien été envoyé. Je reviens vers vous dès que possible.</p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($errors['global'])): ?>
                        <div role="alert" class="flex items-start gap-3 rounded-lg border border-error/50 bg-error-container/20 p-4 mb-8 text-on-error-container">
                            <span class="material-symbols-outlined text-error">error</span>
                            <p class="font-body-md text-body-md"><?php echo e($errors['global']); ?></p>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="/Contact" novalidate class="flex flex-col gap-6">
                        <input type="hidden" name="csrf" value="<?php echo e($_SESSION['contact_csrf']); ?>">
                        <!-- Champ piège anti-robots : invisible pour les humains -->
                        <div class="absolute -left-[9999px]" aria-hidden="true">
                            <label>Ne pas remplir <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="nom" class="block font-technical-sm text-technical-sm text-on-surface-variant uppercase mb-2">Nom <span class="text-secondary">*</span></label>
                                <input type="text" id="nom" name="nom" required maxlength="100" autocomplete="family-name" placeholder="Dupont"
                                    value="<?php echo e($values['nom']); ?>" class="<?php echo fieldClass($errors, 'nom'); ?>">
                                <?php if (isset($errors['nom'])): ?><p class="mt-2 text-sm text-error"><?php echo e($errors['nom']); ?></p><?php endif; ?>
                            </div>
                            <div>
                                <label for="prenom" class="block font-technical-sm text-technical-sm text-on-surface-variant uppercase mb-2">Prénom <span class="text-secondary">*</span></label>
                                <input type="text" id="prenom" name="prenom" required maxlength="100" autocomplete="given-name" placeholder="Jean"
                                    value="<?php echo e($values['prenom']); ?>" class="<?php echo fieldClass($errors, 'prenom'); ?>">
                                <?php if (isset($errors['prenom'])): ?><p class="mt-2 text-sm text-error"><?php echo e($errors['prenom']); ?></p><?php endif; ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block font-technical-sm text-technical-sm text-on-surface-variant uppercase mb-2">Mail <span class="text-outline normal-case">(facultatif)</span></label>
                                <input type="email" id="email" name="email" maxlength="150" autocomplete="email" placeholder="jean.dupont@exemple.fr"
                                    value="<?php echo e($values['email']); ?>" class="<?php echo fieldClass($errors, 'email'); ?>">
                                <?php if (isset($errors['email'])): ?><p class="mt-2 text-sm text-error"><?php echo e($errors['email']); ?></p><?php endif; ?>
                            </div>
                            <div>
                                <label for="telephone" class="block font-technical-sm text-technical-sm text-on-surface-variant uppercase mb-2">Téléphone <span class="text-outline normal-case">(facultatif)</span></label>
                                <input type="tel" id="telephone" name="telephone" maxlength="20" autocomplete="tel" placeholder="06 12 34 56 78"
                                    value="<?php echo e($values['telephone']); ?>" class="<?php echo fieldClass($errors, 'telephone'); ?>">
                                <?php if (isset($errors['telephone'])): ?><p class="mt-2 text-sm text-error"><?php echo e($errors['telephone']); ?></p><?php endif; ?>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block font-technical-sm text-technical-sm text-on-surface-variant uppercase mb-2">Message <span class="text-secondary">*</span></label>
                            <textarea id="message" name="message" rows="6" required minlength="10" maxlength="5000" placeholder="Décrivez-moi votre besoin..."
                                class="<?php echo fieldClass($errors, 'message'); ?> resize-y"><?php echo e($values['message']); ?></textarea>
                            <?php if (isset($errors['message'])): ?><p class="mt-2 text-sm text-error"><?php echo e($errors['message']); ?></p><?php endif; ?>
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <p class="font-technical-sm text-technical-sm text-outline"><span class="text-secondary">*</span> Champs obligatoires</p>
                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-8 py-3 rounded-lg border border-primary-container bg-primary-container/10 text-primary-container font-technical-sm text-technical-sm uppercase tracking-widest hover:bg-primary-container hover:text-on-primary transition-all duration-300 shadow-[0_0_15px_rgba(0,242,255,0.2)]">
                                Envoyer
                                <span class="material-symbols-outlined text-xl" aria-hidden="true">send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include 'Components/footer.php'; ?>
</body>

</html>
