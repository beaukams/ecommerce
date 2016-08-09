jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');

  $(document).ready(function() {
     var navoffeset=$(".agileits_header").offset().top;
     $(window).scroll(function(){
      var scrollpos=$(window).scrollTop(); 
      if(scrollpos >=navoffeset){
        $(".agileits_header").addClass("fixed");
      }else{
        $(".agileits_header").removeClass("fixed");
      }
     });
     
  });

  $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        }); 
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
}); 

$(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });  

  paypal.minicart.render({
    action: '#'
  });

  if (~window.location.search.indexOf('reset=true')) {
    paypal.minicart.reset();
  }

  addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } 