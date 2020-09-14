<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="themes/Minimalista/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="themes/Minimalista/images/apple-touch-icon.png">

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>  
    
    <!--[if lt IE 9]><?php
        // HTML5 shim, for IE6-8 support of HTML5 elements
        gpOutput::GetComponents( 'html5shiv' );
        gpOutput::GetComponents( 'respondjs' );
    ?><![endif]-->

    <?php gpOutput::GetHead(); ?>
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="img/logo-dark.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="img/logo-dark.png" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <!--<ul class="right chevron">
                <li><a href="index.html">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>             
                <li><a href="contact.html">Contact</a></li>
              </ul>-->
              <?php
                        $GP_ARRANGE = false;
                        $GP_MENU_CLASSES = array(
                                        'menu_top'                      => 'navbar-nav ml-auto',
                                        'selected'                      => '',
                                        'selected_li'           => 'active',
                                        'childselected'         => '',
                                        'childselected_li'      => 'dropdown-item',
                                        'li_'                           => 'nav-item',
                                        'li_title'                      => '',
                                        'haschildren'           => 'dropdown-toggle',
                                        'haschildren_li'        => 'dropdown',
                                        'child_ul'                      => 'dropdown-menu',
                                        );

                        gpOutput::Get('Menu'); //top two levels
                        ?>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <div id="content">
          <?php $page->GetContent(); ?>
        </div>
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Kunstgalerie Wawatay</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
            </div>  
          </header>
          <div class="background-white full-width"> 
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Dakotaman</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Dakotaman 2.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Mexico</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Mexiko.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Animal Spirit</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>                  
                  </div> 
                </div> 
                <img class="full-img" src="img/animal1.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Mexico - Appenzell Connection</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Mexico - Appenzell Connection.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Universal Light</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Universal light.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Plumas Mexicanas</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Plumas mecicanas.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Animal Spirit</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/animal4.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Wataway</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Wawatay.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Selbstportrait</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Selbstportai-1.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Animal Spirit</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/animal3.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Animal Spirit</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/animal2.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Inspiracion Mexicano</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Inspiracion Mexicano.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Basel im All</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Basel im All.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Milpa Alta</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/Milpa Alta.png" alt=""/>
              </a>	
            </div>
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                    <h3 class="text-white text-size-20 margin-bottom-10">Animal Spirit</h3>
                    <p class="text-white text-size-14 margin-bottom-20">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>  
                  </div> 
                </div> 
                <img class="full-img" src="img/animal7.png" alt=""/>
              </a>	
            </div>
          </div>  
        </article>
      </main>
      
      <!-- FOOTER -->
      <footer>
        <!-- Contact Us -->
        <div class="background-dark padding text-center footer-social">
          <a class="margin-right-10" target="_blank" href="https://www.facebook.com/edith.zivi.12"><i class="icon-facebook_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
          <a class="margin-right-10" target="_blank" href="https://www.instagram.com/edithbinah"><i class="icon-instagram_circle text-size-30"></i> <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
        </div>

        <!-- Main Footer -->
        <section class="section-small-padding text-center background-dark full-width">
          <div class="line">
            <div class="margin">
              <!-- Collumn 1 -->              
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <?php gpOutput::GetExtra('address'); ?>
              </div>
              <!-- Collumn 2 -->
              <div class="s-12 m-12 l-4 margin-m-bottom-30">
                <?php gpOutput::GetExtra('email'); ?>
              </div>
              <!-- Collumn 3 -->
              <div class="s-12 m-12 l-4 ">
                <?php gpOutput::GetExtra('phone'); ?>
              </div>
            </div>
          </div>  
        </section>
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding background-dark full-width">
          <div class="text-center">
            <p class="text-size-12">Created by <a href="http://estrellasdeesperanza.org">Estrellas de Esperanza</a>
            <br/><?php gpOutput::GetAdminLink(); ?>
          </p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>