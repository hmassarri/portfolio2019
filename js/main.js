$(document).ready(function() {

  $('body').css('display', 'none');
  $('body').fadeIn(2000);

  $('a.transition').click(function() {

    $('.main-title, .two, .three, .four, .five, .six, .card-desc').animate().fadeOut();
    $('body').css('background', '#000000');

    $('.one').animate({
      height: '1000px',
      width: '1000px'
    });


    //event.preventDefault();
    //linkLocation = this.href;
    //$('body').toggleClass('slide-out-fwd-center').fadeOut(4000, redirectPage);
  });

  //function redirectPage() {
    //window.location = linkLocation;
  //}

});
