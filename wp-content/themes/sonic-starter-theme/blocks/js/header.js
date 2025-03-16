(() =>  {
    const initHeader = () => {
        const hamburger = document.querySelector('.hamburger-cta');
        const nav = document.querySelector('.mobile-links');
        const close = document.querySelector('.close-menu-cta');
        if (!hamburger || !nav) return;
        hamburger.addEventListener('click', () => {
            nav.style.display = 'flex';
            hamburger.style.display = 'none';
            close.style.display = 'block';
        });
        close.addEventListener('click', () => {
            nav.style.display = 'none';
            hamburger.style.display = 'block';
            close.style.display = 'none';
        })
    }
    document.addEventListener('DOMContentLoaded', initHeader);
})();


