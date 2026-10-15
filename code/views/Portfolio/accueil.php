<!DOCTYPE html>
<html class="dark" lang="fr">

<head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Thibaut GERARD, développeur dans l'oise, vous propose de découvrir ses projets de développement web et logiciel.">
        <meta name="keywords" content="Thibaut, GERARD, développeur web, Oise, portfolio, projets, compétences">
        <meta name="robots" content="index, follow">
        <link rel="icon" href="assets/img/acceuil/iconSite.ico" type="image/x-icon"/>
        <title>Thibaut GERARD - Développeur dans l'Oise, mes projets et mes compétences</title>

        <!-- Fichiers CSS pour le thème et le style -->
        <link rel="stylesheet" href="/assets/css/Portfolio/theme.css">
        <link rel="stylesheet" href="/assets/css/Portfolio/style.css">

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script src="/assets/js/Portfolio/tailwind-config.js"></script>
</head>

<body class="antialiased relative">
        <!-- Background Shader -->
        <div class="fixed inset-0 w-full h-full -z-10 bg-black mesh-gradient" style="background: radial-gradient(circle at 15% 50%, rgba(182, 0, 248, 0.2) 0%, transparent 50%) 0% 0% / 200% 200%, radial-gradient(circle at 85% 30%, rgba(0, 242, 255, 0.25) 0%, transparent 50%), radial-gradient(circle at 50% 80%, rgba(182, 0, 248, 0.15) 0%, transparent 50%), radial-gradient(circle at 20% 90%, rgba(0, 242, 255, 0.2) 0%, transparent 50%); animation: 15s ease 0s infinite alternate none running meshAnimation;"></div>
        <!-- Top Navigation Bar -->
        <header class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 bg-surface/40 backdrop-blur-xl border-b border-white/10 shadow-[0_0_15px_rgba(0,219,231,0.2)]">
                <div class="font-headline-md text-headline-md font-bold text-primary tracking-wider">Thibaut GERARD</div>
                <nav class="hidden md:flex items-center gap-8 font-body-md text-body-md">
                        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#skills">Compétences</a>
                        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#projets">Projets</a>
                        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="#experience">Expérience</a>
                        <a class="text-on-surface-variant hover:text-primary transition-colors duration-300" href="mailto:contact@thibaut-gerard.fr">Contact</a>
                </nav>
                <!-- Mobile Menu Icon (Placeholder functionality) -->
                <button class="md:hidden text-primary">
                        <span class="material-symbols-outlined">menu</span>
                </button>
        </header>
        <main class="pt-32 pb-20">
                <!-- Hero Section -->
                <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop py-[80px] md:py-[120px] flex flex-col md:flex-row items-center gap-12 md:gap-24 relative">
                        <div class="relative shrink-0 z-10 group">
                                <div class="absolute inset-0 bg-primary/20 rounded-full blur-2xl group-hover:bg-primary/40 transition-all duration-500"></div>
                                        <img alt="Photo de Thibaut GERARD" class="w-48 h-48 md:w-80 md:h-80 rounded-full object-cover border-2 border-primary/40 relative z-10 shadow-[0_0_30px_rgba(0,242,255,0.2)] grayscale-[20%] hover:grayscale-0 transition-all duration-500" src="assets/img/acceuil/me.jpg">
                                        <!-- Atomic Indicators -->
                                        <div class="absolute top-4 right-4 w-3 h-3 bg-primary rounded-full animate-pulse shadow-[0_0_10px_#00f2ff] z-20"></div>
                                </div>
                                <div class="flex-1 text-center md:text-left z-10">
                                        <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-sm text-primary text-glow-primary mb-6 font-bold tracking-tight">Thibaut GERARD <br><span class="text-on-surface-variant">Développeur web et logiciel</span></h1>
                                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto md:mx-0 leading-relaxed">Bonjour et bienvenue sur la présentation de mes humbles projets.<br>
                                                Je m'appelle Thibaut, j'ai 30 ans, je viens de l'Oise.<br>
                                                Je suis passionné par le développement informatique depuis mes années collèges.<br>
                                                Et depuis, je n'ai cessé d'explorer ce domaine en constante évolution.<br>
                                                Aujourd'hui, j'ai décidé de transformer cette passion en véritable métier.<br><br>

                                                Je me spécialise dans le développement web et logiciel, et je mets mes compétences au service de projets divers allant de la création de sites 'vitrine'
                                                à des sites internet plus complexe (Base de données, pages dynamiques ...) en passant par du developpement hors sites internet.
                                        </p>
                                <div class="mt-8 flex flex-wrap gap-4 justify-center md:justify-start">
                                        <span class="px-3 py-1 rounded-full border border-secondary/50 text-secondary font-technical-sm text-technical-sm bg-secondary/5">WEB FULL-STACK</span>
                                        <span class="px-3 py-1 rounded-full border border-primary/50 text-primary font-technical-sm text-technical-sm bg-primary/5">SYSTEMES EMBARQUES</span>
                                </div>
                        </div>
                </section>
                <!-- AI Chatbot Section -->
                <section class="container mx-auto max-w-4xl px-margin-mobile md:px-margin-desktop py-[60px] relative z-10">
                        <div class="glass-panel rounded-2xl p-8 md:p-12 relative overflow-hidden flex flex-col items-center">
                                <!-- Decorative top-left light source simulation -->
                                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-white/20 to-transparent"></div>
                                <span class="material-symbols-outlined text-4xl text-secondary mb-4 drop-shadow-[0_0_10px_rgba(182,0,248,0.5)]">robot_2</span>
                                <p class="font-body-md text-body-md text-on-surface text-center mb-8 max-w-xl">
                                        Posez-moi n'importe quelle question sur mon parcours, mes projets ou mes technos, mon jumeau numérique vous répond en direct !
                                </p>
                                <div class="w-full relative flex items-center">
                                        <input class="w-full bg-surface-dim border border-outline-variant rounded-xl py-4 pl-6 pr-16 text-on-surface font-technical-sm text-technical-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all placeholder:text-outline/50 shadow-inner" placeholder="Poser une question ..." type="text">
                                        <button class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 text-primary hover:bg-primary/20 hover:shadow-[0_0_10px_rgba(0,242,255,0.4)] transition-all">
                                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
                                        </button>
                                        <!-- Scanning line animation placeholder -->
                                        <div class="absolute bottom-0 left-0 h-[2px] bg-primary w-0 transition-all duration-1000 ease-in-out group-focus-within:w-full opacity-50 shadow-[0_0_8px_#00f2ff]"></div>
                                </div>
                        </div>
                </section>
                <!-- Atomic Grid (Skills) -->
                <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop py-[80px] relative z-10" id="skills">
                        <div class="flex items-center gap-4 mb-12">
                                <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Mes compétences</h2>
                                <div class="h-[1px] flex-1 bg-gradient-to-r from-white/10 to-transparent"></div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                                <!-- Generic Skill Template -->
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">html</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">HTML</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">css</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">CSS</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">javascript</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">JavaScript</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">php</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">PHP</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">database</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">SQL</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">terminal</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">Docker</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">merge</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">Git</span>
                                </div>
                                <div class="glass-panel glass-panel-active rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default group">
                                        <span class="material-symbols-outlined text-3xl text-outline group-hover:text-primary transition-colors">code</span>
                                        <span class="font-technical-sm text-technical-sm text-on-surface-variant group-hover:text-on-surface">C++</span>
                                </div>
                                <!-- Highlighted Skill: QT/QML -->
                                <div class="glass-panel rounded-xl p-6 flex flex-col items-center justify-center gap-3 transition-all duration-300 cursor-default bg-secondary/5 border-secondary/30 neon-glow-secondary relative overflow-hidden lg:col-span-2">
                                        <div class="absolute inset-0 bg-gradient-to-br from-secondary/10 to-transparent"></div>
                                                <span class="material-symbols-outlined text-4xl text-secondary drop-shadow-[0_0_8px_rgba(182,0,248,0.8)] relative z-10">integration_instructions</span>
                                                <span class="font-headline-md text-headline-md text-on-secondary-container font-bold relative z-10 tracking-wide">QT / QML</span>
                                        <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-secondary/20 rounded-full blur-xl"></div>
                                </div>
                        </div>
                </section>
                <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop py-[80px] relative z-10" id="projets">
                        <div class="flex items-center gap-4 mb-12">
                                <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">Projets</h2>
                                <div class="h-[1px] flex-1 bg-gradient-to-r from-white/10 to-transparent"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                <div class="glass-panel rounded-2xl p-6 flex flex-col h-full group hover:shadow-[0_0_20px_rgba(0,242,255,0.15)] transition-all duration-300">
                                        <div class="mb-4 text-primary opacity-80 group-hover:opacity-100 transition-opacity">
                                                <span class="material-symbols-outlined text-4xl">sound_detection_dog_barking</span>
                                        </div>
                                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold mb-3">Pet Assist</h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-1">
                                                Ce site a pour objectif de faciliter la mise en relation des propriétaires d'animaux et des personnes ayant retrouvé un animal perdu.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mb-6">
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">PHP</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">Bootstrap</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">MySQL</span>
                                        </div>
                                        <a 
                                                href="https://pet-assist.fr"
                                                class="w-full py-3 rounded-lg bg-surface-container-high border border-outline-variant text-primary font-technical-sm text-technical-sm group-hover:bg-primary/10 group-hover:border-primary/50 transition-all duration-300 flex items-center justify-center gap-2"
                                        >
                                                <span class="">Visiter</span>
                                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                </div>
                                <div class="glass-panel rounded-2xl p-6 flex flex-col h-full group hover:shadow-[0_0_20px_rgba(0,242,255,0.15)] transition-all duration-300">
                                        <div class="mb-4 text-primary opacity-80 group-hover:opacity-100 transition-opacity">
                                                <span class="material-symbols-outlined text-4xl">hand_meal</span>
                                        </div>
                                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold mb-3">Le Pigeonnier</h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-1">
                                                J'ai créé le site web du restaurant "Le Pigeonnier", en ajoutant un menu interactif pour présenter les plats proposés.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mb-6">
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">PHP</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">Bootstrap</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">MySQL</span>
                                        </div>
                                        <a 
                                                href="https://le-pigeonnier.fr"
                                                class="w-full py-3 rounded-lg bg-surface-container-high border border-outline-variant text-primary font-technical-sm text-technical-sm group-hover:bg-primary/10 group-hover:border-primary/50 transition-all duration-300 flex items-center justify-center gap-2"
                                        >
                                                <span class="">Visiter</span>
                                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                </div>
                                <div class="glass-panel rounded-2xl p-6 flex flex-col h-full group hover:shadow-[0_0_20px_rgba(0,242,255,0.15)] transition-all duration-300">
                                        <div class="mb-4 text-primary opacity-80 group-hover:opacity-100 transition-opacity">
                                                <span class="material-symbols-outlined text-4xl">spa</span>
                                        </div>
                                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold mb-3">Nagomi</h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-1">
                                                Site web vitrine pour le spa Nagomi. J'ai utilisé VantaJS pour ajouter un header animé.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mb-6">
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">React</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">Bootstrap</span>
                                                <span class="px-2 py-1 rounded border border-outline-variant text-outline font-label-caps text-[10px] bg-surface-container">VantaJS</span>
                                        </div>
                                        <a 
                                                href="#"
                                                class="w-full py-3 rounded-lg bg-surface-container-high border border-outline-variant text-primary font-technical-sm text-technical-sm group-hover:bg-primary/10 group-hover:border-primary/50 transition-all duration-300 flex items-center justify-center gap-2"
                                        >
                                                <span class="">Visiter</span>
                                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                </div>
                        </div>
                </section>
                <!-- Lincoln Electric Section (Industrial/Tech) -->
                <section class="container mx-auto max-w-container-max px-margin-mobile md:px-margin-desktop py-[80px] relative z-10" id="experience">
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
                                                <span class="material-symbols-outlined text-secondary text-2xl">precision_manufacturing</span>
                                                <h3 class="font-technical-sm text-technical-sm text-secondary tracking-widest uppercase">Mon expérience en industrie</h3>
                                        </div>
                                        <h2 class="font-headline-lg text-headline-lg text-on-surface font-bold mb-6">Lincoln Electric</h2>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-4 text-lg font-bold text-white">Développement de logiciels embarqués pour des machines de soudage industrielles.</p>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-8 text-lg leading-relaxed">
                                                Leader mondial du soudage depuis 1895, concevant des solutions robotisées et automatisées pour du soudage industriel. Participation directe au développement de logiciels embarqués au cœur de machines de soudage de haute précision, avec des exigences strictes en matière de tolérance et de performances en temps réel pour des interfaces de machines lourdes et complexes.
                                        </p>
                                        <div class="flex flex-wrap gap-3">
                                                <span class="px-4 py-1.5 rounded border border-outline-variant text-outline font-label-caps text-label-caps bg-surface-container/80 backdrop-blur-sm">C/C++</span>
                                                <span class="px-4 py-1.5 rounded border border-outline-variant text-outline font-label-caps text-label-caps bg-surface-container/80 backdrop-blur-sm">QT/QML</span>
                                                <span class="px-4 py-1.5 rounded border border-outline-variant text-outline font-label-caps text-label-caps bg-surface-container/80 backdrop-blur-sm">YOCTO</span>
                                                <span class="px-4 py-1.5 rounded border border-outline-variant text-outline font-label-caps text-label-caps bg-surface-container/80 backdrop-blur-sm">PROTOCOLE BLUETOOTH</span>
                                        </div>
                                </div>
                        </div>
                </section>
        </main>
        <!-- Footer -->
        <footer class="w-full py-12 px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-6 bg-surface-container-lowest border-t border-white/5 relative z-10">
                <div class="font-technical-sm text-technical-sm text-secondary">© 2026 Thibaut GERARD</div>
                <nav class="flex flex-wrap justify-center gap-8">
                        <a class="font-technical-sm text-technical-sm text-on-surface-variant hover:text-secondary-container transition-all hover:translate-y-[-2px]" href="https://github.com/ThibautG60">GitHub</a>
                        <a class="font-technical-sm text-technical-sm text-on-surface-variant hover:text-secondary-container transition-all hover:translate-y-[-2px]" href="https://www.linkedin.com/in/thibaut-g%C3%A9rard-4ba81a359/">LinkedIn</a>
                        <a class="font-technical-sm text-technical-sm text-on-surface-variant hover:text-secondary-container transition-all hover:translate-y-[-2px]" href="Mentions">Mentions Légales</a>
                </nav>
        </footer>
</body>
</html>