<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}

?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="<?php echo $url_path ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
    -->
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/19.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/4.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/23.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/15.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/7.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/8.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/9.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/27.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

    <div class="type-33">
        <div class="container">
            <form method="get" class="searchform">
                <div class="travelog-form">
                    <input type="text" value="" name="s" class="form-control" placeholder="Input search query and hit enter...">
                </div>
            </form>
        </div>
    </div>
    <div class="type-1">
        <nav class="navbar navbar-expand-lg navbar-light no-response">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="http://localhost/module_cms/1/images/hinh1.png" alt="hinh1"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home<i class="fa fa-angle-down fa-sm"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">Listing – Standard</a></li>
                                <li class="menu-item"><a href="#">Listing – Title Over</a></li>
                                <li class="menu-item"><a href="#">Listing – Title Over Block</a></li>
                                <li class="menu-item"><a href="#">No Sidebar</a></li>
                                <li class="menu-item"><a href="#">Sidebar</a></li>
                                <li class="menu-item"><a href="#">Featured Posts</a></li>
                                <li class="menu-item"><a href="#">Map</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Headers<i class="fa fa-angle-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">Standard</a></li>
                                <li class="menu-item"><a href="#">Top Menu</a></li>
                                <li class="menu-item"><a href="#">Bottom Menu</a></li>
                                <li class="menu-item"><a href="#">Bottom Menu Centered</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Areas<i class="fa fa-angle-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">USA</a></li>
                                <li class="menu-item"><a href="#">Top Russia</a></li>
                                <li class="menu-item"><a href="#">Spain Menu</a></li>
                                <li class="menu-item"><a href="#">Serbia</a></li>
                                <li class="menu-item"><a href="#">Sweeden</a></li>
                                <li class="menu-item"><a href="#">Morocco</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                            <ul class=" dropdown-menu">
                                <li class="menu-item"><a href="#">Full Width</a></li>
                                <li class="menu-item"><a href="#">Left Sidebar</a></li>
                                <li class="menu-item"><a href="#">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item search">
                            <a href="javascript:;" class="trigger-search"><i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="responsive1">
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="http://localhost/module_cms/1/images/hinh1.png" alt="hinh1"></a>
                    <ul class="navbar-nav ml-auto ">
                        <li><a href="#"><span class="navbar-toggler-icon"></span></a></li>
                        <li class="nav-item"><a href="javascript:;" class="trigger-search nav-link"><i class="fa fa-search"></i>
                            </a></li>
                    </ul>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav ml-auto responsive2">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home<i class="fa fa-angle-down fa-sm"></i></a>
                                <ul class=" dropdown-menu">
                                    <li class="menu-item"><a href="#">Listing – Standard</a></li>
                                    <li class="menu-item"><a href="#">Listing – Title Over</a></li>
                                    <li class="menu-item"><a href="#">Listing – Title Over Block</a></li>
                                    <li class="menu-item"><a href="#">No Sidebar</a></li>
                                    <li class="menu-item"><a href="#">Sidebar</a></li>
                                    <li class="menu-item"><a href="#">Featured Posts</a></li>
                                    <li class="menu-item"><a href="#">Map</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Headers<i class="fa fa-angle-down"></i></a>
                                <ul class=" dropdown-menu">
                                    <li class="menu-item"><a href="#">Standard</a></li>
                                    <li class="menu-item"><a href="#">Top Menu</a></li>
                                    <li class="menu-item"><a href="#">Bottom Menu</a></li>
                                    <li class="menu-item"><a href="#">Bottom Menu Centered</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Areas<i class="fa fa-angle-down"></i></a>
                                <ul class=" dropdown-menu">
                                    <li class="menu-item"><a href="#">USA</a></li>
                                    <li class="menu-item"><a href="#">Top Russia</a></li>
                                    <li class="menu-item"><a href="#">Spain Menu</a></li>
                                    <li class="menu-item"><a href="#">Serbia</a></li>
                                    <li class="menu-item"><a href="#">Sweeden</a></li>
                                    <li class="menu-item"><a href="#">Morocco</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                                <ul class=" dropdown-menu">
                                    <li class="menu-item"><a href="#">Full Width</a></li>
                                    <li class="menu-item"><a href="#">Left Sidebar</a></li>
                                    <li class="menu-item"><a href="#">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="type-2">
        <div id="map"></div>
    </div>
    <div class="module-19">
        <div class="filter-title">
            <div class="container">
                <h4>
                    Category: USA </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xl-9 col-lg-9 col-9">
                <div class="type-4">
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
                        <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/4.jpg" alt="img 1" class="img-fluid">
                    </a>

                    <h3 class="blog-item-title">
                        <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
                            7 Days In Washington
                        </a>
                    </h3>

                    <div class="blog-item-meta">
                        Written on September 9, 2015 in
                        <a href="#">USA</a>
                    </div>

                    <p>
                        Washington, D.C. is the capital of the United States of America and the seat of its three branches of government, as well as the federal district of the U.S. The city has an unparalleled collection of free, public museums and many of the nation’s most treasured monuments and memorials. The vistas on the National Mall...
                    </p>
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
                        <p> Continue reading <i class="fa fa-angle-right"></i></p>
                    </a>
                </div>
                <div class="type-4">
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
                        <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/sl4n.jpg" alt="img 1" class="img-fluid">
                    </a>

                    <h3 class="blog-item-title">
                        <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
                            Couple Of Days In Sunny Miami
                        </a>
                    </h3>

                    <div class="blog-item-meta">
                        Written on July 27, 2015 in
                        <a href="#">USA</a>
                    </div>

                    <p>
                        Three quarters of a century after the art deco movement, Miami remains one of the world’s trendiest and flashiest hot spots. Luckily for visitors, South Beach is no longer the only place to stand and pose in Miami. North of downtown, the growing Wynwood and Design districts—along with nearby Midtown—are home to Miami’s hipster and.....
                    </p>
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
                        <p> Continue reading <i class="fa fa-angle-right"></i></p>
                    </a>
                </div>
                <div class="type-4">
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="blog-item-media">
                        <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/4.3.jpg" alt="img 1" class="img-fluid">
                    </a>

                    <h3 class="blog-item-title">
                        <a href="2016/05/14/5-sunny-days-in-malaga/index.html">
                            No Sleep In New York
                        </a>
                    </h3>

                    <div class="blog-item-meta">
                        Written on July 27, 2015 in
                        <a href="#">USA</a>
                    </div>
                    <p>
                        From Wall Street’s skyscrapers to the neon of Times Square to Central Park’s leafy paths, New York City pulses with an irrepressible energy. History meets hipness in this global center of entertainment, fashion, media, and finance. World-class museums like MoMA and unforgettable icons like the Statue of Liberty beckon, but discovering t...
                    </p>
                    <a href="2016/05/14/5-sunny-days-in-malaga/index.html" class="read-more">
                        <p> Continue reading <i class="fa fa-angle-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xl-3 col-lg-3 col-3">
                <div class="type-15">
                    <div class="widget white-block clearfix widget_search">
                        <form method="get" class="searchform" action="#">
                            <div class="travelog-form">
                                <input type="text" value="" name="s" class="form-control" placeholder="Search for..." />
                                <input type="hidden" name="post_type" value="post" />
                                <a class="btn btn-default submit_form"><i class="fa fa-search"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="type-23">
                    <div class="white-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-12 ">
                                    <div class="widget white-block clearfix widget_archive">
                                        <div class="widget-title-wrap">
                                            <h4 class="widget-title">Archives</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="../2016/05/index.html">May 2016</a> <span>1</span>
                                            </li>
                                            <li>
                                                <a href="../2016/04/index.html">April 2016</a>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <a href="../2016/03/index.html">March 2016</a>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <a href="../2015/09/index.html">September 2015</a>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <a href="../2015/08/index.html">August 2015</a>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <a href="../2015/07/index.html">July 2015</a> <span>2</span>
                                            </li>
                                            <li>
                                                <a href="../2015/06/index.html">June 2015</a> <span>1</span>
                                            </li>
                                            <li>
                                                <a href="../2015/05/index.html">May 2015</a> <span>3</span>
                                            </li>
                                            <li>
                                                <a href="../2015/04/index.html">April 2015</a>
                                                <span>1</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="type-5">
                    <div class="widget white-block clearfix widget_text">
                        <div class="textwidget">
                            <div class="text-center">
                                <a href="#" target="_blank"> <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/5.png" alt="img 5" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="type-23">
                    <div class="white-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-12 ">
                                    <div class="widget white-block clearfix widget_archive">
                                        <div class="widget-title-wrap">
                                            <h4 class="widget-title">Categories</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="../2016/05/index.html">Morocco</a> <span>2</span>
                                            </li>
                                            <li>
                                                <a href="../2016/04/index.html">Serbia</a>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <a href="../2016/03/index.html">Spani</a>
                                                <span>3</span>
                                            </li>
                                            <li>
                                                <a href="../2015/09/index.html">Sweenden</a>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <a href="../2015/08/index.html">USA</a>
                                                <span>3</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="type-7">
                    <div class="widget-title-wrap">
                        <h4 class="widget-title">Recent Comments</h4>
                    </div>
                    <ul>
                        <li>
                            <div class="widget-image-thumb">
                                <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/hinh7-1.png" alt="img 1" class="img-fluid">
                            </div>
                            <div class="widget-text">
                                <p>Sandy Smith</p>
                                <p class="small"><i class="far fa-clock"></i>4 years ago</p>
                            </div>
                            <a href="#" class="grey">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</a>
                        </li>
                        <li>
                            <div class="widget-image-thumb">
                                <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/hinh7-2.png" alt="img 1" class="img-fluid">
                            </div>
                            <div class="widget-text">
                                <p>Sandy Smith</p>
                                <p class="small"><i class="far fa-clock"></i>4 years ago</p>
                            </div>
                            <a href="#" class="grey">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium..."</a>
                        </li>
                    </ul>
                </div>
                <div class="type-8">
                    <div class="widget white-block clearfix widget_widget_top_author">
                        <div class="widget-title-wrap">
                            <h4 class="widget-title">Top Travelers</h4>
                        </div>
                        <ul class="list-unstyled no-top-padding">
                            <li class="top-authors">
                                <div class="widget-image-thumb">
                                    <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/hinh7-1.png" alt="img 1" class="img-fluid">
                                </div>

                                <div class="widget-text">
                                    <a href="author/ally/index.html"> Ally Star </a>
                                    <p class="small">
                                        <i class="fa fa-pencil"></i> Wrote 6 posts
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="top-authors">
                                <div class="widget-image-thumb">
                                    <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/hinh7-2.png" alt="img 1" class="img-fluid">
                                </div>

                                <div class="widget-text">
                                    <a href="author/admin/index.html"> Sandy Smith </a>
                                    <p class="small">
                                        <i class="fa fa-pencil"></i> Wrote 4 posts
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <li class="top-authors">
                                <div class="widget-image-thumb">
                                    <img src="<?php echo $url_host ?>/wordpress/wp-content/uploads/2020/12/8.jpg" alt="img 8" class="img-fluid">
                                </div>
                                <div class="widget-text">
                                    <a href="author/mark/index.html"> Mark Doe </a>
                                    <p class="small">
                                        <i class="fa fa-pencil"></i> Wrote 4 posts
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="type-9">
                    <div class="widget-title-wrap">
                        <h4 class="widget-title">Subscribe</h4>
                    </div>
                    <div class="travelog-form">
                        <h4 class="text-center">Stay tuned with latests travel posts</h4>
                        <input type="text" class="form-control email" placeholder="Input Email Here">
                        <a href="javascript:;" class="btn btn-default subscribe">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="module-27">
        <div class="footer-blog-icon">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                        <div class="box-post">
                            <div class="title-wrap">
                                <h2 class="widget-title">Recent Posts</h2>
                            </div>
                            <div class="row row-widget">
                                <div class="col-md-2">
                                    <div class="widget-image">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img1.jpg" alt="img 1" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="widget">
                                        <div class="widget-a">
                                            <a href="#">5 Sunny Days In Malaga</a>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-clock-o"></i> May 14, 2016 <i class="fa fa-comment-o" id="cm"></i>2
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row row-widget">
                                <div class="col-md-2">
                                    <div class="widget-image">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img2.jpg" alt="img 2" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="widget">
                                        <div class="widget-a">
                                            <a href="#">Week In Volgograd</a>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-clock-o"></i> April 5, 2016 <i class="fa fa-comment-o" id="cm"></i>3
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row row-widget">
                                <div class="col-md-2">
                                    <div class="widget-image">
                                        <a href="#"><img src="http://<?php echo $url_path ?>/images/ft-img3.jpg" alt="img-3" class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="widget">
                                        <div class="widget-a">
                                            <a href="#">Spring In Sweden</a>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-clock-o"></i> April 1, 2016 <i class="fa fa-comment-o" id="cm"></i>2
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="title-wrap">
                            <h2 class="widget-title">Follow Us</h2>
                        </div>
                        <div class="widget-social-27">
                            <a href="#" class="icon"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="icon"> <span class="fa fa-twitter"></span></a>
                            <a href="#" class="icon"><span class="fa fa-google"></span></a>
                            <a href="#" class="icon"><span class="fa fa-linkedin"></span></a>
                            <a href="#" class="icon"><span class="fa fa-pinterest"></span></a>
                            <a href="#" class="icon"><span class="fa fa-youtube"></span></a>
                            <a href="#" class="icon"><span class="fa fa-flickr"></span></a>
                            <a href="#" class="icon"><span class="fa fa-youtube"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                        <div class="title-wrap">
                            <h2 class="widget-title">Instagram</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-6">
                        <div class="box-tag">
                            <div class="title-wrap">
                                <h2 class="widget-title">Tag</h2>
                            </div>
                            <div class="tags-title">
                                <ul class="nav nav-pills mb-3">
                                    <li> <a href="#" class="tags">ancient</a></li>
                                    <li> <a href="#" class="tags">art</a></li>
                                    <li> <a href="#" class="tags">baltic</a></li>
                                    <li> <a href="#" class="tags">beach</a></li>
                                    <li> <a href="#" class="tags">capital</a></li>
                                    <li> <a href="#" class="tags">east</a></li>
                                    <li> <a href="#" class="tags">food</a></li>
                                    <li><a href="#" class="tags">museum</a></li>
                                    <li><a href="#" class="tags">nightlife</a></li>
                                    <li><a href="#" class="tags">no sleep</a></li>
                                    <li><a href="#" class="tags">party</a></li>
                                    <li> <a href="#" class="tags">russia</a></li>
                                    <li><a href="#" class="tags">sea</a></li>
                                    <li><a href="#" class="tags">serbia</a></li>
                                    <li><a href="#" class="tags">slavic</a></li>
                                    <li> <a href="#" class="tags">spain</a></li>
                                    <li><a href="#" class="tags">stallingrad</a></li>
                                    <li><a href="#" class="tags">street</a></li>
                                    <li><a href="#" class="tags">sunny</a></li>
                                    <li><a href="#" class="tags">sweden</a></li>
                                    <li> <a href="#" class="tags">usa</a></li>
                                    <li><a href="#" class="tags">vacation</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="title-wrap">
                            <h2 class="widget-title">Search</h2>
                        </div>
                        <div class="travelog-form">
                            <input type="text" value="" name="s" class="form-control" placeholder="Search for...">
                            <a class="btn btn-default submit_form"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $url_path ?>/js/jquery.js"></script>
    <script src="<?php echo $url_path ?>/js/js.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

</body>