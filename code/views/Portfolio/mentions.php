<!DOCTYPE html>
<html lang="fr">

<!DOCTYPE html>
<html class="dark" lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Mentions légales du portfolio de Thibaut GERARD, développeur web dans l'Oise.">
    <meta name="keywords" content="mentions légales, Thibaut GERARD, développeur web, Oise">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="assets/img/acceuil/iconSite.ico" type="image/x-icon"/>
    <title>Thibaut GERARD - Mentions légales</title>

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
        <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop relative z-10 pb-12" id="experience">
            <div class="bg-surface-container-high border border-outline-variant rounded-2xl p-8 md:p-12 relative overflow-hidden shadow-2xl group">
                <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px] opacity-20 group-hover:opacity-40 transition-opacity duration-700"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-secondary/5 via-transparent to-primary/5 opacity-50"></div>
                <div class="absolute top-0 left-0 w-2 h-full bg-secondary"></div>
                <div class="absolute top-4 right-4 flex gap-2">
                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                    <div class="w-2 h-2 rounded-full bg-outline-variant"></div>
                    <div class="w-2 h-2 rounded-full bg-secondary animate-pulse"></div>
                </div>
                <div class="max-w-3xl relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-secondary text-2xl">menu_book</span>
                        <h1 class="font-technical-sm text-technical-sm text-secondary tracking-widest uppercase">Mentions légales</h1>
                    </div>
                    <div class="mb-6">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Editeur du site:</h2>
                        <ul>
                            <li class="font-body-md text-body-md text-on-surface-variant text-lg leading-relaxed">Nom & prénom: GERARD Thibaut</li>
                            <li class="font-body-md text-body-md text-on-surface-variant text-lg leading-relaxed">Mail: Voir dans la section "Me contacter"</li>
                        </ul>
                    </div>
                    <div class="mb-6">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold">Hébergeur du site:</h2>
                        <ul>
                            <li class="font-body-md text-body-md text-on-surface-variant text-lg leading-relaxed">Nom & prénom: OVH</li>
                            <li class="font-body-md text-body-md text-on-surface-variant text-lg leading-relaxed">Mail: Voir sur le site d'OVH</li>
                        </ul>
                    </div>
                    <hr class="mb-6">
                    <p class="font-body-md text-body-md text-on-surface-variant mb-8 text-lg leading-relaxed">
                        Tous les contenus présents sur le site, y compris les textes, images, logos et vidéos, sont la propriété exclusive de Mr GERARD Thibaut, sauf mention contraire pour certains contenus fournis par des tiers. <br>
                        Toute reproduction, diffusion ou modification de ces contenus sans autorisation préalable est interdite.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-8 text-lg leading-relaxed">
                        Nous nous efforçons de fournir des informations exactes et à jour sur le site, mais nous ne pouvons garantir leur complétude ou leur précision à tout moment. <br> 
                        En conséquence, nous déclinons toute responsabilité quant aux dommages directs ou indirects pouvant résulter de l'utilisation du site.
                    </p>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-8 text-lg leading-relaxed">
                        Enfin, nous nous réservons le droit de modifier les présentes mentions légales à tout moment. <br>
                        Toute modification sera mise en ligne immédiatement, et nous vous encourageons à consulter cette page régulièrement pour prendre connaissance des éventuelles mises à jour.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php include 'Components/footer.php'; ?>
</body>

</html>