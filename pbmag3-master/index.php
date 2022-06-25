<?php

$name = $email = $topic = $comment = $title =  $synopsis = "";
$image = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $title = $_POST["title"];
  $comment = $_POST["comment"];
  $topic = $_POST["topic"];
  $synopsis = $_POST["synopsis"];
  $image = $_POST["image"];
}
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $title;
echo "<br>";
echo $comment;
echo "<br>";
echo $synopsis;
echo "<br>";
echo $topic;
echo "<br>";
echo $image;
echo "<br>";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
/*
$url = "index.php";
echo '
<div>
<a class="fragment" href=""> ' . $url . ' </a>
<div>';

*/

$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>The Sanskritian</title>


    <link rel="icon" href="img/core-img/favicon.ico">


    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        @media screen and(max-width: 900px){
            #top-dil{
                display: none !important;
            }
        }

::-webkit-scrollbar {
  width: 5px;
}


::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}
   li.active > a {
    position: relative;
    z-index: 1;
    color: white;
}
.header-area .newspaper-main-menu .classy-navbar .classynav > ul > li.active > a {
    position: relative;
    z-index: 1;
    color: white !important;
}
.header-area .newspaper-main-menu .classy-navbar .classynav > ul > li > a:hover, .header-area .newspaper-main-menu .classy-navbar .classynav > ul > li > a:focus {
    color: #fff;
}</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <!-- ##### Header Area Start ##### -->
      <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area" style="background-color: #0c0c38">
            <div class="container">
                <div class="row">
                    <div class="col-12" id="top-dil">
                        <div class="top-header-content d-flex align-items-center justify-content-between" style="background-color: #0c0c38">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <i class="fa fa-instagram" style="color: white;font-size:25px; margin-right: 17px"></i>
                                <i class="fa fa-github" style="color: white;font-size:25px; margin-right: 17px"></i>
                                <i class="fa fa-globe" style="color: white;font-size:25px; margin-right: 17px"></i>
                                <!-- Login -->
                                <div class="login d-flex">

                                </div>
                                <!-- Search Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off" style="background-color: #0c0c38">
                <div class="container">

                    <nav class="classy-navbar justify-content-between" id="newspaperNav">


                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>


                        <div class="classy-menu">


                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>


                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>

                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Pages</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li><li class="title">Main</li>
                                                <li><a href="articles/sanskriti.html">Sanskriti News</a></li>
                                    <li><a href="#">Science & Tech</a></li>

                                            </ul>
                                            <ul class="single-mega cn-col-4">

                                    <li class="title">Reviews</li>
                                     <li><a href="games.html">Gaming</a></li>
                                                    <li><a href="articles/books.html">Books</a></li>
                                                    <li><a href="articles/movies.html">Movies</a></li>
                                                    <li class="title">Games</li>
                                                    <li><a href="#">Air-Dodger</a></li>
                                                                                                        <li><a href="#">Drumkit</a></li>


                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Literary</li>
                                            <li><a href="articles/stories.html">Stories</a></li>
                                                    <li><a href="articles/poems.html">Poems</a></li>

                                                    <li><a href="articles/mis_articles.html">Miscellaneous</a></li>
                                                     <li class="title">Neutrino</li><li><a href="articles/Neutrino-2.html">Neutrino 0</a></li>
                                                    <a href="articles/Neutrino-1.html">Neutrino -1</a></li>

                                            </ul>

                                            <div class="single-mega cn-col-4">
                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Travel</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Politics</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="articles/sanskriti.html">Sanskriti News</a></li>
                                    <li><a href="articles/scitech.html">Science & Tech</a></li>
                                    <li><a href="#">Reviews</a>
                                        <ul class="dropdown">
                                                    <li><a href="articles/games.html">Gaming</a></li>
                                                    <li><a href="articles/books.html">Books</a></li>
                                                    <li><a href="articles/movies.html">Movies</a></li>
                                                </ul>
                                            </li>
                                   <li><a href="#">Literary</a>
                                        <ul class="dropdown">

                                                    <li><a href="articles/stories.html">Stories</a></li>
                                                    <li><a href="articles/poems.html">Poems</a></li>
                                                    <li><a href="articles/mis_articles.html">Miscellaneous Articles</a></li>
                                                </ul>
                                            </li><li>
                                    <a href="#">Neutrino</a>
                                        <ul class="dropdown">

                                                    <li><a href="articles/Neutrino0.html">Edition -2</a></li>
                                                    <li><a href="articles/Neutrino-1.html">Edition -1</a></li>
                                                    <li><a href="articles/Neutrino-2.html">Edition 0</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                    <a href="#">Play</a>
                                        <ul class="dropdown">

                                                    <li><a href="#">Air-Dodger</a></li>
                                                    <li><a href="#">Drumkit</a></li>

                                                </ul>
                                            </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                <li><a href="#">Welcome to Sanskriti Family.</a></li>
                                <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center mt-15">
                        <div class="news-title title2">
                            <p>International</p>
                        </div>
                        <div id="internationalTicker" class="ticker">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                <li><a href="#">Welcome to Sanskriti Family.</a></li>
                                <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hero Add -->
                <div class="col-12 col-lg-4">
                    <div class="hero-add">
                        <a href="#"><img src="img/bg-img/hero-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>'.$title.'</h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">'.$name.'</a></p>

';

                         $html3 = '<p>'.$comment.'</p>';

$html4 = '
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">finacial,</a></li>
                                                <li><a href="#">politics,</a></li>
                                                <li><a href="#">stock market</a></li>
                                            </ul>
                                        </div>

                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="blog-post-author d-flex" style="border-bottom: none">
                            <div class="author-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="author-info">';
                                   $htmlAuthor = '
                                <a href="#" class="author-name">"'.$name.'"<span>The Author</span></a>';
                                $html5 = '
                            </div>
                        </div>


                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>

                        <div class="row">
                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-title">
                                            <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Area Start -->



                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Health</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Travel</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politics</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Popular News Widget -->
                        <div class="popular-news-widget mb-50">
                            <h3>4 Most Popular News</h3>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>

                            <!-- Single Popular Blog -->
                            <div class="single-popular-post">
                                <a href="#">
                                    <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <p>April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->


                        <!-- Latest Comments Widget -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
      <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <!-- List -->
                            <ul class="list">


                                <li><a href="http://sanskritischool.edu.in">Sanskriti School</a></li>
                                 <li><a href="http://projectbeta.tech">www.projectbeta.tech</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Pages</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="physics.html">Physics</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Genres</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Play</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="airdodger.html">Air Dodger</a></li>
                                <li><a href="drums.html">Drums</a></li>
                                <li><a href="#">Game3</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Social Media</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="https://www.instagram.com/projectbeta.tech/">Instagram</a></li>
                                <li><a href="https://github.com/Project-Beta">Github</a></li>
                                <li><a href="http://sanskritischool.edu.in">Sanskriti School</a></li>
                                <li><a href="http://projectbeta.tech">ProjectBeta</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <center><div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    ><p style="color: white"> <\> ProjectBeta 2020</p>
                    <div class="col-12">

                    </div></center>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
';
$var = $html.$html3.$html4.$htmlAuthor.$html5;
$variableName = $topic.$name.$title.'.php';
$fp = fopen(''.$topic.$name.$title.'.php', 'a+');
$fwrite = fwrite($fp, "" .$var);


if($topic === 'ScienceTechnology'){
  $filename = "articles/scitech.html";
  $line_i_am_looking_for = 351;
  $lines = file($filename , FILE_IGNORE_NEW_LINES );
      $hash = "hash.html";
  $variable = '

<hr>



  <div class="single-blog-post featured-post mb-30">


  <div class="post-thumb">
      <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
  </div>

            <div class="post-data">
            <a href="'.$variableName.'" class="post-title">
                <h6>'.$title.'</h6>
            </a>
            <div class="post-meta">
            <p class="post-author">By <a href="#">'.$name.'</a></p>
            <p class="post-excerp">'.$synopsis.' </p>
                    <!-- Post Like & Post Comment -->
                    <div class="d-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>





        ';

  $lines[$line_i_am_looking_for] = $variable;
  file_put_contents( $filename , implode( "\n", $lines));
}



elseif($topic === 'Movies') {
  $filename = "articles/movies.html";
  $line_i_am_looking_for = 351;
  $lines = file($filename , FILE_IGNORE_NEW_LINES );
      $hash = "hash.html";
  $variable = '
  <hr>



    <div class="single-blog-post featured-post mb-30">


    <div class="post-thumb">
        <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
    </div>

              <div class="post-data">
              <a href="'.$variableName.'" class="post-title">
                  <h6>'.$title.'</h6>
              </a>
              <div class="post-meta">
              <p class="post-author">By <a href="#">'.$name.'</a></p>
              <p class="post-excerp">'.$synopsis.' </p>
                      <!-- Post Like & Post Comment -->
                      <div class="d-flex align-items-center">

                      </div>
                  </div>
              </div>
          </div>



';

  $lines[$line_i_am_looking_for] = $variable;
  file_put_contents( $filename , implode( "\n", $lines));
}
elseif ($topic === 'Books'){
$filename = "articles/books.html";
$line_i_am_looking_for = 351;
$lines = file($filename , FILE_IGNORE_NEW_LINES );
    $hash = "hash.html";
$variable = '
<hr>



  <div class="single-blog-post featured-post mb-30">


  <div class="post-thumb">
      <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
  </div>

            <div class="post-data">
            <a href="'.$variableName.'" class="post-title">
                <h6>'.$title.'</h6>
            </a>
            <div class="post-meta">
            <p class="post-author">By <a href="#">'.$name.'</a></p>
            <p class="post-excerp">'.$synopsis.' </p>
                    <!-- Post Like & Post Comment -->
                    <div class="d-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>



';

$lines[$line_i_am_looking_for] = $variable;
file_put_contents( $filename , implode( "\n", $lines));

}
elseif ($topic === 'Gaming') {


  $filename = "articles/gaming.html";
  $line_i_am_looking_for = 351;
  $lines = file($filename , FILE_IGNORE_NEW_LINES );
      $hash = "hash.html";
  $variable = '
  <hr>



    <div class="single-blog-post featured-post mb-30">


    <div class="post-thumb">
        <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
    </div>

              <div class="post-data">
              <a href="'.$variableName.'" class="post-title">
                  <h6>'.$title.'</h6>
              </a>
              <div class="post-meta">
              <p class="post-author">By <a href="#">'.$name.'</a></p>
              <p class="post-excerp">'.$synopsis.' </p>
                      <!-- Post Like & Post Comment -->
                      <div class="d-flex align-items-center">

                      </div>
                  </div>
              </div>
          </div>



';

  $lines[$line_i_am_looking_for] = $variable;
  file_put_contents( $filename , implode( "\n", $lines));
}
elseif ($topic === 'Stories') {
  $filename = "articles/stories.html";
  $line_i_am_looking_for = 351;
  $lines = file($filename , FILE_IGNORE_NEW_LINES );
      $hash = "hash.html";
  $variable = '
  <hr>



    <div class="single-blog-post featured-post mb-30">


    <div class="post-thumb">
        <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
    </div>

              <div class="post-data">
              <a href="'.$variableName.'" class="post-title">
                  <h6>'.$title.'</h6>
              </a>
              <div class="post-meta">
              <p class="post-author">By <a href="#">'.$name.'</a></p>
              <p class="post-excerp">'.$synopsis.' </p>
                      <!-- Post Like & Post Comment -->
                      <div class="d-flex align-items-center">

                      </div>
                  </div>
              </div>
          </div>



';

  $lines[$line_i_am_looking_for] = $variable;
  file_put_contents( $filename , implode( "\n", $lines));
}
elseif ($topic === 'Poems') {
  $filename = "articles/poems.html";
  $line_i_am_looking_for = 351;
  $lines = file($filename , FILE_IGNORE_NEW_LINES );
      $hash = "hash.html";
  $variable = '
  <hr>



    <div class="single-blog-post featured-post mb-30">


    <div class="post-thumb">
        <a href="#"><img src="../img/bg-img/28.jpg" alt=""></a>
    </div>

              <div class="post-data">
              <a href="'.$variableName.'" class="post-title">
                  <h6>'.$title.'</h6>
              </a>
              <div class="post-meta">
              <p class="post-author">By <a href="#">'.$name.'</a></p>
              <p class="post-excerp">'.$synopsis.' </p>
                      <!-- Post Like & Post Comment -->
                      <div class="d-flex align-items-center">

                      </div>
                  </div>
              </div>
          </div>




        ';

  $lines[$line_i_am_looking_for] = $variable;
  file_put_contents( $filename , implode( "\n", $lines));
}


echo '<p> The article is published at /'.$variableName.' </p>';
?>
