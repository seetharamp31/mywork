<!DOCTYPE html>
<html>
    <head>
        <?php wp_head() ?>
    </head>
    <body>
       <!-- header area start -->
    <header id="header">
        <!-- header top area start -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex flex-center">
                    <div class="col-sm-8">
                        <div class="ht-address">
                            <ul>
                                <li><i class="fa fa-phone"></i>+ 88 01916 444137</li>
                                <li><i class="fa fa-envelope"></i>info@example.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="ht-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top area end -->
        <!-- header bottom area start -->
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-9">
                            <div class="logo">
                                <a href="index.html"><img src="<?php bloginfo('template_directory');?>/assets/images/icon/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu">
                                <nav>
                                    <ul id="m_menu_active">
                                        <li class="active"><a href="javascript:void(0);">Home</a>
                                            <ul class="submenu">
                                                <li class="active"><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                                <li><a href="index3.html">Home Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="javascript:void(0);">Courses</a>
                                            <ul class="submenu">
                                                <li><a href="courses.html">courses</a></li>
                                                <li><a href="course-details.html">course details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">teacher</a>
                                            <ul class="submenu">
                                                <li><a href="teachers.html">teachers</a></li>
                                                <li><a href="teacher-details.html">teacher details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-sm-3">
                            <div class="hb-right">
                                <ul>
                                    <li class="search_btn"><i class="fa fa-search"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div id="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom area end -->
    </header>
