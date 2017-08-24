$(document).ready(function(){
  $('#btn-menu').click(function(){
    var menu = $('.menu-bar');
    var bg = $('.bg-shadow')
    if(menu.hasClass('menu-expanded')){
      menu.removeClass('menu-expanded').addClass('menu-collapsed');
      bg.addClass('hide');
      $(this).find('i').removeClass('fa-close').addClass('fa-bars');
    }else {
      menu.removeClass('menu-collapsed').addClass('menu-expanded');
      bg.removeClass('hide');
      $(this).find('i').removeClass('fa-bars').addClass('fa-close');
    }
    return false;
  });
});