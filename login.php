<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="icon" href="images/dove.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    
</head>


<body class="single-page single-cause" >
    <header class="site-header">
      
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/teamwork.png" style="width: 70%;"  alt="logo"></a>
                            <span style="color: rgba(255,90,0,1)"> Մեկ Բռունցք </span>
                         </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Գլխավոր</a></li>
                                <li><a href="about.php">Մեր մասին</a></li>
                                <li><a href="portfolio.php">Նկարներ</a></li>
                                <li><a href="contact.php">Հետադարձ կապ</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Մուտք Գործել</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <style>
       
    </style>

    <div class="container">
        <div class="row" style="padding-top: 2%">
            <div class="col-12">
            <?php if(isset($_SESSION["name"] )){ ?>
                    <div class="alert alert-success"  role="alert">
                        Շնորհակալություն <?php echo $_SESSION['name'] ?> մուտք գործելու համար
                    </div>
                <?php } ?>
                <div class="donation-form-wrap im">
                    <form class="donation-form" action="auth.php" method="POST">
                        <div class="billing-information  d-flex flex-wrap justify-content-between align-items-center">
                            <input type="email" name="email" placeholder="Էլ Փոստ" required />
                            <input type="password" name="password" placeholder="Գաղտնաբառ" required />
                        </div>
                        <input class="btn gradient-bg mt-5" name="login" type="submit" value="Մուտք">
                        <a href="single-causes.php" class="btn orange-border" style="margin-top:5%">Գրանցվել</a>
                     
                    </form>
              
                </div>
            </div>
        
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3"  style="margin: 3% ">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/teamwork.png" alt=""></a></h2>
                            <p>Կայքի նպատակն է հավաքագրել ողջ աշխարհի հայությանը մեկ հարթակում </p>
                       
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0" style="padding-top: 3% ">
                        <div class="foot-contact">
                            <h2>Կոնտակտ</h2>
 
                            <ul>
                                <li><i class="fa fa-phone"></i><span>+(374)98-15-14-44)</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@usaarmenia.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Պուշկինի 21</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Էլ Փոստ">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->


    </footer>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>


    <script>
   
        jQuery('#facebook').click(function(){
           jQuery('.im').hide();
           jQuery('.close_fb').show();
        });
    </script>

</body>
</html>