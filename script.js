$(window).on("scroll", function () {
  $('.navbar-header').toggleClass('tiny', $(document).scrollTop() > 100);
});//the top navigation bar shrinks and sticks to the page

var scroll_pos = 0;
$(document).scroll(function() {
    scroll_pos = $(this).scrollTop();
    if(scroll_pos > 1010) {
        $(".svg-wrapper .shape").css('-webkit-animation', '.8s draw linear forwards');
        $('.text').css({fontSize:'16px',letterSpacing:'1px', left:'75px'});
        $('.text').text("SVG animation on scroll");
    }
    else {
        $(".svg-wrapper .shape").css('-webkit-animation', '.8s antidraw linear backwards');
        $('.text').text("HOVER");
        $('.text').css({fontSize:'22px',letterSpacing:'8px',left:'119px'});
    }
});


$(function() {
     $('#menu').click(function (){
    	$('.sidenav').width(260);
      $('.container, .navbar, .parallax-window').css('-webkit-filter','blur(2px)');
    /*$(this).css('left','220px');*/
 		});//blur filter on click
    $('#closebtn').click(function (){
    	$('.sidenav').width(0);
      $('.container, .navbar, .parallax-window').css('-webkit-filter','blur(0px)');
 		});
    $('.container').click(function() {
      $('.sidenav').width(0);
      $('.container, .navbar, .parallax-window').css('-webkit-filter','blur(0px)');
    });

    $('#login-email, #login-password').focus(function(){
      $(this).closest('.container').css({
        background:'-webkit-gradient(radial, 145 23, 0, 145 23, 300, from(rgb(227, 208, 132)), to(rgb(175, 115, 42))) rgb(175, 115, 42)',/*sepia*/
        color:'#000',
        boxShadow: '0 0 30px #222',
      });
      $('#menu').css({opacity:'0'});
    });

    $('#login-email, #login-password').blur(function(){
      $(this).closest('.container').css({
        background:'#e3dbce',
        color:'#222',
        boxShadow: '0 0 0px #222',
      });
      $('#menu').css({opacity:'1'});
    });
});
$('#imageModal').modal({
    backdrop: 'static'
});
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: '200' },1000, "slow");
});
$('.sidenav').click(function(e){
   	 e.stopPropagation();
});
