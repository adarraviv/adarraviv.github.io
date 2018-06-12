<?php
      $body = '';
      include 'header.php';
?>
      
<div class="container zero-margin intro-image full-width"> 
      <div class="row topbottom-space">       
           <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2 top-space">
                  <div class="home">
                        <img src="images/HomeBrain.png" alt="Card Back" class="img-bottom">
                        <img src="images/HomeBrain_lit.png" alt="Card Front" class="img-top">
                  </div>
            </div>
            <div class="col-xs-12 intro-text">Give Your Home a Brain</div>
    </div>
</div>
<div class="container"> 
      <div class="row large-top-space">
            <div class="col-md-10 col-md-offset-1">       
                	<div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 col-xs-6 col-xs-offset-3">
                                      <a href="smart-security-devices.php"><img src="images/security_icon.png" alt="food" class="img-responsive center-block page-icon"></a>
                                </div>
                            </div>
                            <h2 class="text-center">Security</h2>
                            <p class="margin-top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                  </div>
                  <div class="col-sm-4">
                        <div class="row">
                             <div class="col-sm-8 col-sm-offset-2 col-xs-6 col-xs-offset-3">
                                   <a href="smart-utilities-devices.php"><img src="images/utilies_icon.png" alt="food" class="img-responsive center-block page-icon"></a>
                             </div>
                            </div>
                       <h2 class="text-center">Utilities</h2>
                       <p class="margin-top">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="col-sm-4">
                       <div class="row">
                              <div class="col-sm-8 col-sm-offset-2 col-xs-6 col-xs-offset-3">
                                    <a href="smart-entertainment-devices.php"><img src="images/entertainment_icon.png" alt="food" class="img-responsive center-block page-icon"></a>
                              </div>
                       </div>
                       <h2 class="text-center">Entertainment</h2>
                       <p class="margin-top">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
            </div>
      </div>
</div>
<div class="container">
      <div class="row large-top-space large-bottom-space large-bottom-padding">
            <div class="col-xs-11 col-md-10 col-centered">
                  <h2>Featured Products</h2>
                  <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
                        <div class="carousel-inner">
                              <!--Item 1-->
                              <div class="item active">
                                  <div class="carousel-col">
                                              <img src="images/chromecast.png" alt="Chromecast " class=" img-responsive carouselimage">
                                              <div class="carouseloverlay">
                                                   <div class="carouseltext"><a href="smart-entertainment-devices.php#chromecast">Chromecast</a></div>
                                             </div>
                                  </div>
                              </div>
                             <!--Item 2-->
                             <div class="item">
                                  <div class="carousel-col">
                                               <img src="images/wemo_light.png" alt="Wemo Switch" class="img-responsive carouselimage">
                                               <div class="carouseloverlay">
                                                     <div class="carouseltext"><a href="smart-utilities-devices.php#wemo-switch">Wemo Switch</a></div>
                                               </div>
                                  </div>
                              </div>
                              <!--Item 3-->
                              <div class="item">
                                  <div class="carousel-col">
                                              <img src="images/good_home.png" alt="Google Home" class="img-responsive carouselimage"> 
                                               <div class="carouseloverlay">
                                                   <div class="carouseltext"><a href="smart-entertainment-devices.php#google-home">Google Home</a></div>
                                             </div>
                                  </div>
                              </div>
                              <!--Item 4-->
                              <div class="item">
                                    <div class="carousel-col">
                                               <img src="images/keypad_entry.png" alt="Keypad Entry" class="img-responsive carouselimage">
                                               <div class="carouseloverlay">
                                                     <div class="carouseltext"><a href="smart-security-devices.php#keypad-entry">Keypad Entry</a></div>
                                               </div>
                                    </div>
                              </div>
                              <!--Item 5-->
                              <div class="item">
                                    <div class="carousel-col">
                                               <img src="images/Ring.png" alt="Ring" class="img-responsive carouselimage">
                                               <div class="carouseloverlay">
                                                     <div class="carouseltext"><a href="smart-security-devices.php#ring">Ring</a></div>
                                               </div>
                                    </div>
                              </div>
                              <!--Item 6-->
                              <div class="item">
                                    <div class="carousel-col">
                                               <img src="images/hue_light.png" alt="Hue Light" class="img-responsive carouselimage">
                                               <div class="carouseloverlay">
                                                     <div class="carouseltext"><a href="smart-utilities-devices.php#hue-light">Hue Light/Switch</a></div>
                                               </div>
                                    </div>
                              </div>
                              <!--Item 7-->
                              <div class="item">
                                    <div class="carousel-col">
                                               <img src="images/garage_door_opener.png" alt="Garage Door Opener" class="img-responsive carouselimage">
                                               <div class="carouseloverlay">
                                                     <div class="carouseltext"><a href="smart-security-devices.php#garage-door">Garage Door Opener</a></div>
                                               </div>
                                    </div>
                              </div>
                        </div>

                        <!-- Controls -->
                        <div class="left carousel-control">
                          <a href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </div>
                        <div class="right carousel-control">
                          <a href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                  </div>

            </div>
      </div>
</div>
<script>
      $('#carousel').hover(function () { 
            $(this).carousel('pause') 
      }, function () { 
           $(this).carousel('cycle') 
      })
      $('.carousel[data-type="multi"] .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 2; i++) {
          next = next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }

          next.children(':first-child').clone().appendTo($(this));
        }
      });
</script>
<?php

include 'footer.php';

?>
