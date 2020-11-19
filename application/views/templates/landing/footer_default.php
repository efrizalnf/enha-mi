   <section class="footer" id="section-footer">
       <div class="footer-container">
           <div class="row">
               <div class="col-md">
                   <div class="logo-footer justify-content-center text-center">
                       <img class="mb-2" src="<?php echo base_url()?>assets/landing/img/logo-enha2.png"
                           alt="footer mas nurul huda">
                       <h3>MIS Nurul Huda</h3>
                       <h5 class="mb-1">"Terwujudnya Insan kamil yang beriman, berilmu pengetahuan, cerdas,
                           terampil dan mampu mengembangkan diri, serta berakhlakul karimah"</h5>
                       <h7>Jl.KH. Wahid Hasyim Gg.Parasdi Dalam I No.7 Kec.Bojongloa Kidul Kel. Situsaeur
                           Bandung 40234
                       </h7>
                   </div>
               </div>
               <div class="col-md">
                   <h4>Line Kontak</h4>
                   <hr>
                   <ul>
                       <li><a href="tel:+62225207636" target="_blank"><i class="fas fa-phone fa-lg"></i>022-5207636</a>
                       </li>
                       <li><a href="mailto:info@minurulhuda.sch.id" target="_blank"><i
                                   class="fas fa-envelope fa-lg"></i>info@minurulhuda.sch.id</a>
                       </li>
                   </ul>
                   <h4>Sosial Media</h4>
                   <hr>
                   <ul>
                       <li><a href="https://www.facebook.com/mi.nurulhuda.589" target="_blank"><i
                                   class="fab fa-facebook fa-lg"></i> @minurulhudakotabandung</a></li>

                       <li><a href="https://www.youtube.com/watch?v=MngGrau0l3U&t=16s" target="_blank"><i
                                   class="fab fa-youtube fa-lg"></i> @mi nurulhuda</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md">
                   <h4>Temukan Kami di Maps </h4>
                   <hr>
                   <div id="map"></div>
               </div>
           </div>
           <div class="copyright justify-content-center text-center mt-3"><a href="http://www.minurulhuda.sch.id"
                   target="blank">
                   &copyMIS NURUL HUDA Kota Bandung 2020 | Allright reserved</a> |
               <strong> Developed by </strong><a
                   href="https://play.google.com/store/search?q=pub%3Azlz%20tech&c=apps&hl=in" target="blank">zlz</a>
           </div>
       </div>

   </section>
   <script src="<?php echo base_url()?>assets/landing/js/jquery-3.4.1.slim.min.js"></script>
   <script src="<?php echo base_url()?>assets/landing/js/popper.min.js"></script>
   <script src="<?php echo base_url()?>assets/landing/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url()?>assets/landing/js/smooth-scroll.min.js"></script>
   <script src="<?php echo base_url()?>assets/landing/js/baguetteBox.min.js"></script>
   <script type="text/javascript">
baguetteBox.run('.tz-gallery');

$(function() {
    var scroll = new SmoothScroll('a[href*="#section-"]', {
        // speed: 1000
        easing: 'easeInOutCubic',
        customEasing: function(time) {
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

        }
    });
});
   </script>
   <script src="<?php echo base_url()?>assets/landing/js/loader.js"></script>
   <script src="<?php echo base_url()?>assets/landing/js/enha.js"></script>
   <script async defer
       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfz3Euq9lMt4i7V-rho11jkgRCTC5t4vo&callback=initMap">
   </script>

   </body>

   </html>