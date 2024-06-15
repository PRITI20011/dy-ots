<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="DC.title" content="OrianaTech">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Pune">
    <meta name="geo.position" content="18.5597742;73.7875218">
    <meta name="ICBM" content="18.5597742,73.7875218">
    <meta name="keywords" content="Orianatech is a versatile software development company...">
    <meta name="description" content="Orianatech is a dynamic and innovative software development company...">
    <meta name="author" content="OrianaTech Solutions Private Limited">
    <title>OrianaTech- We Build Your Business!</title>    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
    <link rel="preload" href="assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="assets/css/menu.css" media="all">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" media="all">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" media="all">
    <link rel="stylesheet" href="assets/css/font-icon.css" media="all">
    <link rel="stylesheet" href="assets/css/animate.css" media="all">
    <link rel="stylesheet" href="assets/css/lightbox.css" media="all">
    <link rel="stylesheet" href="assets/css/aos.css" media="all">
    <link rel="stylesheet" href="assets/css/flickity.min.css" media="all">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <script src="assets/js/jquery.js" defer></script>
    <script src="assets/js/popper.min.js" defer></script>
    <script src="assets/js/bootstrap.min.js" defer></script>
    <script src="assets/js/isotope.pkgd.min.js" defer></script>
    <script src="assets/js/masonry.pkgd.js" defer></script>
    <script src="assets/js/owl.carousel.min.js" defer></script>
    <script src="assets/js/particles.min.js" defer></script>
    <script src="assets/js/animated.headline.js" defer></script>
    <script src="assets/js/flickity.pkgd.min.js" defer></script>
    <script src="assets/js/lazysizes.min.js" defer></script>
    <script src="assets/js/lightbox.js" defer></script>
    <script src="assets/js/aos.js" defer></script>
    <script src="assets/js/jquery.counterup.min.js" defer></script>
    <script src="assets/js/scripts.js" defer></script>
    <script src="assets/js/api.js" defer></script>
</head>

<body>
    <!-- Main Div -->
    <div class="axat-wrap">

        <!-- Header Section -->
        <header class="is-transparent" id="header">

            <!--Nav Bar-->
       <nav id="Top_bar" class="navbar navbar-expand-lg navbar-light megamenu main-header">
           <div class="container">
               <a class="navbar-brand axat-logo" href="{{ url('/') }}">
                   <img class="axatlogo-white lazyload" src="/assets/images/whitelogo.png" alt="" />
                   <img class="axatlogo-color lazyload" src="/assets/images/colorlogo.png" alt="" />
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse"
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                   aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end link" id="navbarSupportedContent">
                   <div class="toggle-btn">
                       <span class="border-icon"></span>
                       <span class="border-icon"></span>
                       <span class="border-icon"></span>
                   </div>
                   <ul class="navbar-nav menu">
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Company
                           </a>
                           <div class="dropdown-menu col-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ url('/about-ots') }}" class="subnav_title">About
                                   OrianaTech</a>
                               <a class="dropdown-item" href="{{ url('/team') }}" class="subnav_title">Team</a>

                               <a class="dropdown-item" href="{{ url('/why-us') }}" class="subnav_title">Why Us</a>
                               <div class="dropdown-divider"></div>
                               <a class="dropdown-item" href="{{ url('/careers') }}" class="subnav_title">Careers</a>
                               <a class="dropdown-item" href="{{ url('https://employee.orianatechsolutions.com') }}" target="_blank" class="subnav_title">Employee Login</a>
                           </div>
                       </li>
                       <li class="nav-item dropdown megamenu-fw">
                           <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                               aria-expanded="false" class="subnav_title">Services <span class="caret"></span></a>
                           <ul class="dropdown-menu megamenu-content" role="menu">
                               <li>
                                   <div class="row">
                                       <div class="col-menu col-lg-3 col-md-4 col-sm-6">
                                           <h3 class="title"><a href="{{ url('/web&softwaredeve') }}">Web & Software
                                                   Development</a></h3>
                                           <ul class="sub-menu">
                                               <li><a href="{{ url('/customwebsitedevelopment') }}"
                                                       class="subnav_title">Custom Website Development</a></li>
                                               <li><a href="{{ url('/webportals-cms')}}" class="subnav_title">Web Portals and
                                                       CMS Development</a></li>
                                               <li><a href="{{ url('/ecommerce-development') }}"
                                                       class="subnav_title">ECommerce Website Development</a></li>
                                               <li><a href=" {{ url('/modernization') }}" class="subnav_title">Website
                                                       Modernization</a></li>
                                               <li><a href=" {{ url('/custom-crm-software-development') }}"
                                                       class="subnav_title">Custom CRM Software Development</a>
                                               </li>
                                               <li><a href=" {{ url('/erp-development') }}" class="subnav_title">ERP
                                                       Development</a></li>
                                               <li><a href=" {{ url('/custom-software-development') }}"
                                                       class="subnav_title">Custom Software Development</a></li>
                                               <li><a href=" {{ url('/database-development') }}"
                                                       class="subnav_title">Database Development</a></li>
                                               <li><a href=" {{ url('/document-management-system-development') }}"
                                                       class="subnav_title">Document Management System
                                                       Development</a></li>
                                               <li><a href=" {{ url('/saas-application-development') }}"
                                                       class="subnav_title">SaaS Application Development</a></li>
                                           </ul>
                                       </div>
                                       <div class="col-menu col-lg-3 col-md-4 col-sm-6">
                                           <h3 class="title"><a href="{{ url('/ui-ux-design') }}">UI/UX Design</a></h3>
                                           <ul class="sub-menu">
                                               <li><a href="{{ url('/prototypes') }}" class="subnav_title">Prototypes</a>
                                               </li>
                                               <li><a href=" {{ url('/wireframe-design') }}" class="subnav_title">Wireframe
                                                       Design</a></li>
                                               <li><a href="{{ url('/website-design') }}" class="subnav_title">Website
                                                       Design</a></li>
                                               <li><a href=" /{{ url('/mobile-app-design') }}" class="subnav_title">Mobile App
                                                       Design</a></li>
                                               <li><a href="{{ url('/graphic-design') }}" class="subnav_title">Graphic
                                                       Design</a></li>
                                           </ul>
                                           <hr class="mt-3 mb-3" />
                                           <h3 class="title"><a href="{{ url('/mobile-apps-development') }}">Mobile App
                                                   development</a></h3>
                                           <ul class="sub-menu">
                                               <li><a href="{{ url('/android-app-development') }}"
                                                       class="subnav_title">Android app development</a></li>
                                               <li><a href=" {{ url('/iphone-app-development') }}" class="subnav_title">iOS
                                                       app development</a></li>
                                               <li><a href="{{ url('/ipad-app-development') }}" class="subnav_title">iPad
                                                       app development</a></li>
                                               <li><a href="{{ url('/apple-watch-app-development') }}"
                                                       class="subnav_title">Apple Watch App Development</a></li>
                                           </ul>

                                       </div>
                                       <div class="col-menu col-lg-3 col-md-4 col-sm-6">
                                           <h3 class="title"><a href=" {{ url('/digital-marketing-services') }}">Digital
                                                   Marketing Services</a></h3>
                                           <ul class="sub-menu">
                                               <li><a href=" {{ url('/seo-search-engine-optimization') }}"
                                                       class="subnav_title">Search Engine Optimisation (SEO)</a>
                                               </li>

                                               <li><a href=" {{ url('/seo-packages') }}" class="subnav_title">SEO
                                                       Packages</a></li>
                                           </ul>
                                                <hr class="mt-3 mb-3" />
                                                <div class="box-icon-link">
                                                    <a href="{{ url('/cloud-solutions') }}"><i class="iconentypo-newspaper icon-3x"></i> CLOUD
                                                        SOLUTIONS</a>
                                                </div>
                                                <div class="box-icon-link">
                                                    <a href="{{ url('/augmented-reality') }}"><i class="iconentypo-newspaper icon-3x"></i> AUGMENTED
                                                        REALITY</a>
                                                </div>
                                                <div class="box-icon-link">
                                                    <a href="{{ url('/blockchain') }}"><i class="iconentypo-newspaper icon-3x"></i>BLOCK
                                                        CHAIN DEVELOPMENT</a>
                                                </div>
                                                <div class="box-icon-link">
                                                    <a href="{{ url('/artificial-intelligence-and-machine-learning') }}"><i class="iconentypo-newspaper icon-3x"></i> ARTIFICIAL
                                                        INTELLIGENCE & MACHINE LEARNING</a>
                                                </div>
                                            </div>
                                            <div class="col-menu col-lg-3 col-md-4 col-sm-6	">
                                                <h3 class="title"><a href=" {{ url('/hire-dedicated-resource') }}">HIRE DEDICATED
                                                        RESOURCES</a></h3>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ url('/hire-wordpress-developer') }}" class="subnav_title">Hire WordPress Developer</a>
                                                    </li>
                                                    <li><a href="{{ url('/hire-Laravel-developer') }}" class="subnav_title">Hire Laravel Developer</a></li>

                                                    <li><a href="{{ url('/hire-smo-specialist') }}" class="subnav_title">Hire SMO
                                                            Specialist</a></li>
                                                    <li><a href="{{ url('/hire-PHP-developer') }}" class="subnav_title">Hire PHP Developer</a></li>
                                                    <li><a href="{{ url('/hire-Python-developer') }}" class="subnav_title">Hire Python Developer</a></li>
                                                    <li><a href="{{ url('/hire-web-designer') }}" class="subnav_title">Hire
                                                            Web Designer</a></li>

                                                    <li><a href="{{ url('/hire-angular-developer') }}" class="subnav_title">Hire Angular Developer</a></li>
                                                    <li><a href="{{ url('/hire-android-app-developer') }}" class="subnav_title">Hire Android App Developer</a>
                                                    </li>
                                                    <li><a href="{{ url('/hire-app-designer') }}" class="subnav_title">Hire App
                                                            Designer</a></li>
                                                    <li><a href="{{ url('/hire-javadeveloper') }}" class="subnav_title">Hire Java
                                                            Developer</a></li>
                                                    <li><a href="{{ url('/hire-reactjs-developer') }}" class="subnav_title">Hire ReactJS Developer</a></li>
                                                    <li><a href="{{ url('/hire-ios-app-developer') }}" class="subnav_title">Hire
                                                            iOS App Developer</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <li class="nav-item">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Products
                                </a>
                                <div class="dropdown-menu col-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" class="subnav_title">Smart Campus
                                    </a>
                                    <a class="dropdown-item" href="#" class="subnav_title">On Track Services</a>
                                    <a class="dropdown-item" href="https://taskmanagement.orianatechsolutions.com"
                                        class="subnav_title">Task Management System</a>
                                    <a class="dropdown-item" href="#" class="subnav_title">Hotel Managment System</a>
                                    <a class="dropdown-item" href="https://advocate.orianatechsolutions.com"
                                        class="subnav_title">Advocate Solutions</a>
                                    <a class="dropdown-item" href="#" class="subnav_title">Inventory Managments</a>
                                    <a class="dropdown-item" href="#" class="subnav_title">CMS & ERPs</a>
                                    <a class="dropdown-item" href="#" class="subnav_title">Mobile Applications</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" class="subnav_title">Many More..</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#" class="subnav_title">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="{{ url('/contact-us') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="right_nav form-inline my-2 my-lg-0">
                        <li><a href="#"><button type="submit" class="btn btn-lg btn-grad" data-toggle="modal">Get a
                                    Quote</button></a></li>
                    </ul>
                </div>


       </nav>
            <!-- nav bar end -->
