try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    window.WOW = require('wow.js');
} catch (e) {}


require('./scripts/easing');
window.owlCarousel = require('./scripts/owl.carousel');
window.ScrollReveal = require('./scripts/scrollreveal');
window.mixitup = require('mixitup');
// window.isotope = require('./scripts/cells-by-row');
require('./scripts/main');
require('./scripts/contactform');
