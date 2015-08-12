var $toggleNotice = $('.notice .header');
var $overlay = $('.overlay');
var $notice = $('.notice');

function toggleNotice() {
  $overlay.toggleClass('fadedVisible');
  $notice.toggleClass('minified');
}

$toggleNotice.click(function() {
  toggleNotice();
});
