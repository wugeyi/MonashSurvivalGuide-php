<?php
date_default_timezone_set("UTC");
require "autoload.php";

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

$app_id = "UfhHlFN8D7VKIqtmEEKZmwjrOjesnL3ng4seZmzA";
$rest_key = "arZRU6XnGAtrecMQriDvpt27UDrzkcpsFDfIdFno";
$master_key = "HDbRL4H8YjOCg0D2tNHBbmiIvP8viGWf3onHTx0u";

session_start();

ParseClient::initialize($app_id, $rest_key, $master_key);

if (isset($_POST["logout"])) {
    ParseUser::logOut();
    $currentUser = ParseUser::getCurrentUser();
    echo "<script language=JavaScript> location.replace(index.php);</script>";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Monash Survival Guide</title>
        <meta charset=utf-8 >

        <meta name="robots" content="index, follow" > 
        <meta name="keywords" content="" > 
        <meta name="description" content="" > 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="favicon.ico">

        <!-- CSS begin -->


        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <link rel="stylesheet" type="text/css" href="css/skeleton.css" >

        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
        <link rel="stylesheet" href="css/switcher/style.css">
        <link rel="stylesheet" href="css/layout/wide.css" id="layout">
        <link rel="stylesheet" href="css/colors/yellow.css" id="colors">

        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/style-ie.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ei8fix.css" ><![endif]-->

        <!-- flexslider slider CSS -->

        <link rel="stylesheet" type="text/css" href="css/flexslider.css"  >

        <!--end flexslider slider CSS -->
        <!-- CSS end -->

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body>


        <div id="wrap" class="boxed">
            <div class="grey-bg"> <!-- Grey bg  -->	
                <!--[if lte IE 7]>
                <div id="ie-container">
                        <div id="ie-cont-close">
                                <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
                        </div>
                        <div id="ie-cont-content" >
                                <div id="ie-cont-warning">
                                        <img src='images/ie-warning.jpg' alt='Warning!'>
                                </div>
                                <div id="ie-cont-text" >
                                        <div id="ie-text-bold">
                                                You are using an outdated browser
                                        </div>
                                        <div id="ie-text">
                                                For a better experience using this site, please upgrade to a modern web browser.
                                        </div>
                                </div>
                                <div id="ie-cont-brows" >
                                        <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                                        <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warning-opera.jpg' alt='Download Opera'></a>
                                        <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warning-safari.jpg' alt='Download Safari'></a>
                                        <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                                </div>
                        </div>
                </div>
                <![endif]-->

                <!-- HEADER -->
                <!--                <div class="sixteen columns">
                                    <form>
                                        <input type="submit" value="Sign in" class="signin" name="submit">
                                    </form>
                                </div>-->


                <header id="header" >
                    <div class="container clearfix">
                        <div class="sixteen columns">
                            <div class="signInClass" style="text-align: right">
                                <?php
                                $currentUser = ParseUser::getCurrentUser();
                                if ($currentUser) {
                                    // do stuff with the user
                                    $userName = $currentUser->get("username");
                                    echo "<form method=\"post\">";
                                    echo "Hello, ";
                                    echo "<label>";
                                    echo $userName;
                                    echo "</label>";
                                    echo "|";
                                    echo "<input type=\"submit\" value=\"Log out\" class=\"signin\" name=\"logout\">";
                                    echo "</form>";
                                } else {
                                    // show the signup or login page
                                    echo "<form action=\"login.php\">";
                                    echo "<input type=\"submit\" value=\"Sign in\" class=\"signin\" name=\"submit\">";
                                    echo "</form>";
                                }
                                ?>
                            </div>
                            <div class="clear"></div>

                            <div class="header-container m-top-30 clearfix">
                                <div class="header-logo-container ">
                                    <div class="logo-container">	
                                        <a href="index.html" class="logo" rel="home" title="Home">
                                            <img src="images/logo-retina.png" alt="solana" >
                                        </a>
                                    </div>
                                </div>

                                <div class="header-menu-container right">
                                    <!-- TOP MENU -->
                                    <nav id="main-nav">
                                        <ul class="sf-menu clearfix">
                                            <li ><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>
                                                    <li><a href="index4.html">Home 4</a></li>
                                                    <li><a href="index5.html">Home 5</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="elements.html">Features</a>
                                                <ul>
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="icons.html">Icons</a></li>
                                                    <li><a href="pricing-tables.html">Pricing tables</a></li>
                                                    <li ><a href="404.html">404 Error</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="portfolio.html">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio.html">2 column</a></li>
                                                    <li><a href="portfolio3.html">3 column</a></li>
                                                    <li><a href="portfolio4.html">4 column</a></li>
                                                    <li><a href="portfolio-single.html">Portfolio single</a></li>
                                                    <li><a href="#">3D level menu</a>
                                                        <ul>
                                                            <li><a href="#">Menu item</a></li>
                                                            <li><a href="#">Menu item</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="current" ><a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog-single.html">Blog-single</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="contact.html">Contact</a></li>
                                            <li><a>                                       </a></li>
                                        </ul>
                                    </nav>

                                    <div class="search-container ">
                                        <form action="#" class="search-form">
                                            <input type="text" name="search-form-txt" class="search-text" >
                                            <input type="submit" value="" class="search-submit" name="submit">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </header>

                <!-- PAGE TITLE -->
                <div class="container m-bot-35 clearfix">
                    <div class="sixteen columns">
                        <div class="page-title-container clearfix">
                            <h1 class="page-title">BLOG</h1>
                        </div>	
                    </div>
                </div>	

            </div>	<!-- Grey bg end -->	

            <!-- CONTENT -->
            <?php
            $query = new ParseQuery("Post");
            $result = $query->first();
            
            $title = $result->get("title");
            $content = $result->get("content");
            $author = $result->get("author");
            $author->fetch();
            $unit = $result->get("unit");
            $unit->fetch();
            
            $name = $author->get("name");
            $code = $unit->get("code");
            
            //array:
            $imageArray = $result->get("mediaFiles");
            //$image1 = $imageArray[0];
            //$url = $image1->getURL();
            
            $imageCount = count($imageArray);
            
            for($x=0; $x < $imageCount; $x++)
            {
                $imageTag = "<#I#M#A#G#E#>" . $x . "</#I#M#A#G#E#><#T#E#X#T#></#T#E#X#T#>";
                $imageUrl = $imageArray[$x]->getURL();
                $imageUrlTag = "<br/><img src='" . $imageUrl . "'/><br/>";
                $content = str_replace($imageTag, $imageUrlTag, $content);
                //echo $content;
            }
//            $x =0;
//            $imageTag = "<#I#M#A#G#E#>" . $x . "</#I#M#A#G#E#>";
//                $imageUrl = $imageArray[$x]->getURL();
//                $imageUrlTag = "<img src='" . $imageUrl . "'/>";
//                $content = str_replace($imageTag, $imageUrlTag, $content);
                
                
            $postID = $result->getObjectId();
//            echo $url;
            
            ?>
            <div class="container clearfix">
                <div class="eleven columns m-bot-25">
                    <!-- BLOG ITEM -->
                    <div class="blog-item m-bot-35 clearfix">
                        <div class="hover-item">
                            <div class="clearfix">
                                <div class="blog-item-date-inf-container left">
                                    <div class="blog-item-date-cont">
                                        <div class="blog-item-date">21</div>
                                        <div class="blog-item-mounth">OCT</div>
                                    </div>

                                </div>

                                <div class="blog-item-caption-container">
                                    <a class="a-invert" href="blog-single.html" ><span class="bold"><?php echo $title; ?></span></a>
                                    <div class="lp-item-container-border clearfix">
                                        <div class="blog-info-container">
                                            <ul class="clearfix">
                                                <li class="author"><?php echo $name; ?></li>
                                                <li class="view">16 测试测试</li>
                                                <li class="comment">25 测试测试</li>
                                                <li class="tag"><?php echo $code; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-item-text-container">
                                    <p><?php echo $content; 
                                    //echo "<img src =\"";
                                    //echo $url;
                                    //echo "\"></img>";
                                    ?></p>
                                    

                                </div>
                                <div class="lp-r-m-container right">
                                    <form method="POST" action="viewDetail.php">
                                        <input type="hidden" name="postID" value="<?php echo $postID ?>" />
                                        <input type="submit"  class="button medium r-m-plus r-m-full" value="READ MORE" />
                                    </form> 
                                </div>
                            </div>	
                        </div>

                    </div>
                    <!-- BLOG ITEM -->
                    <div class="blog-item m-bot-35 clearfix">
                        <div class="hover-item">
                            <div class="clearfix">
                                <div class="blog-item-date-inf-container left">
                                    <div class="blog-item-date-cont">
                                        <div class="blog-item-date">17</div>
                                        <div class="blog-item-mounth">OCT</div>
                                    </div>
                                    <div>
                                        <div class="blog-item-category-img">
                                            <img src="images/icon-gallery-post.png" alt="Ipsum" >
                                        </div>
                                    </div>
                                </div>

                                <div class="view view-first">
                                    <img src="images/content/post-2-2.jpg" alt="Ipsum" >
                                    <div class="mask"></div>	
                                    <div class="abs">
                                        <a href="images/content/post-2-2.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
                                    </div>	
                                </div>
                            </div>	
                            <div class="blog-item-caption-container">
                                <a class="a-invert" href="blog-single.html" ><span class="bold">Sed</span> Lectus</a>
                                <div class="lp-item-container-border clearfix">
                                    <div class="blog-info-container">
                                        <ul class="clearfix">
                                            <li class="author">Admin</li>
                                            <li class="view">16 views</li>
                                            <li class="comment">25 Comments</li>
                                            <li class="tag">Website Design - Responsive</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item-text-container">
                            <p>Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sed mauris lorem. Sed sit amet mauris eu purus consectetur blandit sed et lacus. Cras tellus enim, sagittis a varius faucibus, molestie in dolor. Mauris mollis adipiscing elit, in vulputate est volutpat vitae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>

                        </div>
                        <div class="lp-r-m-container right">
                            <a href="blog-single.html" class="button medium r-m-plus r-m-full">READ MORE</a>
                        </div>

                    </div>
                    <!-- BLOG ITEM -->
                    <div class="blog-item m-bot-35 clearfix">
                        <div class="hover-item">
                            <div class="clearfix">
                                <div class="blog-item-date-inf-container left">
                                    <div class="blog-item-date-cont">
                                        <div class="blog-item-date">10</div>
                                        <div class="blog-item-mounth">OCT</div>
                                    </div>
                                    <div>
                                        <div class="blog-item-category-img">
                                            <img src="images/icon-video-post.png" alt="Ipsum" >
                                        </div>
                                    </div>
                                </div>

                                <div class="view view-first">
                                    <img src="images/content/post-2-3.jpg" alt="Ipsum" >
                                    <div class="mask"></div>	
                                    <div class="abs">
                                        <a href="images/content/post-2-3.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
                                    </div>	
                                </div>
                            </div>	
                            <div class="blog-item-caption-container">
                                <a class="a-invert" href="blog-single.html" ><span class="bold">Lorem</span> Ipsum</a>
                                <div class="lp-item-container-border clearfix">
                                    <div class="blog-info-container">
                                        <ul class="clearfix">
                                            <li class="author">Admin</li>
                                            <li class="view">16 views</li>
                                            <li class="comment">25 Comments</li>
                                            <li class="tag">Website Design - Responsive</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item-text-container">
                            <p>Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sed mauris lorem. Sed sit amet mauris eu purus consectetur blandit sed et lacus. Cras tellus enim, sagittis a varius faucibus, molestie in dolor. Mauris mollis adipiscing elit, in vulputate est volutpat vitae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>

                        </div>
                        <div class="lp-r-m-container right">
                            <a href="blog-single.html" class="button medium r-m-plus r-m-full">READ MORE</a>
                        </div>

                    </div>
                    <!-- PAGINATION -->
                    <div class="pagination-1-container ">
                        <ul class="pagination-1">
                            <li>
                                <a class="pag-prev" href="#"></a>
                            </li>
                            <li>
                                <a class="pag-current" href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a class="pag-next" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="five columns ">
                    <!-- WIDGET -->
                    <div class="sidebar-item  m-bot-35">

                        <div class="caption-container-main m-bot-30">
                            <div class="caption-text-container">BLOG CATEGORIES</div>
                            <div class="content-container-white caption-bg "></div>
                        </div>

                        <div >
                            <ul class="blog-categories">
                                <li class="active "><a href="#"><span class="blog-cat-icon"></span>Business</a></li>
                                <li><a href="#"><span class="blog-cat-icon"></span>Social Media</a></li>
                                <li><a href="#"><span class="blog-cat-icon"></span>Technology</a></li>
                                <li><a href="#"><span class="blog-cat-icon"></span>News</a></li>
                                <li><a href="#"><span class="blog-cat-icon"></span>Entertainment</a></li>
                            </ul>
                        </div>
                    </div>	
                    <!-- WIDGET -->	
                    <div class="sidebar-item  m-bot-35">
                        <div class="caption-container-main m-bot-30">
                            <div class="caption-text-container">TAB WIDGET</div>
                            <div class="content-container-white caption-bg "></div>
                        </div>

                        <div class="">
                            <ul class="tabs-nav">
                                <li class="active">
                                    <a href="#tab1">First</a>
                                </li>
                                <li class="">
                                    <a href="#tab2">Second</a>
                                </li>
                            </ul>
                            <div>
                                <div id="tab1" class="tab-content" >
                                    <ul class="latest-post-container">
                                        <li class="latest-post-sidebar clearfix">
                                            <div class="lp-img-cont left">
                                                <a href="" ><img src="images/content/port-2-3.jpg" alt="project"></a>
                                            </div>
                                            <div class="lp-title-cont left">
                                                <p class="latest-post-sidebar-title"><a href="">Lorem Ipsum</a></p>
                                                <p class="latest-post-sidebar-date">Feb 15, 2012</p>
                                                <p class="latest-post-sidebar-comm">15 comments</p>
                                            </div>	
                                        </li>
                                        <li class="latest-post-sidebar clearfix">
                                            <div class="lp-img-cont left">
                                                <a href="" ><img src="images/content/port-2-2.jpg" alt="project"></a>
                                            </div>
                                            <div class="lp-title-cont left">
                                                <p class="latest-post-sidebar-title"><a href="">Cras Tincid</a></p>
                                                <p class="latest-post-sidebar-date">Feb 10, 2013</p>
                                                <p class="latest-post-sidebar-comm">12 comments</p>
                                            </div>	
                                        </li>
                                        <li class="latest-post-sidebar clearfix">
                                            <div class="lp-img-cont left">
                                                <a href="" ><img src="images/content/port-2-4.jpg" alt="project"></a>
                                            </div>
                                            <div class="lp-title-cont left">
                                                <p class="latest-post-sidebar-title"><a href="">Amet Mauris</a></p>
                                                <p class="latest-post-sidebar-date">Jan 14, 2013</p>
                                                <p class="latest-post-sidebar-comm">10 comments</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2" class="tab-content content-container-white" >
                                    <ul class="tab-post-container text ">
                                        <li class="clearfix">
                                            <p>Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- WIDGET -->	
                    <div class="sidebar-item  m-bot-35">
                        <div class="caption-container-main m-bot-30">
                            <div class="caption-text-container">ACCORDION WIDGET</div>
                            <div class="content-container-white caption-bg "></div>
                        </div>



                        <div>

                            <div id="accordion">

                                <h3><a href="#">Lorem ipsum</a></h3>
                                <div>
                                    <p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
                                </div>

                                <h3><a href="#">Vestilum pulvinar</a></h3>
                                <div>
                                    <p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
                                </div>

                                <h3><a href="#">Donec sedin</a></h3>
                                <div>
                                    <p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
                                </div> 

                            </div><!-- End accordion -->

                        </div>
                    </div>
                    <!-- WIDGET -->	
                    <div class="sidebar-item  m-bot-25">
                        <div class="caption-container-main m-bot-30">
                            <div class="caption-text-container">TAG WIDGET</div>
                            <div class="content-container-white caption-bg "></div>
                        </div>


                        <div>

                            <div class="tag-cloud">
                                <ul class="clearfix">
                                    <li><a href="">HTML 5</a></li>
                                    <li><a href="">CSS 3</a></li>
                                    <li><a href="">Photoshop</a></li>
                                    <li><a href="">WordPress</a></li>
                                    <li><a href="">Joomla!</a></li>
                                    <li><a href="">UI</a></li>
                                    <li><a href="">Template</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- WIDGET -->	
                    <div class="sidebar-item  m-bot-35">
                        <div class="caption-container-main m-bot-30">
                            <div class="caption-text-container">FLICKR WIDGET</div>
                            <div class="content-container-white caption-bg "></div>
                        </div>

                        <ul id="flickrfeed" class="clearfix"></ul>

                    </div>
                </div>
            </div>






            <!-- LATEST WORK -->
            <div class="container clearfix m-top-60">
                <div class="four columns carousel-intro m-bot-33">

                    <div class="caption-container m-bot-20">
                        <div class="title-block-text">
                            THIS IS THE LIST OF<br>
                            OUR RECENT<br>
                            <strong>WORKS</strong>
                        </div>

                        <div class="carousel-navi jcarousel-scroll">
                            <div class="jcarousel-prev"></div>
                            <div class="jcarousel-next"></div>
                        </div>
                    </div>

                </div>


                <!-- jCAROUSEL -->
                <div class="jcarousel latest-work-jc m-bot-30" >
                    <ul class="clearfix">
                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class="hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-1.jpg" alt="Ipsum" >
                                    <div class="mask"></div>	
                                    <div class="abs">
                                        <a href="images/content/port-2-1.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-2.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-2.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">photography</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-3.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-3.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">illustration</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class="hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-4.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-4.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-5.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-5.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-6.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-6.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-7.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-7.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>

                        <!-- LATEST WORK ITEM -->
                        <li class="four columns">
                            <div class=" hover-item">
                                <div class="view view-first">
                                    <img src="images/content/port-2-8.jpg" alt="Ipsum" >
                                    <div class="mask"></div>
                                    <div class="abs">
                                        <a href="images/content/port-2-8.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
                                    </div>	
                                </div>
                                <div class="lw-item-caption-container">
                                    <a class="a-invert" href="portfolio-single.html" >
                                        <div class="item-title-main-container clearfix">
                                            <div class="item-title-text-container">
                                                <span class="bold">Lorem</span> Ipsum
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">web design</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- jCAROUSEL End -->
            </div>	
            <!-- OUR PROJECTS End -->


            <!-- NEWS LETTER -->
            <div class="dark-grey-bg">
                <div class="container m-bot-20 clearfix">
                    <div class="sixteen columns">
                        <div class="newsletter-container clearfix">
                            <div class="nl-img-container">
                                <img src="images/icon-mail.png" alt="mail">
                            </div>
                            <div class="nl-text-container clearfix">
                                <div class="caption">
                                    <span class="bold">NEWS</span> LETTER
                                </div>
                                <div class="nl-text">Stay up-to date with the latest news and other stuffs, Sign Up today!</div>
                                <div class="nl-form-container">
                                    <form class="newsletterform" method="post" action="#">
                                        <input type="text" onblur="if (this.value == '')
                                                    this.value = 'Your email here...';" onfocus="if (this.value == 'Your email here...')
                                                                this.value = '';" value="Your email here..." name="email"><button class="nl-button">SIGN UP</button>
                                    </form>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OUR CLIENTS -->
            <div class="container clearfix">
                <div class="sixteen columns m-bot-20">
                    <ul class="our-clients-container clearfix ">
                        <li class="">
                            <a href="">
                                <div class="bw-wrapper">
                                    <img src="images/logo1.png" alt="client" >
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="bw-wrapper">
                                    <img src="images/logo2.png" alt="client" >
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="bw-wrapper">
                                    <img src="images/logo3.png" alt="client">
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="bw-wrapper">
                                    <img src="images/logo4.png" alt="client" >
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="bw-wrapper">
                                    <img src="images/logo5.png" alt="client" >
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>	
            </div>
            <!-- FOOTER -->
            <footer>
                <div class="footer-content-bg">
                    <div class="container clearfix">
                        <div class="one-third-footer-spec column omega">

                            <div class="logo-footer-container">	
                                <a href="index.html" class="logo" rel="home" title="Home">
                                    <img src="images/logo-retina.png" alt="solana" >
                                </a>
                            </div>
                        </div>
                        <div class="two-thirds-footer-spec column alpha">


                            <p class="footer-content-container m-none">WE PROVIDE AWESOME DIGITAL <strong>SERVICES</strong></p>

                        </div>
                    </div>
                    <div class="container clearfix">
                        <div class="one-third column">
                            <div class="footer-social-text-container">
                                <p class="title-font-24">SAY <strong>HELLO</strong></p>
                                <p class="title-font-12">WE'D LOVE HEARING FROM YOU</p>
                            </div>
                            <div class="footer-social-links-container">	
                                <ul class="social-links clearfix">
                                    <li><a class="facebook-link" target="_blank" title="Facebook" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="skype-link" target="_blank" title="Skype" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="twitter-link" target="_blank" title="Twitter" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="flickr-link" target="_blank" title="Flickr" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="vimeo-link" target="_blank" title="Vimeo" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="linkedin-link" target="_blank" title="linkedin" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="pintrest-link" target="_blank" title="pintrest" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                    <li><a class="googleplus-link" target="_blank" title="googleplus" href="#item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
                                </ul>
                            </div>


                        </div>
                        <div class="one-third column ">
                            <h3 class="caption footer-block">LATEST <span class="bold">POST</span></h3>
                            <ul class="latest-post">
                                <li class="standart-post">
                                    <h4 class="title-post-footer"><a href="blog-single.html">Donec id elit</a></h4>
                                    <h4 class="date-post-footer">July 10, 2013</h4>
                                </li>
                                <li class="image-post">
                                    <h4 class="title-post-footer"><a href="blog-single.html">Donec id elit</a></h4>
                                    <h4 class="date-post-footer">July 10, 2013</h4>
                                </li>
                                <li class="video-post">
                                    <h4 class="title-post-footer"><a href="blog-single.html">Donec id elit</a></h4>
                                    <h4 class="date-post-footer">July 10, 2013</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="one-third column ">
                            <h3 class="caption footer-block">CONTACT <span class="bold">INFO</span></h3>
                            <ul class="footer-contact-info">
                                <li class="footer-loc">
                                    Corporation, 123 Some Ave, Suite 700,  New York
                                </li>
                                <li class="footer-phone">
                                    (123) 456-7890<br>(123) 987-6540
                                </li>
                                <li class="footer-mail">
                                    <a href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">email@felius.com</a><br>
                                    <a href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">email@optimas.com</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="footer-copyright-bg">
                    <div class="container ">
                        <div class="sixteen columns clearfix">
                            <div class="footer-menu-container">
                                <nav class="clearfix" id="footer-nav">
                                    <ul class="footer-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="elements.html">Features</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#item/solana-responsive-html5-template/5590059?ref=abcgomel">Purchase</a></li>
                                    </ul>
                                </nav>
                            </div>	
                            <div class="footer-copyright-container right-text">
                                &copy; Solan<span class="yellow">a</span> - Build with Passion by <a class="author" href="#user/abcgomel/portfolio">AbcGomel</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>	
            <p id="back-top">
                <a href="#top" title="Back to Top"><span></span></a>
            </p>
        </div><!-- End wrap -->
        <!-- JS begin -->

        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>

        <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="js/jQuery.BlackAndWhite.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.quicksand.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery-cookie.js"></script>  
        <script src="js/styleswitcher.js"></script>
        <div class="switcher"></div>

        <!-- JS end -->

    </body>
</html>
