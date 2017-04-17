$(window).on("scroll", function () {
  $('.navbar-header').toggleClass('tiny', $(document).scrollTop() > 100);
});

$(function() {
     $('#menu').click(function (){
    	$('.sidenav').width(220);
  		$('body').css('background','rgba(0,0,0,.3)');
      $('body').css('marginLeft','220px');
 		});
    $('#closebtn').click(function (){
    	$('.sidenav').width(0);
  		$('body').css('background','#e3dbce');
      $('body').css('marginLeft','0');
 		});
    $('.container').click(function() {
      $('.sidenav').width(0);
      $('body').css({
        background:'#e3dbce',
      });
      $('body').css('marginLeft','0');
    });

    $('#login-email, #login-password').focus(function(){
      $(this).closest('form').css({
        boxShadow:'0 20px 50px rgba(0, 0, 0, 0.1)',
        padding:'15px 0px',
        transition:'.5s',
        zIndex:'12'
      });
      $(this).closest('.container').css({
        background:'rgb(0,0,0)',
        color:'#fc3',
        boxShadow: '0 0 30px #222'
      });
      $('#menu').css({opacity:'0'});
    });

    $('#login-email, #login-password').blur(function(){
      $(this).closest('form').css({
        boxShadow:'0 0 0 rgba(0, 0, 0, 0)',
        padding:'0 0',
      });
      $(this).closest('.container').css({
        background:'#e3dbce',
        color:'#222',
        boxShadow: '0 0 0px #222'
      });
      $('#menu').css({opacity:'1'});
    });
});

$('.sidenav').click(function(e){
   	 e.stopPropagation();
});
