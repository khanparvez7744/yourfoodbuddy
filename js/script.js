$(document).ready(function(){
  // start hide copyright
    if($(window).width()<='600'){
      $('.footer-copyright p').removeClass('left').removeClass('right');
    }
  // end hide copyright
  // start about center
    if($(window).width()<='600'){
      $('.abtCenter').addClass('center');
    }
  // end about center
    $('.sidenav').sidenav();
    $('.testCarousel').carousel({
      indicators: true
    });
    $('.bannerCarousel').carousel({
        fullWidth: true,
        indicators: true
      });
      $('.instantCarousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        responsive:{
            0:{
              items:4,
              margin:10
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
      });
      $('.vegCarousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        responsive:{
            0:{
              items:4,
              margin:10
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
      });
      $('.nonvegCarousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        responsive:{
            0:{
              items:4,
              margin:10
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
      });
      $('.beverageCarousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        responsive:{
            0:{
                items:4,
                margin:10
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
      });
      $('.vegCarousel').hide();
      $('.nonvegCarousel').hide();
      $('.beverageCarousel').hide();
      $('#insClick').mouseover(function(){
        $('.instantCarousel').show();
        $('.vegCarousel').hide();
        $('.nonvegCarousel').hide();
        $('.beverageCarousel').hide();
      });
      $('#vegClick').mouseover(function(){
        $('.instantCarousel').hide();
        $('.vegCarousel').show();
        $('.nonvegCarousel').hide();
        $('.beverageCarousel').hide();
      });
      $('#nonvegClick').mouseover(function(){
        $('.instantCarousel').hide();
        $('.vegCarousel').hide();
        $('.nonvegCarousel').show();
        $('.beverageCarousel').hide();
      });
      $('#levClick').mouseover(function(){
        $('.instantCarousel').hide();
        $('.vegCarousel').hide();
        $('.nonvegCarousel').hide();
        $('.beverageCarousel').show();
      });
      $('.qnaCollaps').collapsible();
      // start sticky navbar
      $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
          $('#stickyNav').addClass('navbarFixed');
        }
        if ($(window).scrollTop() < 300) {
          $('#stickyNav').removeClass('navbarFixed');
        }
      });
      // end sticky navbar
});
  // start move top
  window.onscroll = function () {
  if (pageYOffset >= 200) {
          document.getElementById('moveTop').style.visibility = "visible";
  }
  else {
          document.getElementById('moveTop').style.visibility = "hidden";
        }
  };
  // end move top
  $('.dropdown-trigger').dropdown();


    // start phone number
    var userName = document.querySelector('#phone');
    userName.addEventListener('input', restrictNumber);
    function restrictNumber (e) {
      var newValue = this.value.replace(new RegExp(/[^\d]/,'ig'), "");
      this.value = newValue;
    }
    // end phone number