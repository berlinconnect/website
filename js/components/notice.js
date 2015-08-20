var $toggleNotice = $('.notice .header');
var $closeNotice = $('.close-notice');
var $overlay = $('.overlay');
var $notice = $('.notice');

function fixedBody() {
  $('body').toggleClass('overflow-hidden');
}

function toggleNotice() {
  $overlay.toggleClass('zoomed');
  $notice.toggleClass('minified');
}

function openNotice() {
  $overlay.addClass('zoomed');
  $notice.removeClass('minified');
}


$toggleNotice.click(function() {
  openNotice();
  fixedBody();
});

$closeNotice.click(function() {
  toggleNotice();
  fixedBody();
});
