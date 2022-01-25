<template>
    <div>

      <div style="background:black; height:700px;" v-bind:style="{display: display}">
        <div style="position:relative; width:15%; top:260px; margin: 0 auto; ">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
      </div>
      </div>


    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url('img/teleph.jpg');">
        <div class="bradcumbContent" style="border: solid #614913">
            <h2 style="font-weight: normal;">Contact me</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>

    <section class="contact-area mt-30 section-padding-100-0">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6">
                  <footer class="footer-area section-padding-100-0" style="padding-top:10px;">






                              <!-- Footer Widget Area -->

                                  <div class="footer-widget-area mb-100">
                                      <div class="widget-title">
                                          <h4>Subscribe</h4>
                                      </div>
                                      <form  class="subscribe-form">
                                          <input v-model.lazy="subscribes.email" type="email"  id="subscribeemail">

                                          <button  v-on:click.prevent="subscribe">subscribe</button>

                                      </form>
                                      <p v-show="message !=''">{{message}}</p>
                                  </div>




                  </footer>
                    <div class="contact-content mb-100">





                        <!-- Contact Social Info -->
                        <div class="contact-social-info mt-50">
                            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a> -->
                            <a target="_blank" href="https://www.facebook.com/jean.toussaint.167" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://twitter.com/ToussaintSax" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.instagram.com/toussaintsax/" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a> -->
                            <a target="_blank" href="https://www.youtube.com/channel/UCGor6Z-2196pMaDZU46WcrA/featured" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <!-- <a target="_blank" href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                        </div>


                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                              <img src="http://pngimg.com/uploads/iphone/iphone_PNG5733.png" alt="">

                            </div>
                            <h6>+447973821462</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="http://www.utoledo.edu/success/trio/images/mail.png" alt="">
                            </div>
                            <h6 style="margin-left:3px;">jtoussaintsax@yahoo.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form >
                                <div class="form-group">
                                    <input type="text" class="form-control" v-model.lazy="messa.name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" v-model.lazy="messa.email" id="email" placeholder="Your E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" v-model.lazy="messa.subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea v-model.lazy="messa.text" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button class="btn musica-btn mt-30" v-on:click.prevent="mess" >send message</button>

                            </form>
                            <p v-show="poruka !=''">{{poruka}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    </div>
</template>

<script>
    export default {
      data(){
        return{
          subscribes:{
          //  id:1,
            email:''
          },
          messa:{
            email:'',
            name:'',
            subject:'',
            text:''
          },
            reviews:{},

            display:'none',
            message:'',
            poruka:''

        }
      },
      mounted(){
        let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/active.js");
        document.head.appendChild(ckeditor14);
        //za razliku od drugih komponenti ovde sam ostavio script tag ali sam zakomentarisao nav nenu u active.js
      },
        methods: {
        subscribe: function(){
          var self=this;
          axios.post('email', this.subscribes).then(function(data){
                        console.log(data);
                      //  this.submitted = true;
                      self.subscribes.email='';
                      self.message=data.data.message;
                    })
                    .catch(err => console.log(err));


        },
        mess: function(){
          var self=this;
          axios.post('mess', this.messa).then(function(data){
                        console.log(data);
                      //  this.submitted = true;
                    //  self.subscribes.email='';
                      self.poruka=data.data.poruka;
                    })
                    .catch(err => console.log(err));


        }
    }
    }
</script>
