<?php
    if($_SERVER['REQUEST_URI'] == '/'){
        $skills = "#skills";
        $projets = "#projets";
        $experience = "#experience";
    } else {
        $skills = "/#skills";
        $projets = "/#projets";
        $experience = "/#experience";
    }
?>

<header class="fixed top-0 w-full z-50 flex justify-between items-center px-margin-mobile md:px-margin-desktop h-20 bg-surface/40 backdrop-blur-xl border-b border-white/10 shadow-[0_0_15px_rgba(0,219,231,0.2)]">
    <div class="font-headline-md text-headline-md font-bold text-primary tracking-wider">Thibaut GERARD</div>
    <nav id="header-navigation" class="header-navigation hidden md:flex items-center md:gap-8 font-body-md text-body-md">
        <a class="header-navigation-link text-on-surface-variant hover:text-primary transition-colors duration-300" href="<?php echo $skills; ?>">Compétences</a>
        <a class="header-navigation-link text-on-surface-variant hover:text-primary transition-colors duration-300" href="<?php echo $projets; ?>">Projets</a>
        <a class="header-navigation-link text-on-surface-variant hover:text-primary transition-colors duration-300" href="<?php echo $experience; ?>">Expérience</a>
        <a class="header-navigation-link text-on-surface-variant hover:text-primary transition-colors duration-300" href="mailto:contact@thibaut-gerard.fr">Contact</a>
    </nav>
    <!-- Mobile Menu Icon -->
    <button id="mobile-menu-button" type="button" class="mobile-menu-toggle md:hidden text-primary" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="header-navigation">
        <span class="material-symbols-outlined" aria-hidden="true">menu</span>
    </button>
</header>

<script src="/assets/js/Portfolio/navbar.js"></script>