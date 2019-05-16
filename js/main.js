$(document).ready(function() {

  $('#sideNav').sidenav({
    inDuration: 200,
    outDuration: 200
  });

  $('#sideNavButton').click(function() {
    $('.hamburger').addClass('is-active');
    $('#sideNav').addClass('bounce-in-left').removeClass('bounce-out-left');
  })
  $('.sidenav-overlay').click(function() {
    $('.hamburger').removeClass('is-active');
    $('#sideNav').removeClass('bounce-in-left').addClass('bounce-out-left');
  })

  /*
  $('#sideNavButton').click(function() {
    $('#sideNavButton').removeClass('puff-in-center').addClass('puff-out-center');
    $('.sidenav').removeClass('puff-')
  });
  $('.sidenav-overlay').click(function() {
    $('#sideNavButton').removeClass('puff-out-center').addClass('puff-in-center');
  });
  */
});
