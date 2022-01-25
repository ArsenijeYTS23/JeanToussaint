<template>
    <div>
      <div style="background:black; height:700px;" v-bind:style="{display: display}">
        <div style="position:relative; width:15%; top:260px; margin: 0 auto;">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
      </div>
      </div>
      <div style="background:#1b1b16;">


      <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url('img/discog.jpg');">
          <div class="bradcumbContent" style="border: solid #614913">
              <h2 style="font-weight: normal;">Discography</h2>
          </div>
      </div>
      <!-- bg gradients -->
      <div class="bg-gradients"></div>
      <section class="elements-area mt-30 section-padding-100-0" >

          <div class="container">
              <div class="row">





      <div class="col-12 col-lg-6">
        <p class="blink_me"  v-bind:style="{display: blink}">Music will take a moment to load the first time, please wait...<br>over 100 compositions</p>
          <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
              <!-- single accordian area -->
              <div class="panel single-accordion" style="background:#1b1b16; margin-bottom: 35px;"  v-for="album in discography[1]" v-bind:key='album.id'>

                  <h6>
                    <div class="row">
                      <div class="col-4" style="padding-right:0px;">
                        <img style="width:100%; border-radius:10px;" v-bind:src="'img/discography-albums/'+album.id+'.jpg'"/>
                      </div>
                      <div class="col-8">
                    <a style="font-family: 'rawline', sans-serif; padding:10px 70px 30px 3px; position: absolute; bottom: 0; width:80%;" role="button" class="collapsed" aria-expanded="true" v-bind:aria-controls="'collapse-'+album.id" data-toggle="collapse"
                     data-parent="#accordion" v-bind:href="'#collapse-'+album.id">
                     <!-- <img style="width:10%;" src="http://jeantoussaint.com/wp-content/uploads/2014/02/jt-tate-song.jpg"/> -->
                          {{album.title}}
                          <span class="accor-open" ><i class="fa fa-plus" aria-hidden="true"></i></span>
                          <span class="accor-close" ><i class="fa fa-minus" aria-hidden="true"></i></span>
                          </a>
                        </div>
                        </div>
                        </h6>
                  <div  v-bind:id="'collapse-'+album.id" class="accordion-content collapse">

                    <div class="featured-album-area section-padding-100 clearfix" id="player" style="padding:1px; border-radius:10px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="featured-album-content d-flex flex-wrap">

                                      <div class="album-thumbnail h-100 bg-img" style="flex: 0 0 1%; max-width: 1%; width: 11%;">
                                    <!-- <img src="img/music-player/8.jpg"/> -->
                                      </div>
                                        <div class="album-songs h-100" style="flex: 0 0 100%; max-width: 100%; width: 100%;">

                                            <!-- Album Info -->
                                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">

                                                <div class="album-buy-now">
                                                    <a href="#" class="btn musica-btn">Buy it on Itunes</a>

                                                </div>
                                            </div>

                                            <div class="album-all-songs" style="touch-action:auto !important;">

                                                <!-- Music Playlist -->
                                                <div class="music-playlist">
                                                    <!-- Single Song -->
                                                    <div class="single-music active"  v-for="song in album.songs" v-bind:key='song.id'>
                                                        <h6>{{song.title}}</h6>
                                                        <audio preload="auto" controls>

                                                            <source v-bind:src="'audio/'+album.id+'/'+song.number+'.mp3'">
                                                        </audio>
                                                    </div>






                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                  </div>
              </div>

          </div>
      </div>
      <div class="col-12 col-lg-6" >
        <div style="color:white; text-align:center; margin-bottom:40px;"  v-for="disc in discography[0]" v-bind:key='disc.id'>
     <h3 style="text-align:center; color:white;">{{disc.title}}</h3>
     <ul>
       <li v-for="rec in disc.records" v-bind:key='rec.id'>{{rec.title}}</li>


     </ul>
   </div>

      </div>


   </div>

 </div>
</section>
<h6 style="text-align:center; padding-bottom:10px;">Copyright<p>&copy; 2019 ArsenijeYts23</p></h6>
    </div>
  </div>
</template>

<script>

    export default {
      data () {
          return {
              discography:{},
              home_page: {},
              albums:{},
              display:'block',
              blink:'block'
          }
      },
      created(){
      //  this.disc();
      //  this.album();
      },

      mounted(){
      

        let ckeditor4 = document.createElement('script');    ckeditor4.setAttribute('src',"js/plugins/plugins.js");
        document.head.appendChild(ckeditor4);

        var self=this;
        setTimeout(function(){

            self.display='none';
        }, 600);
        axios.get('discography')
        .then(response=>this.discography=response.data)
      //  .then(response=>this.albums=response.data[1])
        .then(function(response){
          console.log(response);
        self.testingmodel();
        });
        setTimeout(function(){

            self.blink='none';
        }, 16600);





     },
      updated(){






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
              background: "#fff",
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
  hero:function(){
    axios.get('home_page')
    .then(response=>this.home_page=response.data)
    .then(function(response){

    });
  },
  disc:function(){
    axios.get('discography')
    .then(response=>this.discography=response.data[0])
    .then(response=>this.albums=response.data[1])
    .then(function(response){
    console.log(response);
    });
  }

}

    }
</script>
