<section class="container mx-auto max-w-4xl px-margin-mobile md:px-margin-desktop relative z-10">
    <div class="glass-panel rounded-2xl p-8 md:p-12 relative overflow-hidden flex flex-col items-center">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-white/20 to-transparent"></div>
        <div class="flex flex-row justify-center gap-4">
            <span class="material-symbols-outlined text-4xl text-secondary mb-4 drop-shadow-[0_0_10px_rgba(182,0,248,0.5)]">robot_2</span>
            <h2 class="font-headline-lg text-headline-lg text-on-surface font-semibold">T'Ebot <span id="tebot-cursor">_</span></h2>
        </div>
        <p class="font-body-md text-body-md text-on-surface text-center mb-8 max-w-xl">
            Posez-moi n'importe quelle question sur mon parcours, mes projets ou mes technos, mon jumeau numérique vous répond en direct !
        </p>
        <div class="w-full relative flex items-center">
            <input 
                class="w-full bg-surface-dim border border-outline-variant rounded-xl py-4 pl-6 pr-16 text-on-surface font-technical-sm text-technical-sm focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all placeholder:text-outline/50 shadow-inner" 
                placeholder="Poser une question ..."
                type="text"
            >
            <button class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-lg bg-primary/10 text-primary hover:bg-primary/20 hover:shadow-[0_0_10px_rgba(0,242,255,0.4)] transition-all">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">send</span>
            </button>
            <!-- Scanning line animation placeholder -->
            <div class="absolute bottom-0 left-0 h-[2px] bg-primary w-0 transition-all duration-1000 ease-in-out group-focus-within:w-full opacity-50 shadow-[0_0_8px_#00f2ff]"></div>
        </div>
    </div>
</section>