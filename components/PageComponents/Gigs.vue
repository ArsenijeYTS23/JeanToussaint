<template>
    <div>
      <div style="background:black; height:700px;" v-bind:style="{display: display}">
        <div style="position:relative; width:15%; top:260px; margin: 0 auto; ">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
      </div>
      </div>


      <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url('img/gigs.jpg');">
          <div class="bradcumbContent" style="border: solid #614913">
              <h2 style="font-weight: normal;">Events</h2>
          </div>
      </div>
      <!-- bg gradients -->
      <div class="bg-gradients"></div>
      <div class="upcoming-shows-area section-padding-100" style="background-color: #1d1d1a">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="section-heading">
                          <h2>Upcoming events</h2>

                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12">
                      <!-- Upcoming Shows Content -->
                      <div class="upcoming-shows-content">

                          <!-- Single Upcoming Shows -->
                          <div class="single-upcoming-shows d-flex align-items-center flex-wrap" v-for="gig in gigs[1]" v-bind:key="gig.id">
                              <div class="shows-date">
                                  <h2>{{formateddate(gig.date)[0]}} <span>{{formateddate(gig.date)[1]}}</span></h2>
                              </div>
                              <div class="shows-desc d-flex align-items-center">
                                  <div class="shows-img">
                                      <img src="img/events/1.png" alt="">
                                  </div>
                                  <div class="shows-name">
                                      <h6>{{gig.name}}</h6>
                                      <p>{{gig.city}}, {{gig.country}}</p>
                                  </div>
                              </div>
                              <div class="shows-location">
                                  <p v-if="gig.name !=''">{{gig.place}}</p>
                                  <p v-else>{{gig.place}}</p>
                              </div>
                              <div class="shows-time">
                                  <p>{{gig.time}}</p>
                              </div>
                              <!-- <div class="buy-tickets">
                                  <a href="#" class="btn musica-btn">Buy tickets</a>
                              </div> -->

                               
                          </div>



                          <!-- Single Upcoming Shows -->


                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="upcoming-shows-area section-padding-100" style="background-color: #1d1d1a">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="section-heading">
                          <h2>Past events</h2>

                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-12">
                      <!-- Upcoming Shows Content -->
                      <div class="upcoming-shows-content">

                          <!-- Single Upcoming Shows -->
                          <div class="single-upcoming-shows d-flex align-items-center flex-wrap" v-for="gig in gigs[0]" v-bind:key="gig.id">
                              <div class="shows-date">
                                  <h2 style="font-size:120%;">{{gig.days}}<span>days ago</span></h2>
                                  <!-- <h2>{{formateddate(gig.date)[0]}} <span>{{formateddate(gig.date)[1]}}</span></h2> -->
                              </div>
                              <div class="shows-desc d-flex align-items-center">
                                  <div class="shows-img">
                                      <img src="img/bg-img/s1.jpg" alt="">
                                  </div>
                                  <div class="shows-name">
                                      <h6>{{gig.place}}</h6>
                                      <p>{{gig.city}}, {{gig.country}}</p>
                                  </div>
                              </div>
                              <div class="shows-location">
                                  <p v-if="gig.name !=''">{{gig.name}}</p>
                                  <p v-else>{{gig.place}}</p>
                              </div>
                              <div class="shows-time">
                                  <p>{{gig.time}}</p>
                              </div>

                          </div>



                          <!-- Single Upcoming Shows -->


                      </div>
                  </div>
              </div>
          </div>

      </div>

<h6 style="text-align:center; padding-bottom:10px; background-color: #1d1d1a">Copyright<p>&copy; 2019 ArsenijeYts23</p></h6>


    </div>
</template>

<script>

    export default {
      data () {
          return {
              gigs:{},
              display:'block'
          }
      },
      created(){
        var self=this;
        axios.get('gigs')
        .then(response=>this.gigs=response.data)
      //  .then(response=>this.albums=response.data[1])
        .then(function(){
          self.testingmodel();

        });
        //self.height=1000
        //var self=this;
        setTimeout(function(){

            self.display='none';
        }, 700);
      },

      mounted(){


        // let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/active.js");
        // document.head.appendChild(ckeditor14);


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

     },

       formateddate:function(d){
     let arr = d.split(/[- :]/);
     var months = new Array('January', 'February', 'March',
                     'April', 'May', 'June', 'July', 'August',
                     'September', 'October', 'November', 'December');
    // console.log(arr);
     let date = new Date(Date.UTC(arr[0], arr[1], arr[2]));

     return [date.getDate(), months[(date.getMonth()-1)] ,date.getFullYear()]
     }
     }

    }
</script>
