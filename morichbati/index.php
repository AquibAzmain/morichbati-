
<!DOCTYPE html>
<html>

<head>
    <title>Morichbati : A Wedding Planner</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="Mimages/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/styleSideNav.css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
   
</head>

<body>
    <!-- banner -->
    <div class="banner">
        <div class="header">
            <div class="container">
                <div class="header-left">
                    <div class="w3layouts-logo">
                        <h1>
							<a href="index.php"><img src="Mimages/morichbati2.png" height="50px" width="130px"/></a>
						</h1>
                    </div>
                </div>
                <div class="top-nav">
                    <nav class="navbar navbar-default">
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a class="active" href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="bookOnline.php">Book Online</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="signin.php">Sign in</a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3layouts-banner-slider">
            <div class="container">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>We make your dream true <span>A wedding planner</span></h3>
                                    <div class="w3-button">
                                        <a href="about.php">More</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="agileits-banner-info">
                                    <h3>Create your special day <span>A wedding planner</span></h3>
                                    <div class="w3-button">
                                        <a href="about.php">More</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
                    // You can also use "$(window).load(function() {"
                    $(function() {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function() {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function() {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });

                    });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="w3l-banner-bottom-grids">
                <div class="col-md-10">
                    <div class="bottom-text">
                        <h4 align="center">A perfect match whether it's witty or warm, let the Wedding Invitations sing <br/>that nails the personality and wedding style.</h4>
                        <p align="center">-Morichbati</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-grids">
                <div class="col-md-6 w3ls-welcome-left">
                    <div class="w3ls-welcome-left-img">
                    </div>
                </div>
                <div class="col-md-6 w3ls-welcome-right">
                    <div class="w3ls-welcome-right-info">
                        <h2>Some Words <span>About Us</span></h2>
                        <p>Morichbati is a renowned wedding planner in Bangladesh run by a group of skilled and dedicated personnel who has the experience of organizing a numerous illustrious weddings and events. This organization carries a vivid fame and glory by an incompatible performance in Wedding planning and Event management services since the establishment.</p>
                    </div>
                    <div class="agileits-border">
                        <div class="agileinfo-red"> </div>
                        <div class="agileinfo-red agileinfo-green"> </div>
                        <div class="agileinfo-red agileinfo-blue"> </div>
                        <div class="agileinfo-red agileinfo-yellow"> </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="w3-agileits-heading">
                <h3>Best <span>Services</span></h3>
            </div>
            <div class="wthree-services-grids">
                <div class="col-md-4 w3-agileits-services-grid">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Wedding Venues</h4>
                    <p>The wedding planner offers you some of the most prestigious and grand venues in Bangladesh. At these venues, you will be able to hold a memorable event in comfort and style with the benefit of excellent modern facilities.</p>
                </div>
                <div class="col-md-4 w3-agileits-services-grid agile-services1">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Wedding photography</h4>
                    <p>We can help you frame these personal moments and to carry these memories forward by providing professional photographers and videographers who are equipped with the latest hi tech studio apparatus. </p>
                </div>
                <div class="col-md-4 w3-agileits-services-grid">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Wedding Themes</h4>
                    <p>A colorful wedding theme always makes the joyous wedding program more illustrious. Our skilled and dedicated Design Team is always enthusiastic to compose your chosen wedding theme superseding your anticipation.</p>
                </div>
                <div class="col-md-4 w3-agileits-services-grid">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Catering Service</h4>
                    <p>Cuisine is the one of the most elementary ingredients that makes any occasion more vibrant.  A good choice of cuisine is something to add an extra bit of happiness to the ceremony.</p>
                </div>
                <div class="col-md-4 w3-agileits-services-grid agile-services2">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Wedding Decoration</h4>
                    <p>Our professional visual design team is dedicated to make your wedding programme more special and remarkable by embellishing the venue with fresh local and imported flowers.</p>
                </div>
                <div class="col-md-4 w3-agileits-services-grid">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <h4>Wedding Shopping Guide</h4>
                    <p>We can provide you professional guide for wedding shopping.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!-- posts -->
    <div class="posts">
        <div class="container">
            <div class="w3-agileits-heading">
                <h3>Happy <span>Moments</span></h3>
            </div>
            <div class="posts-grids">
                <div class="col-md-4 w3-agile-post-grids">
                    <div class="w3-agile-post-img">
                        <a href="">
                            <ul>
                                <li>Sept</li>
                                <li>24</li>
                            </ul>
                        </a>
                    </div>
                    <div class="w3-agile-post-info">
                        <h4>SAIFUL WEDS SHUPRIYA</h4>
                        <p>Thanks to Morichbati to make our wedding so perfect!</p>
                    </div>
                </div>
                <div class="col-md-4 w3-agile-post-grids">
                    <div class="w3-agile-post-img w3-agile-post-img1">
                        <a href="">
                            <ul>
                                <li>Oct</li>
                                <li>06</li>
                            </ul>
                        </a>
                    </div>
                    <div class="w3-agile-post-info">
                        <h4>হলুদ রাঙা সন্ধ্যা</h4>
                        <p>সাধ্যের মাঝে কোন কমতি না রেখে অনুষ্ঠানটি আয়োজন করতে সাহায্য করায় মরিচবাতিকে কৃতজ্ঞতা জানাচ্ছি। </p>
                    </div>
                </div>
                <div class="col-md-4 w3-agile-post-grids">
                    <div class="w3-agile-post-img w3-agile-post-img2">
                        <a>
                            <ul>
                                <li>Nov</li>
                                <li>17</li>
                            </ul>
                        </a>
                    </div>
                    <div class="w3-agile-post-info">
                        <h4>আমাদের মধুচন্দ্রিমা</h4>
                        <p>Morichbati is a love!!</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //posts -->
    <!-- footer -->
    <footer>
        <div class="agileits-w3layouts-footer-top">
         
        </div>
        <div class="agileits-footer-bottom">
            <div class="container">
                <div class="agileits-footer-bottom-grids">
                    <div class="col-md-6 footer-bottom-left">
                        <h5>About Us</h5>
                        <div class="footer-img-grids">
                            <div class="footer-img">
                                <img src="Mimages/5.jpg" alt="" />
                            </div>
                            <div class="footer-img-info">
                                <p>Clients are always our highest priority. Through their humble satisfaction we have earned such renowned position in this profession. It's always our pleasure and honor to make them satisfy. We express our highest gratitude to all our valued clients who made us possible to become pioneer in this industry.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 footer-bottom-right">
                        <h5>Newsletter</h5>
                        <form action="#" method="post">
                            <input type="text" placeholder="Subscribe" name="Subscribe" required="">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-3 footer-bottom-right">
                        <h5> Contact</h5>
                        <p> <i class="fa fa-map-marker"></i> Dhanmondi &amp; 27/A, Dhaka, 1212</p>
                        <p><i class="fa fa-phone"></i> +00 (123) 456 7890</p>
                        <p><i class="fa fa-envelope-o"></i> morichbati@gmail.com</p> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright Â© 2017 - All Rights Reserved - Morichbati</p>
            </div>
        </div>
    </footer>
    <!-- //footer -->
<script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->

    
</body>

</html>