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
<style>
        .fb{
            background-color: #4c66a4;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            border: 0;
        }
        .fb_icon{
            background-color: #4c66a4;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            font-weight: 700

        }
            .fb_but {
           
            margin-top: 2%;
            color: #fff;
            background-color: #4c66a4;
            border: 0;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
        }
        </style>

<body class="single-page single-cause" onload="jan()">
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
                    <h1>Գրանցվել</h1>
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
                        Շնորհակալություն <?php echo $_SESSION['name'] ?> մեզ միանալու համար
                    </div>
                <?php } ?>
                <div class="donation-form-wrap im">
                    <div class="col-12">
                        <div class="row">
                                 <button type="button" id="facebook" class="btn mt-5 fb "> Facebook </button> 
                                <span style="margin-top: 7%; margin-left: 5%;">Մուտք գործել Facebook-ի միջոցով </span>
                        </div>
                    </div>
                
                    <form class="donation-form" action="auth.php" method="POST">
                        <div class="billing-information  d-flex flex-wrap justify-content-between align-items-center">

                            <input type="text" name="name" placeholder="Անուն" required />
                            <input type="email" name="email" placeholder="Էլ Փոստ" required />
                            <input type="text" name="tel" placeholder="Հեռ․" required />
                            <input type="text" name="city" placeholder="Հասցե" required />
                            <input type="password" name="password" placeholder="Գաղտնաբառ" required />
                            <input type="password" placeholder="Կրկնել գաղտնաբառը" required />
                        </div>
                        <input class="btn gradient-bg mt-5" name="send" type="submit" value="Գրանցվել">
                    </form>
              
                </div>
            </div>
            <div class="col-12">
                   
            <div class="donation-form-wrap close_fb" style="padding: 0 0 100px 0">
                <div class="fb_icon" style="height: 42px;">
                    <img src="images/if_yumminky-social-media-21_2082448.png" width="40px">
                    <span style="position: absolute; margin-top: 7px;">  Facebook   </span>
                </div><br>
                <div>
                    <p style="font-size: 14px;text-align: center">Войдите в Facebook, чтобы использовать свой аккаунт в приложении </p><br>
                    <div class="col-12">
                    <form class="donation-form" action="auth.php" method="POST" >
                            <div  style="margin-left: 18%; font-size: 14px;">
                                <label for="email" style="margin-right: 3%" >Эл. адрес или телефон: </label>
                                <input type="email" name="email" style="border: 0 solid #fff"  required /> <br/>
                                <label for="password" style="margin-right: 138px" >Пароль:</label>
                                <input type="password" name="password" style="border: 0 solid #fff" required /> <br />
                                </div>
                                <div class="col-11" style="text-align: center">
                                    <input  name="facebook" class="fb_but" type="submit" value="Вход">
                                </div><br> 


                            <!-- <p style="margin-left: 18%; font-size: 14px; margin-left: 23%;"></p> -->
                       
                        </form>
                        <div class="col-11   fb_mini" style="text-align: center; padding-right:0!important ">
                                <a href="#" style="color: #365899;   font-size: 14px">Забыли аккаунт?</a> <br />
                                <a href="#" ><button type="button" style=" background-color: #42b72a; color: #fff; border:0; font-size: 14px; font-weight: 500">Создать новый аккаунт</button></a>
                            
                            </div>
                        
                        
                    </div>
                </div>
                <style>
              
                  
                </style>
               
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
        function jan() {
            jQuery('.close_fb').hide();
        }
        jQuery('#facebook').click(function(){
           jQuery('.im').hide();
           jQuery('.close_fb').show();
        });
    </script>

</body>
</html>