
var $mobileNav = $('#mobile-nav');
var $bugerMenu = $('#mobileIcon');

$bugerMenu.click(function () {
  $bugerMenu.toggleClass('open')
  $mobileNav.slideToggle('medium', function () {
    if ($mobileNav.is(':visible')) {
      $mobileNav.css('display', 'block')
    } else { $mobileNav.css('display', 'none') }
  });
});

const $window = $(window);

$window.resize(function () {
  if ($window.width() > 710) { $mobileNav.slideUp('medium') };
});

$window.resize(function () {
  if ($window.width() > 710) { $bugerMenu.removeClass('open') }
});

