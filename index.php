<!DOCTYPE html>
    
    
<html>
    <head>
        <meta charset= "UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <!--Link to new create css file-->
        <link href="css1/style.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/mynewstyling.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/iconKS.png"><!--Add icon to your webpage.-->
        <title> The Property For Sale</title>
    </head>
    <body style="background-color: #ffffff;">
        <!--New Design1-->
        <div class="page-header no-margin no-padding no-border" style="background-color: #0f0f0f"> <!--#1d063d-->
            <div class="container">
                <img src="images/OT.gif" height="110px;"/> <!--Header image-->
            </div>
            
        </div>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin:0px;"><!--navbar-fixed-top-->
           <div class="container">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-OnlineTrade-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand  text-color-white " style="color: white" href="index.php">Online Sales</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-OnlineTrade-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav navbar-center">
                        <?php ob_start(); ?><!--Enable redirect header when user enter correct password in checkuserlogin.php-->
                        <li style="color: white"><a href="index.php"><i class="glyphicon glyphicon-home"></i> HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-briefcase"></i> FOR SALE<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li style="border-bottom:0px solid gray;"><a href="index.php?page=products"><i class="glyphicon glyphicon-briefcase"></i> PRODUCTS</a></li>
                                <li style="border-bottom:0px solid gray;"><a href="#"><i class="glyphicon glyphicon-phone"></i> ACCESSORIES</a></li>
                                <li style="border-bottom:0px solid gray;"><a href="#"><i class="glyphicon glyphicon-book"></i> BOOKS</a></li>
                            </ul>
                        </li>
                       <!-- <li><a href="index.php?page=propertysearch"><i class="glyphicon glyphicon-briefcase"></i> PROPERTY</a></li>
                        <li><a href="index.php?page=accessories"><i class="glyphicon glyphicon-phone"></i> ACCESSORIES</a></li> -->
                        <li><a href="#"><i class="glyphicon glyphicon-info-sign"></i> ABOUT</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-phone-alt"></i> CONTACT</a></li>
                        <li ><a href="#"><i class="glyphicon glyphicon-lock"></i> ADMIN</a></li>
                        
                       <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-briefcase"></i> SALE<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=propertysearch">Properties</a></li>
                                <li><a href="index.php?page=accessories">Accessories</a></li>
                                <li><a href="#">Books</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <div>
                       
                    </div>
                    <!--Javascript for highting on current page-->
                    <script type="text/javascript" src="js/jquery.js"></script>
                    <script>
                        $(function(){// For hilight on current page.
                            $('a').each(function(){
                                if($(this).prop('href')==window.location.href){
                                     $(this).addClass('current');
                                } 
                            });
                        });
                    </script>
                    <!--End Javascript-->
                    
                </div>
            </div>
            </div>
        </nav>
         <?php
            if(!isset($_GET['page'])){
                ?>
                <div class="bodybanner"> <!--bodybanner-->
                    <div id="photos">
                        <img src="images/1.jpg" class="img-responsive"/>
                        <img src="images/2.jpg" class="img-responsive"/>
                        <img src="images/3.jpg" class="img-responsive"/>
                        <img src="images/4.jpg" class="img-responsive"/>
                        <img src="images/5.jpg" class="img-responsive"/>
                        <img src="images/6.jpg" class="img-responsive"/>
                        <img src="images/7.jpg" class="img-responsive"/>
                        <img src="images/8.jpg" class="img-responsive"/>
                    </div>
                    <script type="text/javascript" src="js/jquery.js"></script>
                    <script type="text/javascript" src="bannershow.js"></script>
                </div> <?php
            }
        ?>    
        
      <!-- <div class="container">--> <!--bodycontainer-->
            <?php
                if (!isset($_GET['page'])){
                    ?>
                        <div class="container bg-color" style="margin-top:500px;">
                            <?php include("home.php");?>
                        </div>
                        <!--<div class="col-xs-12 col-sm-12 col-md-12">
                            <img src="images/landscape-banner.jpg" width="100%" height="400" id="galaxyImg">
                        </div>-->
                    <?php
                    //include("home.php");
                }
            ?>
       <!--</div>-->
       <div class="searchpanel-property" style="margin-top:0"><!--searchpanel-property-->
            <?php
                if(isset($_GET['page'])){
                     $page= $_GET['page'];
                    include("$page.php");
                }
            ?>
        </div>
       
       <!--Start footer-->
       <div class="footertop"></div>
       <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/OT.gif" height="80px;"/>
                        <h4 style="color: white">Online Trading .,Ltd</4><p></p>
                        <p style="font-size:0.7em">Russey keo, Phnom Penh, Cambodia</p>
                        <p style="font-size:0.7em">Email: pnlovenz@gmail.com</p>
                        
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="col-md-5">
                        <p>© Copyright KhmerStar(Cambodia) 2016.</p>
                    </div>
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Phones</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </footer>
       <!--End footer-->
       <script scr="bootstrap/js/jquery1.12.1.js"></script>
       <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>