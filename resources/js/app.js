try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    window.WOW = require('wow.js');
} catch (e) {}


require('./scripts/easing');
window.owlCarousel = require('./scripts/owl.carousel');
window.ScrollReveal = require('./scripts/scrollreveal');
window.isotope = require('./scripts/isotope.pkgd');
require('./scripts/main');
require('./scripts/contactform');
