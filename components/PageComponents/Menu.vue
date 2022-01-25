<template>
    <div>
      <!-- ##### Preloader ##### -->
      <div class="preloader d-flex align-items-center justify-content-center">
          <div class="circle-preloader">
              <img src="img/core-img/1.png" alt="">
          </div>
      </div>

      <!-- ##### Header Area Start ##### -->
      <header class="header-area">
          <!-- Navbar Area -->
          <div class="musica-main-menu">
              <div class="classy-nav-container breakpoint-off">
                  <div class="container-fluid">
                      <!-- Menu -->
                      <nav class="classy-navbar justify-content-between" id="musicaNav">

                          <!-- Nav brand -->
                          <!-- <a href="index.html" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a> -->
                            <!-- <a href="/" class="nav-brand" style="color:white">Jean Toussaint</a> -->
                             <router-link to="/" exact><a class="nav-brand" style="color:white">Jean Toussaint</a></router-link>
                          <!-- Navbar Toggler -->
                          <div class="classy-navbar-toggler" >
                              <span class="navbarToggler"  ><span></span><span></span><span></span></span>
                          </div>

                          <!-- Menu -->
                          <div class="classy-menu">

                              <!-- close btn -->
                              <div class="classycloseIcon">
                                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                              </div>

                              <!-- Nav Start -->
                              <div class="classynav">
                                  <ul>
                                      <li><router-link to="/" exact>Home</router-link></li>
                                      <li><router-link to="/bio" exact>Biography</router-link></li>
                                      <li><router-link to="/disc" exact>Discography</router-link></li>
                                      <li><router-link to="/gigs" exact>Events</router-link></li>
                                      <li><router-link to="/reviews" exact>Reviews</router-link></li>

                                      <!-- <li><a href="#">Pages</a>
                                          <ul class="dropdown">
                                              <li><a href="index.html">Home</a></li>
                                              <li><a href="about-us.html">About Us</a></li>
                                              <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                              <li><a href="blog.html">News</a></li>
                                              <li><a href="contact.html">Contact</a></li>
                                              <li><a href="elements.html">Elements</a></li>
                                          </ul>
                                      </li> -->
                                      <!-- <li><a href="#">Mega Menu</a>
                                          <div class="megamenu">
                                              <ul class="single-mega cn-col-4">
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about-us.html">About Us</a></li>
                                                  <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                  <li><a href="blog.html">News</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
                                                  <li><a href="elements.html">Elements</a></li>
                                              </ul>
                                              <ul class="single-mega cn-col-4">
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about-us.html">About Us</a></li>
                                                  <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                  <li><a href="blog.html">News</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
                                                  <li><a href="elements.html">Elements</a></li>
                                              </ul>
                                              <ul class="single-mega cn-col-4">
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about-us.html">About Us</a></li>
                                                  <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                  <li><a href="blog.html">News</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
                                                  <li><a href="elements.html">Elements</a></li>
                                              </ul>
                                              <ul class="single-mega cn-col-4">
                                                  <li><a href="index.html">Home</a></li>
                                                  <li><a href="about-us.html">About Us</a></li>
                                                  <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                  <li><a href="blog.html">News</a></li>
                                                  <li><a href="contact.html">Contact</a></li>
                                                  <li><a href="elements.html">Elements</a></li>
                                              </ul>
                                          </div>
                                      </li> -->
                                      <li><router-link to="/media" exact>Media</router-link></li>
                                      <li><router-link to="/contact" exact>Contact</router-link></li>
                                  </ul>

                                  <!-- Social Button -->
                                  <div class="top-social-info">
                                      <!-- <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a> -->
                                      <a target="_blank" href="https://www.facebook.com/jean.toussaint.167"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                      <a target="_blank" href="https://twitter.com/ToussaintSax"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                      <a target="_blank" href="https://www.instagram.com/toussaintsax/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                      <a target="_blank" href="https://www.youtube.com/channel/UCGor6Z-2196pMaDZU46WcrA/featured"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                      <!-- <a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                                  </div>

                              </div>
                              <!-- Nav End -->
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </header>





    </div>
</template>

<script>
    export default {
      mounted(){
        this.test();
      },
      methods:{



      	test:function(){
         var vm=this;
          this.$nextTick(function () {
            'use strict';

            var browserWindow = $(window);

            // :: 1.0 Preloader Active Code
            browserWindow.on('load', function () {
                $('.preloader').fadeOut('slow', function () {
                    $(this).remove();
                });
            });

            // :: 2.0 Nav Active Code
            if ($.fn.classyNav) {
                $('#musicaNav').classyNav();
            }

            // :: 3.0 Sliders Active Code
            if ($.fn.owlCarousel) {
                var welcomeSlide = $('.hero-slides');
                var featured_shows = $('.featured-shows-slides');
                var music_player = $('.music-player-slides');
                var discography = $('.discography-slides');

                welcomeSlide.owlCarousel({
                    items: 1,
                    margin: 0,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 7000,
                    smartSpeed: 1000,
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut'
                });

                welcomeSlide.on('translate.owl.carousel', function () {
                    var slideLayer = $("[data-animation]");
                    slideLayer.each(function () {
                        var anim_name = $(this).data('animation');
                        $(this).removeClass('animated ' + anim_name).css('opacity', '0');
                    });
                });

                welcomeSlide.on('translated.owl.carousel', function () {
                    var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
                    slideLayer.each(function () {
                        var anim_name = $(this).data('animation');
                        $(this).addClass('animated ' + anim_name).css('opacity', '1');
                    });
                });

                $("[data-delay]").each(function () {
                    var anim_del = $(this).data('delay');
                    $(this).css('animation-delay', anim_del);
                });

                $("[data-duration]").each(function () {
                    var anim_dur = $(this).data('duration');
                    $(this).css('animation-duration', anim_dur);
                });

                featured_shows.owlCarousel({
                    items: 3,
                    margin: 30,
                    loop: true,
                    nav: true,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 600,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
                    }
                });

                music_player.owlCarousel({
                    items: 3,
                    margin: 45,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 750,
                    responsive: {
                        0: {
                            items: 1
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        }
                    }
                });

                discography.owlCarousel({
                    items: 6,
                    margin: 30,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 600,
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 4
                        },
                        992: {
                            items: 6
                        }
                    }
                });
            }

            // :: 4.0 ScrollUp Active Code
            if ($.fn.scrollUp) {
                browserWindow.scrollUp({
                    scrollSpeed: 1500,
                    scrollText: '<i class="fa fa-angle-up"></i>'
                });
            }

            // :: 5.0 CounterUp Active Code
            if ($.fn.counterUp) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 2000
                });
            }

            // :: 6.0 Sticky Active Code
            if ($.fn.sticky) {
                $(".musica-main-menu").sticky({
                    topSpacing: 0
                });
            }

            // :: 7.0 Progress Bar Active Code
            if ($.fn.circleProgress) {
                $('#circle').circleProgress({
                    size: 160,
                    emptyFill: "rgba(0, 0, 0, .0)",
                    fill: '#cc1573',
                    thickness: '4',
                    reverse: true
                });
                $('#circle2').circleProgress({
                    size: 160,
                    emptyFill: "rgba(0, 0, 0, .0)",
                    fill: '#cc1573',
                    thickness: '4',
                    reverse: true
                });
                $('#circle3').circleProgress({
                    size: 160,
                    emptyFill: "rgba(0, 0, 0, .0)",
                    fill: '#cc1573',
                    thickness: '4',
                    reverse: true
                });
                $('#circle4').circleProgress({
                    size: 160,
                    emptyFill: "rgba(0, 0, 0, .0)",
                    fill: '#cc1573',
                    thickness: '4',
                    reverse: true
                });
            }

            // :: 8.0 audioPlayer Active Code
            if ($.fn.audioPlayer) {
                $('audio').audioPlayer();
            }

            // :: 9.0 Tooltip Active Code
            if ($.fn.tooltip) {
                $('[data-toggle="tooltip"]').tooltip()
            }

            // :: 10.0 niceScroll Active Code
            if ($.fn.niceScroll) {
                $(".album-all-songs").niceScroll({
                    background: "#fff"
                });
            }

            // :: 11.0 ScrollDown Active Code
            $("#scrollDown").on('click', function () {
                $('html, body').animate({
                    scrollTop: $("#player").offset().top - 15
                }, 1500);
            });

            // :: 12.0 prevent default a click
            $('a[href="#"]').on('click', function ($) {
                $.preventDefault();
            });


              //  alert('aaaaa');

        });

      	}
}

    }
</script>
