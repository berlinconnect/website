var $openSidebar = $('#openSidebar');
var $sidebar = $('.sidebar-container');
var $closeSidebar = $('#closeSidebar');
var transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend';

function zIndex() {
  $sidebar.toggleClass('behind');
}

function fixedBody() {
  $('body').toggleClass('overflow-hidden');
}

$openSidebar.click(function() {
  zIndex();
  fixedBody();
  $sidebar.addClass('show').unbind();
});

$closeSidebar.click(function() {
  $sidebar.removeClass('show').bind(transitionEnd, zIndex);
  fixedBody();
});

