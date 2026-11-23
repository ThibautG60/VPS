# VPS – Portfolio de Thibaut GERARD

Site portfolio en PHP/Apache, servi par Docker (https://thibaut-gerard.fr).

## Stack

- PHP 8.6 + Apache (`mod_rewrite`), PDO MySQL
- Tailwind CSS (CDN) avec un thème personnalisé
- PHPMailer (Composer) pour le formulaire de contact
- Docker Compose avec deux profils : `local` et `prod` (Traefik)

## Structure

```
.
├── docker-compose.yml   # profils local / prod + service composer
├── dockerfile           # image php:apache + extensions + composer
├── .env.example         # modèle des variables d'environnement
└── code/                # racine web (montée dans /var/www/html)
    ├── index.php        # routeur : /Mentions, /Contact, sinon accueil
    ├── .htaccess        # HTTPS, réécriture, accès interdit aux dossiers internes
    ├── controllers/     # logique des pages (contact)
    ├── views/Portfolio/ # pages et composants (header, footer, ...)
    ├── assets/          # css, js, images, CV
    └── utils/           # outils internes
```

## Lancer le projet

1. Copier la config : `cp .env.example .env` et renseigner les identifiants SMTP.
2. Démarrer :

```bash
# Local : http://localhost:81
docker compose --profile local up -d --build

# Prod : derrière Traefik, réseau externe `atom-network` requis
docker compose --profile prod up -d --build
```

Le service `composer` installe les dépendances dans `code/vendor/` avant le démarrage d'Apache.
En prod, ajouter `COMPOSER_FLAGS="--no-dev --optimize-autoloader"` dans le `.env`.

## Configuration (`.env`)

| Variable | Rôle |
|---|---|
| `SMTP_HOST` | Serveur SMTP (défaut : `ssl0.ovh.net`) |
| `SMTP_PORT` | `587` (STARTTLS) ou `465` (SSL) |
| `SMTP_USER` | Compte d'envoi (aussi utilisé comme expéditeur) |
| `SMTP_PASSWORD` | Mot de passe du compte |
| `PA_UID` / `PA_GID` | UID/GID du service composer (défaut : 1000) |
| `COMPOSER_FLAGS` | Options de `composer install` |

## Pages

| Route | Fichier |
|---|---|
| `/` | `views/Portfolio/accueil.php` |
| `/Mentions` | `views/Portfolio/mentions.php` |
| `/Contact` | `controllers/contact.controller.php` + `views/Portfolio/contact.php` |

Le formulaire de contact est protégé par un jeton CSRF et un champ piège anti-robots. Si l'envoi échoue, le message est écrit dans les logs (`docker logs <conteneur>`).
