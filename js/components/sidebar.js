var $openSidebar = $('#openSidebar');
var $sidebar = $('.sidebar-container');
var $closeSidebar = $('#closeSidebar');
var transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend';
var $sidebarButton = $('.navigation-button');

function zIndex() {
  $sidebar.toggleClass('behind');
}

function fixedBody() {
  $('body').toggleClass('overflow-hidden');
}

function transformClose() {
  $sidebarButton.toggleClass('close');
}

$sidebarButton.click(function() {

  if ($sidebarButton.hasClass('close')) {
    $sidebar.toggleClass('show').bind(transitionEnd, zIndex);
  }

  else {
    zIndex();
    $sidebar.toggleClass('show').unbind();
  }

  transformClose();
  fixedBody();
});
