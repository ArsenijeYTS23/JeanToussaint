<template>
    <div>
      <div style="background:black; height:700px;" v-bind:style="{display: display}">
        <div style="position:relative; width:15%; top:260px; margin: 0 auto; ">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
      </div>
      </div>
      <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url('img/med.jpg');">
          <div class="bradcumbContent" style="border: solid #614913">
              <h2 style="font-weight: normal;">Media</h2>
          </div>
      </div>
      <!-- bg gradients -->
      <div class="bg-gradients"></div>

      <div class="featured-shows-area section-padding-100" style="padding-bottom: 30px;">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="section-heading dark">
                          <h2>Photos</h2>

                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12">
                      <div class="featured-shows-slides owl-carousel">

                          <!-- Single Featured Shows -->
                          <div class="single-featured-shows" v-for="pic in media[0]" v-bind:key='pic.id'>
                              <img v-bind:src="'img/media/pictures/'+pic.id+'.jpg'" alt="">
                              <!-- Content -->
                              <!-- <div class="featured-shows-content">
                                  <div class="shows-text">
                                      <h4>Grand Hall Miami</h4>
                                      <p>January 23</p>
                                      <a href="#" class="buy-tickets-btn">Buy Tickets</a>
                                  </div>
                                  <div class="bg-gradients"></div>
                              </div> -->
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>



      <div class="section-heading dark">
          <h2>Videos</h2>

      </div>


      <div class="musica-music-artists-area d-flex flex-wrap clearfix" style="background-color:transparent;">


          <!-- Music Search -->

          <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" v-for="video in media[1]" v-bind:key='video.id' style="margin-bottom:5px;">
              <!-- Content -->
              <iframe width="100%" height="100%" v-bind:src="'https://www.youtube.com/embed/'+video.link" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



          </div>


      </div>
   <h6 style="text-align:center; padding-bottom:10px; margin-top:10px;">Copyright<p>&copy; 2019 ArsenijeYts23</p></h6>
    </div>
</template>

<script>

    export default {
      data () {
          return {
              media:{},
            display:'block'
          }
      },
      created(){
      //  this.disc();
      //  this.album();
      },

      mounted(){
        let ckeditor1 = document.createElement('script');    ckeditor1.setAttribute('src',"js/bootstrap/popper.min.js");
        document.head.appendChild(ckeditor1);

        let ckeditor3 = document.createElement('script');    ckeditor3.setAttribute('src',"js/jquery/jquery-2.2.4.min.js");
        document.head.appendChild(ckeditor3);

        let ckeditor4 = document.createElement('script');    ckeditor4.setAttribute('src',"js/plugins/plugins.js");
        document.head.appendChild(ckeditor4);

        var self=this;
        setTimeout(function(){

            self.display='none';
        }, 600);
        axios.get('media')
        .then(response=>this.media=response.data)
      //  .then(response=>this.albums=response.data[1])
        .then(function(){

        self.testingmodel();
        });
     },

methods:{

	testingmodel:function(){
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
      // if ($.fn.classyNav) {
      //     $('#musicaNav').classyNav();
      // }

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
