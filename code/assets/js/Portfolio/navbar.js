const mobileMenuButton = document.getElementById('mobile-menu-button');
const headerNavigation = document.getElementById('header-navigation');
const mobileMenuIcon = mobileMenuButton.querySelector('.material-symbols-outlined');

const setMobileMenuOpen = (isOpen) => {
    headerNavigation.classList.toggle('is-open', isOpen);
    mobileMenuButton.setAttribute('aria-expanded', String(isOpen));
    mobileMenuButton.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
    mobileMenuIcon.textContent = isOpen ? 'close' : 'menu';
};

mobileMenuButton.addEventListener('click', () => {
    setMobileMenuOpen(mobileMenuButton.getAttribute('aria-expanded') !== 'true');
});

headerNavigation.addEventListener('click', (event) => {
    if (event.target.closest('a')) {
        setMobileMenuOpen(false);
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        setMobileMenuOpen(false);
    }
});

window.matchMedia('(min-width: 768px)').addEventListener('change', () => {
    setMobileMenuOpen(false);
});