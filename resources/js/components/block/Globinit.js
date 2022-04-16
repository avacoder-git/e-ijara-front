// initialization of countdowns
var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
    yearsElSelector: '.js-cd-years',
    monthElSelector: '.js-cd-month',
    daysElSelector: '.js-cd-days',
    hoursElSelector: '.js-cd-hours',
    minutesElSelector: '.js-cd-minutes',
    secondsElSelector: '.js-cd-seconds'
});
// initialization of header
$.HSCore.components.HSHeader.init($('#js-header'));
$.HSCore.helpers.HSHamburgers.init('.hamburger');

// initialization of HSMegaMenu component
$('.js-mega-menu').HSMegaMenu({
    event: 'hover',
    pageContainer: $('.container'),
    breakpoint: 991
});

// initialization of HSDropdown component
$.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
    afterOpen: function () {
        $(this).find('input[type="search"]').focus();
    }
});

// initialization of range slider
$.HSCore.components.HSSlider.init('#rangeSlider1');

// initialization of custom select
$.HSCore.components.HSSelect.init('.js-custom-select');

// initialization of carousel
$.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

// initialization of popups
$.HSCore.components.HSPopup.init('.js-fancybox');

// initialization of go to
$.HSCore.components.HSGoTo.init('.js-go-to');
