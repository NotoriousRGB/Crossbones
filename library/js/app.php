<script>
$(window).load(function() {

    $('.flexslider').flexslider({
    	
    	animation: "slide",
    	directionNav: false,
			controlNav: true,
			slideshowSpeed: 6000,          
			animationDuration: 800,
			controlsContainer: ".flex-container",
      start: function(){
        $('#slider h3').hide().fadeIn(2000);
      },
      before: function(){
        $('#slider h3').hide().fadeIn(2000);
      },
    });



  });


  $(document).ready(function(){
  	
    // $('nav ul li ul').css({ display: 'none'});
    // $('nav ul li').has('ul').hover(function(){
    //   $(this).find('ul').css({ display: 'block'}).slideDown("slow").show(300);
    // }, function(){
    //   $(this).find('ul').fadeOut(800).css({ display: 'none'});
    // });

    $('#portfolio img').hover(function(){
      $(this).css({'opacity': '0.7'});
    }, function(){
      $(this).css({'opacity': '1'});
    });

    $('#centeredmenu ul li').has('ul').hover(function(){
      $(this).find('ul').hide().slideDown(200);
    }, function(){
      $(this).find('ul').hide();
    });


    $('#centeredmenu').mobileMenu({
      defaultText: 'Navigate to...',
      className: 'hide-on-desktops',
      subMenuDash: '&#10206;'
});

  });


</script>