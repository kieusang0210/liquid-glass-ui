const fs = require('fs');
let css = fs.readFileSync('style.css', 'utf8');

// Remove all occurrences of .hero-trust--right block
css = css.replace(/\.hero-trust--right\s*\{[^}]+\}/g, '');

// There is a weird block added by the previous replace tool inside media query. Let's fix up anything broken.
// I will just append the correct block at the end.
const correctBlock = `
.hero-trust--right {
    position: absolute;
    bottom: 5%;
    right: 0;
    left: auto;
    margin-top: 0 !important;
    padding-top: 0 !important;
    border-top: none !important;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.6);
    border-radius: 16px;
    padding: 1.2rem 1.8rem !important;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    z-index: 10;
}

@media (max-width: 991px) {
    .hero-trust--right {
        position: relative;
        bottom: 0;
        left: 0;
        right: auto;
        margin-top: 2rem !important;
        justify-content: center;
        width: 100%;
        background: transparent;
        box-shadow: none;
        border: none !important;
        border-top: 1px solid var(--border) !important;
        border-radius: 0;
        padding: 2rem 0 0 0 !important;
    }
}
`;

fs.writeFileSync('style.css', css + correctBlock);
console.log('Fixed style.css');
