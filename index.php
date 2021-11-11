<?php
    require($_SERVER['DOCUMENT_ROOT'].'/sendgrid/sendgrid-php.php');
    
    if(isset($_POST['email'])){
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("bridalgenie@gmail.com", "The Bridal Genie Website");
        $email->setSubject("Bridal Genie - Wish Submitted!");
        $email->addTo("bridalgenie@gmail.com", "The Bridal Genie");
        $email->addContent("text/html", $_POST['body_html']);
        $sendgrid = new \SendGrid('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');
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }
    require('includes/header.php');
    
?>

<body class="pre-loader smoothy">

    <!-- START PRELOADER 
     <div class="ole">
    
        <section id="jSplash">
        
            <div id="circle"></div>
            
        </section>
        
    </div>
    <!-- END PRELOADER -->
   
    <div id="top-bar-holder">

        <div id="top-bar">

            <div class="container">

                <div class="row">

                    <ul class="bar-cols clearfix">

                        <li class="col-md-3 col-sm-6">

                            <div class="bar-block">
                                <h4>About The Board</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies ege. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>

                            </div>
                            <!-- End bar-block -->

                        </li>
                        <!-- End col-md-3 -->

                        <li class="col-md-3 col-sm-6">

                            <div class="bar-block clearfix">
                                <h4>Recent posts</h4>
                                <div class="recent-post first-post">
                                    <a href="#" class="thumb">
                                        <img src="img/top-bar/1.jpg" alt="Post" />
                                    </a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a>
                                        <span>| Oct / 20 / 2013</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="#" class="thumb">
                                        <img src="img/top-bar/2.jpg" alt="Post" />
                                    </a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a>
                                        <span>| Oct / 20 / 2013</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <a href="#" class="thumb">
                                        <img src="img/top-bar/3.jpg" alt="Post" />
                                    </a>
                                    <div class="post-head">
                                        <a href="#">Pellentesque habitant morbi senectus</a>
                                        <span>| Oct / 20 / 2013</span>
                                    </div>
                                </div>

                            </div>
                            <!-- End bar-block -->

                        </li>
                        <!-- End col-md-3 -->

                        <li class="col-md-3 col-sm-6">

                            <div class="bar-block">
                                <h4>Recent Tweets</h4>
                                <div class="twitter-wrap clearfix">

                                    <a class="twitter-timeline" data-height="300" data-theme="light" href="https://twitter.com/envato">Tweets by envato</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                </div>

                            </div>
                            <!-- End bar-block -->

                        </li>
                        <!-- End col-md-3 -->

                        <li class="col-md-3 col-sm-6">

                            <div class="bar-block clearfix">
                                <h4>Recent Photos</h4>
                                <div class="recent-work">
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="https://www.cinderelladivine.net/media//homeslide/mainslide/image/cd-banner-wh.jpg">
                                        <img src="img/top-bar/thumb/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="https://www.cinderelladivine.net/media//homeslide/mainslide/image/cd-bnr-black-3.jpg">
                                        <img src="img/top-bar/thumb/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="img/top-bar/large-img/3.jpg">
                                        <img src="img/top-bar/thumb/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="img/top-bar/large-img/4.jpg">
                                        <img src="img/top-bar/thumb/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="img/top-bar/large-img/5.jpg">
                                        <img src="img/top-bar/thumb/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                    <a class="fancybox" data-fancybox-group="gallery11" title="Recent Photos" href="img/top-bar/large-img/6.jpg">
                                        <img src="img/top-bar/thumb/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                    </a>
                                </div>

                            </div>
                            <!-- End bar-block -->

                        </li>
                        <!-- End col-md-3 -->

                    </ul>
                    <!-- End bar-cols -->

                </div>
                <!-- End Row -->

            </div>
            <!-- End container -->

        </div>
        <!-- End top-bar -->

        <a href="#" id="top-open" class=""></a>

    </div> <!-- End top-bar-holder -->
   
   <!-- START HOME -->
   <div class="page nopad" id="home">
    
        <header>   
           
             <div class="container">
               
                   <div class="row">
                                                  
                       <div class="col-md-12">
                           
                           <div src="/images/logo-cropped.png" style="
                                background: url('/images/logo-cropped.png');
                                background-size: 250px;
                                background-repeat: no-repeat;
                                width: 100%;
                                background-position-x: center;
                                height: 118px;"></div>
                           
                        </div> <!-- end col-md-12 -->
            
                  </div> <!-- end row -->
              
             </div> <!-- end container -->
       
       </header>  <!-- end header -->
     
       <div class="top-nav sticky--header" data-highlight="true">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 clearfix">

                        <div class="button-content center brand-content">
                                <div class="button-content__shape">menu
                                    <i class="fa fa-align-justify"></i>
                                </div>
                            </div>

                        <div class="menu-wrap">

                            <nav id="menu">

                                <ul id="navigation">

                                    <li>
                                        <a href="#home" class="active firstCh">
                                            <span>Home</span>
                                            <i class="fa fa-home fa-2x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#about" class="secondCh">
                                            <span>About</span>
                                            <i class="fa fa-group fa-2x"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#contact">
                                            <span>Book Me</span>
                                            <i class="fa fa-envelope fa-2x"></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#company" class="lastCh">
                                            <span>Company </span>
                                            <i class="fa fa-briefcase fa-2x"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://thebridalgenie.square.site/" target="_blank">
                                            <span>Shop</span>
                                            <i class="fa fa-shopping-cart fa-2x"></i>
                                        </a>
                                    </li>

                                </ul>

                            </nav>
                            <!-- end menu -->

                        </div>
                        <!-- end menu-wrap -->
                        
                        <div class="menu-mobile">

                                <nav class="menu-mobile__scroll">

                                    <ul id="navigation-mobile">

                                        <li>
                                        <a href="#home" class="active firstCh">
                                            <span>Home</span>
                                            <i class="fa fa-home fa-2x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#about" class="secondCh">
                                            <span>About</span>
                                            <i class="fa fa-group fa-2x"></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#contact">
                                            <span>Book Me</span>
                                            <i class="fa fa-envelope fa-2x"></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#company" class="lastCh">
                                            <span>Company Info</span>
                                            <i class="fa fa-landmark fa-2x"></i>
                                        </a>
                                    </li>

                                    </ul>

                                </nav>
                                <!-- end menu-left -->

                            </div>
                            <!-- end mobile menu -->

                    </div>
                    <!-- end col-md-12 -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- end top-nav -->
       
       <!-- START FULL WIDTH NIVO WRAP -->
       <div class="fullwidthNivoWrap">
       
           <div class="container">
             
                <div class="row">
             
                   <div class="span12">
    
                         <div class="theme-default">
                           
                           <div class="slide-wrap">
                           
                           <div id="nivo-slider" class="nivoSlider">
                           
                           <img src="/images/slider/fall-in-love.png" data-thumb="http://placehold.it/1000x400" alt="" />
                           <img src="/images/slider/love-more-worry-less.png" data-thumb="http://placehold.it/1000x400" alt="" />
                           <img src="/images/slider/never-stop-making-wishes.png" data-thumb="http://placehold.it/1000x400" alt="" />
                           
                           
                            <!--<img src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.15752-9/s2048x2048/67632664_676492636202524_6101610418222923776_n.jpg?_nc_cat=109&_nc_oc=AQlidPWxLxqMxw5Fm52Qt-RfKw5mWt56e0IJUz0BXf-r-mwOF2VrP3E02lMSLZDmkeE&_nc_ht=scontent-mia3-2.xx&oh=e9f4cf1095e96dc063c4ec4763427c6b&oe=5DCCCE6A" data-thumb="http://placehold.it/1000x400" alt="" title="Well Design Text Layout" />-->
                            <!--<img src="https://scontent-mia3-2.xx.fbcdn.net/v/t1.15752-9/s2048x2048/68617800_396903310814776_85320130925428736_n.jpg?_nc_cat=110&_nc_oc=AQk9kQescT_mNffjImkCTiKgeitTtL6-SoC3RGo5_SF_o7J4r6KXU7Tc6JuQ6sPvPkI&_nc_ht=scontent-mia3-2.xx&oh=89989eeba641c5ba8122cf074e465425&oe=5DE5D48B" data-thumb="http://placehold.it/1000x400" alt="" title="Beauiful Images Display" />-->
                           
                          </div> <!-- end nivoSlider -->
                          
                       </div>  <!-- end theme-default -->
                    
                    </div> <!-- end slide-wrap -->
                    
                 </div> <!-- end span12 -->
                 
              </div>  <!-- end row -->
                 
        </div>  <!-- end container -->
      
      </div>  <!-- end fullwidthNivoWrap -->
      
    </div> 
    <!-- END HOME --> 

     <!-- START ABOUT -->
    <div class="page" id="about">

        <div class="about-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="sectionTitle">

                            <h2>About Us</h2>

                        </div>
                        <!-- end sectionTitle -->

                    </div>
                    <!-- end col-md-12 -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

            <div class="container">
                
                <div class="row">

                    <div class="about-description">

                        <div class="col-md-6 text-lg-left text-center" data-sr="wait .4s enter top and move 50px over 1.33s">
                            <div class="row">
                                <div class="col-0 col-md-2">
                                    <i class="fa fa-magic"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 class="text-lg-left text-center">Our Mission</h4>
                                    <p>
                                        Our mission at The Bridal Genie is to deliver an exceptional client experience while granting wedding wishes from "yes" to "I do"- one wedding couple at a time.
                                        <br><br>
                                        
                                        That is why every bride and groom is treated to a private luxurious appointment setting that allows each client to relax and receive undivided attention so we can focus on what matters... <b style="font-size: inherit;">your wedding wishes</b>
                                    </p>
                              </div>
                           </div>
                        </div>
                        <!-- end div col-md-6 -->

                        <div class="col-md-6 text-lg-left text-center" data-sr="wait .8s enter top and move 50px over 1.33s">
                            <div class="row">
                                <div class="col-0 col-md-2">
                                    <i class="fa fa-fire"></i>
                                </div>
                                <div class="col-md-10">
                                    <h4 class="text-lg-left text-center">Our Philosophy</h4>
                                    <p>
                                        Brides come in all shapes, sizes, and personalities so why isn't there a bridal store that offers a truly unique selection?
                                        <br><br>
                                        At the Bridal Genie Boutique we pride ourselves in making the search for the perfect dress fun, exciting and simple!
                                    </p>
                              </div>
                           </div>
                        </div>
                        <!-- end div col-md-6 -->

                    </div>
                    <!-- end div about-description -->

                </div>
                <!-- end div row -->

                <div class="row">

                    <div class="col-md-12">
                        
                        <!-- START TEAM WRAP -->
                        <div class="team-wrap">
        
                            <div class="row">
        
                                <div class="col-md-6 mx-auto" data-sr="wait .5s enter left and move 50px over 1.33s">
         
                                    <div class="team-member col-8 mx-auto">
        
                                        <div class="team-data">
        
                                            <div class="member-info">
        
                                                <div class="member-about">
                                                    Granting wedding wishes from "Yes" to "I do"
                                                    <br><br>
                                                    ~Gigi<br><br>
                                                    Master Stylist 
                                                </div>
                                                <!-- end memberAbout -->
                                            </div>
                                            <!-- end member-info -->
                                            
                                            <img src="/img/team/thebridalgenie.jpg" alt="">
        
                                        </div>
                                        <!--end team-data --> 
                                            
                                        
        
                                        <span class="team-name">Gigi</span>
        
                                        <span class="team-title"></span>
        
                                    </div>
                                    <!-- end team-member -->
        
                                </div>
                                <!-- end col-md-4 -->
                                <div class="col-md-6 mr-auto text-lg-left text-center" data-sr="enter top and move 50px over 1.33s">
                                    <div class="row">
                                        <div class="col-0 col-md-2">
                                            <i class="fa fa-microphone"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <h4 class="text-lg-left text-center">Our Story</h4>
                                            <p>
                                             Although I worked from behind a desk in the financial world for many years, I've always had a passion for weddings and bridal fashion. I've been in quite a few weddings and assisted with so many that I was dubbed the Professional MOH! That lead to me working at one of the major bridal store chains for years and I absolutely loved it!
                                                <br><br>
                                                 I decided to open up my own bridal boutique where each bride and/or groom receives a personalized, private, luxury experience with financial guidance. What I love most is that moment when a bride knows that she's in HER dress; the moment she's found the one. That moment cannot be rushed or pressured, it must happen organically and should be in a dress that the bride can afford. 
                                               <br><br>  
                                             Suits and Tuxedo styles are available for rental or purchase. Suit Styling Appointments are availabe for booking and The Genious Cuople Package can be requested beginning Winter 2021.
                                            </p>
                                      </div>
                                   </div>
                                </div>
                                <!-- end div col-md-6 -->
        
                            </div>
                            <!-- end row -->
        
                        </div>
                        <!-- end team-wrap -->

                        <!-- START TAB WRAP -->
                        <div class="tabWrap" data-sr="enter bottom and move 200px over 1.33s">

                            <h4 class="text-center">Our Services</h4>

                            <ul class="tabs">
                                <li>
                                    <a href="#tab1">
                                        <i class="fa fa-lightbulb-o fa-2x"></i>
                                        Bridal Styling</a>
                                </li>
                                <li>
                                    <a href="#tab2">
                                        <i class="fa fa-clock-o fa-2x"></i>
                                        Bridal Concierge</a>
                                </li>
                                <li>
                                    <a href="#tab3">
                                        <i class="fa fa-cogs fa-2x"></i>
                                        Bridal Assistant</a>
                                </li>
                                <li>
                                    <a href="#tab4">
                                        <i class="fa fa-medkit fa-2x"></i>
                                        Other Services</a>
                                </li>
                                

                            </ul>
                            <!-- end tabs -->

                            <div class="tab_container">

                                <div id="tab1" class="tab_content">
                                    <h5>Bridal Styling</h5>
                                    <i class="fa fa-lightbulb-o fa-2x"></i>
                                    <p>
                                        Your wedding planning adventure starts here! Each couple's personal style, budget, and wedding vision are keys to designing a unique bridal shopping experience at Bridal Genie Boutique. Together we review your wishes and set the plan in motion by identifying your wedding dress style and theme. All other elements will begin to fall into place accordingly.
                                    </p>
                                        
                                    <p>
                                        During your appointment, you will learn the best body solution foundation and dress silhouette for your body type. You will then try a few of our enchanting samples.  The Bridal Genie is sure to share some "Big Day" hacks with you while styling you.  Several accessory, bouquet, and even shoe selections will be on hand to give you a true sample of the complete ensemble.
                                    </p>
                                </div>

                                <div id="tab2" class="tab_content">
                                    <h5>Bridal Concierge</h5>
                                    <i class="fa fa-clock-o fa-2x"></i>
                                    <p>
                                        No need to worry about where you can store your dress between purchase, alterations, and your big day. The Boutique to Bridal Suite Service ensures that your wedding dress is maintained in a secured, well ventilated area. Your dress will be delivered to your alterations and steaming appointment with one of our preferred seamstress/cleaners.
                                    </p>
                                    <p>
                                        On the day of (or evening prior to)your wedding, your bridal stylist will arrive with your dress steamed* and ready to style and fasten you to ensure your aisle debut or first look is flawless.
                                        Your bridal stylist can remain on hand post ceremony to position dress during your photo session and bustle for reception! This allows you and your bridal entourage to fully immerse yourselves in the true fun, love and experience of your big day without any awkward or frantic dress moments.
                                    </p>
                                    <p>
                                        The Bridal Concierge service ensures that I am with you every step of the way, from  vision to reality including research and selection expert wedding vendors, to off-site dress fittings, venue searches, bride tribe meetings, and so much more.
                                    </p>
                                    <p>
                                        Transport of Bridal Crew dresses is available. This is a separate service. This option reduces the worries of your guys/gals forgetting to pick up outfits, small details, accessories, or having items accidentally separated or wrinkled/damaged during travel.  Bridal Genie Boutique will ensure your entire bridal entourage receives their complete registered attire** prior to the ceremony and assist with any requests.
                                    </p>
                                </div>
                                <div id="tab3" class="tab_content">
                                    <h5>BRIDAL ASSISTANT</h5>
                                    <i class="fa fa-cogs fa-2x"></i>
                                    <p>
                                        Wedding Planners are a valuable part of your wedding experience and should be included in the wedding budget, if possible.
                                        Bridal Genie Boutique has access to preferred partners that offer such services.
                                    </p>
                                    <p>
                                        If you prefer to plan your big day without a wedding planner, please consider booking a wedding management session as soon as possible. During this session, I will provide valuable wedding management info. This information will save you a lot of time and money during your wedding planning. Our Styling and Concierge Services will be explained in depth and made available to you.
                                    </p>
                                    <p>
                                        Having a personal bridal assistant to help you complete specific wedding tasks and manage your wedding planning journey will allow you to stay organized, and maintain your lifestyle while planning your wedding.
                                    </p>
                                    <p>
                                        Book a consultation to discuss your customized Bridal Styling & Consultation package!
                                    </p>
                                </div>

                                <div id="tab4" class="tab_content">
                                    <h5>Other Services</h5>
                                    <i class="fa fa-medkit fa-2x"></i>
                                    <p>Bridal Gown Steaming<br>
                                    The Bridal Genie offers expert steaming services for your bridal attire.  This service is included with the purchase of your formal event attire.<br>
                                    Having a destination wedding here in Florida but purchased your dress elsewhere? Traveling with your gown can be a daunting task and can cause unsightly wrinkles. We will steam your dress for you! This service must be booked no later than 1 week prior to your event date. If this service is requested within 7 days of your event date, a rush fee will be assessed.
                                    </p>
                                    <p>Groom Styling <br>
                                    The Bridal Genie now offers suit and tux rental services! Now your groom and groomsmen can rent or purchase their formal attire and receive undivided attention and stellar customer service and guidance. Groomed By G is a Bridal Genie company and is located inside Bridal Genie Boutique. To use our Build-a-Tux tool or get more information, <a href="https://groomedbyg.com/" target="_blank">Visit Groomed By G</a>
                                    </p>
                                    <p>Wedding Budgeting & Guidance</p>
                                </div>

                            </div>
                            <!-- end tab_container -->

                        </div>
                        <!-- end tabWrap -->

                    </div>
                    <!-- end col-md-12 -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- end div about-wrap -->
        
    </div>
    <!-- END ABOUT -->
    
    
  
    <!-- START NEWS -->
    <div class="page" id="news">

        <!-- START NEWS WRAP -->
        <div class="news-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="subSectionTitle">

                            <h4 class="text-center">Our Collections</h4>

                        </div>
                        <!-- end subSectionTitle -->
                        
                        
                        <div class="row">
                                <div class="col-md-4" data-sr="wait .4s enter left and move 50px over 1.33s">

                                    <div class="team-member">
        
                                        <div class="team-data">
        
                                            <div class="member-info">

                                                <div class="member-about">
                                                    <p style="color:white;">Table of Contents</p>
                                                    <div class="text-center">
                                                        
                                                    </div>
                                                </div>
                                                <!-- end memberAbout -->
                                                
                  
                                                <a href="https://drive.google.com/file/d/16ChdBUXEJu4sAD29okQrYowoKQD63Xfr/view?usp=drivesdk" class="btn w-50 btn-theme m-4">
                                                    View
                                                </a>
                                                
                                                
                                            </div>
                                            <!-- end member-info -->
                                            
                                            <img src="/img/lookbooks/white_one_essentials_front_cover.jpg" alt="">
        
                                        </div>
                                        <!--end team-data --> 
                                        
                                        <span class="team-name">White One Essentials</span>
        
                                        <span class="team-title">2021</span>
                                    </div>
        
                                </div>
                                <div class="col-md-4" data-sr="wait .6s enter left and move 50px over 1.33s">

                                    <div class="team-member">
        
                                        <div class="team-data">
        
                                            <div class="member-info">

                                                <div class="member-about">
                                                    <p style="color:white;">Table of Contents</p>
                                                    <div class="row">
                                                        <div class="col-6">The Bohemian One</div><div class="col-6">pg 1-22</div>
                                                        <div class="col-6">The Sexy One</div><div class="col-6">pg 23-54</div>
                                                        <div class="col-6">The Minimalist One</div><div class="col-6">pg 55-66</div>
                                                        <div class="col-6">The Romantic One</div><div class="col-6">pg 67-112</div>
                                                        <div class="col-6">The Classic One</div><div class="col-6">pg 113-142</div>
                                                    </div>
                                                </div>
                                                <!-- end memberAbout -->
                                                
                  
                                                <a href="https://drive.google.com/file/d/1In5mPsrmHp-zjNSj7jUU168BVEPO8HyX/view?usp=drivesdk" class="btn w-50 btn-theme m-4">
                                                    View
                                                </a>
                                                
                                                
                                            </div>
                                            <!-- end member-info -->
                                            
                                            <img src="/img/lookbooks/white_one_front_cover.jpg" alt="">
        
                                        </div>
                                        <!--end team-data --> 
                                        
                                        <span class="team-name">White One</span>
        
                                        <span class="team-title">2021</span>
                                    </div>
        
                                </div>
                                <div class="col-md-4" data-sr="wait .8s enter left and move 50px over 1.33s">

                                    <div class="team-member">
        
                                        <div class="team-data">
        
                                            <div class="member-info">
        
                                                <div class="member-about">
                                                    <p style="color:white;">Table of Contents</p>
                                                    <div class="row">
                                                        <div class="col-6">Queenly Romanticism</div><div class="col-6">pg 1-2, 5-26</div>
                                                        <div class="col-6">Flowy Elegance</div><div class="col-6">pg 3-4, 27-44</div>
                                                        <div class="col-6">Essential Charm</div><div class="col-6">pg 45-46, 49-54</div>
                                                        <div class="col-6">Glam Waves</div><div class="col-6">pg 47-48, 67-78</div>
                                                        <div class="col-6">Dreamy Sensuality</div><div class="col-6">pg 65-66, 97-118</div>
                                                        <div class="col-6">Bohemian Poetry</div><div class="col-6">pg 79-96</div>
                                                    </div>
                                                </div>
                                                <!-- end memberAbout -->
                                                
                  
                                                <a href="https://drive.google.com/file/d/1_487hqebWAHK9i6breRzoNSp9OzPJ78d/view?usp=drivesdk" class="btn w-50 btn-theme m-4">
                                                    View
                                                </a>
                                                
                                                
                                            </div>
                                            <!-- end member-info -->
                                            
                                            <img src="/img/lookbooks/nicole_milano_front_cover.jpg" alt="">
        
                                        </div>
                                        <!--end team-data --> 
                                        
                                        <span class="team-name">Nicole Milano</span>
        
                                        <span class="team-title">2021</span>
                                    </div>
        
                                </div>
                        </div>

                        <!-- START CBP ROTATOR -->
                        <div id="cbp-qtrotator" class="cbp-qtrotator">

                            <div class="cbp-qtcontent">
                                <!-- <img src="http://lorempixel.com/100/100" alt="img01" /> -->
                                <blockquote>
                                    <p>Selecting a wedding dress is more than just a fitting... It's a process- a memory in the making.</p>
                                    <div>~ Olivelli Cape Town</div>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
                                <blockquote>
                                    <p>What is important in a dress is the woman who is wearing it</p>
                                    <div>~ Yves Saint Laurent</div>
                                </blockquote>
                            </div>
                            <div class="cbp-qtcontent">
         
                                <blockquote>
                                    <p>A wedding dress is both intimate and personal for a woman; it must reflect the personality and style of the bride</p>
                                    <div>~ Carolina Herrera</div>
                                </blockquote>
                            </div>
                        </div>
                        <!-- end cbp-qtrotator -->

                    </div>
                    <!-- end col-md-12 -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- end news-wrap -->

    </div>
    <!-- END NEWS -->

    <!-- START CONTACT -->
    <div class="page" id="contact">

        <!-- START CONTACT WRAP -->
        <div class="contact-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="sectionTitle">

                            <h2>Submit Your Wedding Attire Wish Below</h2>
                            <p>Select Styling Service to Book Appointment Now</p>

                        </div>
                        <!-- end sectionTitle -->

                    </div>
                    <!-- end col-md-12 -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

            <div class="container">
                
                <iframe src="https://app.acuityscheduling.com/schedule.php?owner=18579626" width="100%" height="800" frameBorder="0"></iframe>
                <script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
                
                <!--
                    <style>
                        :root {
                            --app-color: #ae880e;
                        }
                        .border-container {
                          background-color: #fff;
                          border-radius: 4px;
                          box-shadow: 0 2px 2px rgba(0,0,0,.02);
                          border: 1px solid #e1e8f0;
                        }
                    </style>
          
                    <div class="row">
                        <div class="contact-inner-wrap">
                            <div class="col-md-6 clearfix">
                                <h5 class="contact-title">Personal Information</h5>
                                <fieldset class="" style="border-color: var(--app-color);">
                                    
                    	            <div class="form-group">
                                        <label for="full_name">Full Name <span class="quform-required fa fa-star"></span>
                                                        </label>
                                        <input class="form-control" name="full_name" type="text" id="fullName" placeholder="Jane Doe" tabindex="1">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="telephone">Phone Number <span class="quform-required fa fa-star"></span>
                                                        </label>
                                        <input class="form-control" name="telephone" type="tel" id="telephone" placeholder="561-456-7890" tabindex="2">
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="email">Email <span class="quform-required fa fa-star"></span>
                                                        </label>
                                        <input class="form-control" name="email" type="email" id="email" placeholder="jane.doe@example.com" tabindex="3">
                                    </div>
                                    
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <h5 class="contact-title">Event Information</h5>  
                                <fieldset class="" style="border-color: var(--app-color);">
                                    
                                    <div class="form-group">
                                        <label for="event_type">Event Type</label>
                                        <select class="form-control" name="event_type" id="eventType" tabindex="4">
                                            <option selected="" disabled="">Please select an event type</option>
                                            <option>Baby Shower</option>
                                            <option>Bachelorette Party</option>
                                            <option>Bridal Shower</option>
                                            <option>Homecoming</option>
                                            <option>Prom</option>
                                            <option>Quinceañera</option>
                                            <option>Sweet 16</option>
                                            <option>Wedding</option>
                                            <option>Vow Renewal</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="event_date">Event Date</label>
                                        <select class="form-control" name="event_date" id="eventDate" tabindex="5">
                                            <option selected="" disabled="">Do you know your event date?</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group" id="eventDatePickerDiv" style="display:none;">
                                        <label for="event_date_picker">&nbsp;</label>
                                        <div id="eventDatePicker" class="border-container form-control date-picker-btn" style="height: 34px;padding-top: 6px;padding-bottom: 2px;">
                                            <span style="line-height: 1.5; font-weight: 400; width: 90%">Immediately</span>
                                            <i class="ml-2 far fa-calendar-alt pull-right" style="margin-top: 3px; color: #868e96"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="event_venue">Venue</label>
                                        <input type="text" class="form-control" name="event_venue" id="eventVenue" placeholder="123 Street Address, City, State Zip" tabindex="6">
                    
                                    </div>
                              
                                </fieldset>
                    	    </div>
                    	    <div class="col-md-12">
                    	        <div class="form-group">
                                    <label for="wishes">Select Your Wishes <span class="quform-required fa fa-star"></span></label>
                                                        
                                    <div class="p-0 border-container">
                    
                                        <div class="hidden-scrollbar text-center" style="height: 223px;border-radius: 5px;">
                                            <ul id="servicesContainer" class="mt-2 mb-2 nav nav-navbar"></ul>
                                        </div>
                    
                                    </div>
                                </div>
                    	    </div>
                    	    
                    	    <div class="col-md-6">
                    	        <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <label class="custom-control-label fs-10">I would like to continue to receive emails from Bridal Genie</label>
                                </div>
                    	    </div>
                    	    <div class="col-md-6">
                    	        <button class="btn-block btn btn-theme" id="sendMyWish" tabindex="7">SEND MY WISH </button>   
                    	        <span class="mt-3 mx-auto small text-center text-light">By completing this form you agree to our <a href="/tos" target="_blank">Terms and Conditions</a>.</span>
                    	    </div>
                    </div> -->
                    	     
                </div>
            </div>
        </div>
    </div>
    
    <!-- START COMPANY -->
    <div class="page" id="company">
        
        <!-- START COMPANY WRAP -->
        <div class="company-wrap">
            
            <div class="container"

                <div class="row mt-8">

                    <div class="contact-inner-wrap w-100">

                        <div class="col-md-6 clearfix">

                            <img class="pr-md-8" src="/images/google-maps.jpg">
  
                        </div>
                        <!-- end col-md-6 -->

                        <div class="col-md-6">

                            <h5 class="contact-title">Contact Details</h5>
                            
                            <div class="contact-details">
                                <h4>Phone</h4>
                                <p>Text or Call: <a href="tel:5612239050">561-223-9050</a></p>
                            </div>

                            <div class="contact-details">

                                <h4>Email</h4>
                                <p><a href="mailto:inquiry@thebridalgenie.com">inquiry@thebridalgenie.com</a></p>

                            </div>
                            
                            <div class="contact-details">

                                <h4>Our Address</h4>
                                <p>6383 10th Avenue North, Suite A</p>
                                <p>Greenacres, FL 33463</p>

                            </div>
                            
                        </div>
                        <!-- end col-md-6 -->

                    </div>
                    <!-- end contact-inner-wrap -->

                </div>
                <!-- end row -->

            </div>
            <!-- end container -->

        </div>
        <!-- end contact-wrap -->

    </div>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    
                    <ul class="social-media">

                        <li>
                            <a href="https://fb.me/TheBridalGenie">
                                <i class="fa fa-facebook fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/TheBridalGenie">
                                <i class="fa fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/TheBridalGenie">
                                <i class="fa fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/TheBridalGenie">
                                <i class="fa fa-pinterest fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.snapchat.com/add/bridalgenie">
                                <i class="fa fa-snapchat fa-2x"></i>
                            </a>
                        </li>

                    </ul>
                    <!-- end social-media -->

                    <div class="copyright">

                        <p>Copyright © 2021 Bridal Genie</p>
                        
                        <a href="/tos">Terms & Conditions</a>

                    </div>
                    <!-- end copyright -->

                </div>
                <!-- end col-md-12 -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </footer>
    <!-- END FOOTER -->


        
        <script src="js/jquery.v1.12.4.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.stellar.min.js?=1"></script>       
        <script src="js/jquery.nivo.slider.js"></script> 
        <script src="js/jquery.cubeportfolio.js"></script>
        <script src="js/cubeportfoiomain.js"></script>
        <script src="js/jquery.cbpFWSlider.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script> 
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/jquery.vaccordion.js"></script>
        <script src="js/jquery.cbpQTRotator.js"></script>

        <script src="js/owl.carousel.js"></script>
        <script src="js/preloader.js"></script>
 
        <script src="js/jquery.scrollUp.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/scrollReveal.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky.min.js"></script>

        <!-- CONTACT FORM -->
        <script src="js/custom.min.js"></script>
		
                		
</body>

</html>