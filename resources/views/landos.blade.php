<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ora theme tempalte">
    <meta name="author" content="NDT">
    <meta name="keywords" content="Ora theme template">

    <!-- Title Page-->
    <title>Homepage - HTML5 Templates</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/linearicons-free/css/linearicons-free.css" rel="stylesheet" media="all">
    <link href="vendor/elegant-icons/css/elegant-icons.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
</head>

<body class="animsition page-wrapper">


<!-- header-->
    @include('layouts.top_nav')
<header class="header header-mobile js-header-bar-mobile d-md-none">
    <div class="header-bar">
        <div class="header-bar-logo">
            <a href="index.html">
                <img src="images/icons/logo.png" alt="Ora">
            </a>
        </div>
        <div class="header-bar-menu">
            <button class="navbar-toggler hamburger" type="button" id="js-header-toggle">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>
    </div>
    <nav class="navbar-mobile navbar-primary">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#intro">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#resume">RESUME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projects">WORKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#blog">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
            </li>
        </ul>
    </nav>
</header>
<!-- end header-->

<!-- Intro start-->
<section class="section section-intro js-intro" id="intro" data-intro-bg="images/intro.jpg" data-intro-layout="fullscreen">
    <div class="container">
        <article class="section-inner">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="intro-name">
                        <span class="animated" data-intro-animate="fadeInRight" data-intro-delay="500">Hello Everybody!</span>
                    </h3>
                    <p class="intro-text">
                            <span class="animated" data-intro-delay="1100" data-intro-animate="fadeInDown">
                                I’m a UI/UX Designer, Front End Developer & Traveler. I’m from Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque consectetur arcu eu lacinia. Vivamus sem sem, ornare in nibh et, fermentum luctus metus.</span>
                    </p>
                    <img class="animated intro-sign" src="images/icons/ic-sign.png" alt="John Smith" data-intro-delay="2000" data-intro-animate="zoomIn">
                </div>
            </div>
        </article>
    </div>
</section>
<!-- Intro end-->

<!-- section services-->
<section class="section section-services bg-grey-1 p-t-110 p-b-90" id="services">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-25">Services</h3>
            <div class="row justify-content-center m-b-45">
                <p class="section-text-introduce col-lg-9">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-tablet"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">App Design</h3>
                        </header>
                        <p class="card-text">Nulla in malesuada diam. Nullam nec varius nisl quis nulla suscipit</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">Web Design</h3>
                        </header>
                        <p class="card-text">Quisque eu vehicula orci, nec suscipit odio. In gravida nec leo at ultrices</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-camera"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">Photography</h3>
                        </header>
                        <p class="card-text">Praesent quis arcu porta, mattis ante nec, consequat ipsum</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-html5"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">HTML5/CSS3</h3>
                        </header>
                        <p class="card-text">Nulla in malesuada diam. Nullam nec varius nisl quis nulla suscipit</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-wordpress"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">WordPress</h3>
                        </header>
                        <p class="card-text">Quisque eu vehicula orci, nec suscipit odio. In gravida nec leo at ultrices</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card-primary card-service">
                        <a class="card-link-overlay" href="#"></a>
                        <figure class="card-figure">
                            <div class="service-icon">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                        </figure>
                        <header class="card-header">
                            <h3 class="service-title">SEO Marketing</h3>
                        </header>
                        <p class="card-text">Praesent quis arcu porta, mattis ante nec, consequat ipsum</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section services-->

<!-- section resume-->
<section class="section section-resume bg-white p-t-110 p-b-120" id="resume">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-50">Resume</h3>
            <ul class="nav au-nav-tabs" id="resumeTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-expanded="true">EXPERIENCE
                        <div class="triangle-down">
                            <div class="inner"></div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education">EDUCATION
                        <div class="triangle-down">
                            <div class="inner"></div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="skills-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills">SKILLS
                        <div class="triangle-down">
                            <div class="inner"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content au-tab-content" id="resumeTabContent">
                <div class="tab-pane fade show active" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <figure class="card-figure">
                                    <img class="resume-image img-fluid" src="images/resume-ex-01.jpg" alt="Project Manager" />
                                    <a class="bg-overlay" href="#"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">Project Manager</a>
                                    </h3>
                                    <span class="resume-company">Apple Inc</span>
                                    <span class="resume-timeline">SEP 2017 – PRESENT</span>
                                </header>
                                <p class="card-text">Nunc tincidunt pellentesque accumsan. Fusce vel lobortis justo, quis sagittis sem. Nam eleifend aliquet malesuada.</p>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <figure class="card-figure">
                                    <img class="resume-image img-fluid" src="images/resume-ex-02.jpg" alt="UI/UX Designer" />
                                    <a class="bg-overlay" href="#"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">UI/UX Designer</a>
                                    </h3>
                                    <span class="resume-company">Google Inc</span>
                                    <span class="resume-timeline">MAY 2015 – AUG 2017</span>
                                </header>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa quis est hendrerit rutrum. Nunc tincidunt pellentesque</p>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <figure class="card-figure">
                                    <img class="resume-image img-fluid" src="images/resume-ex-03.jpg" alt="Web Development" />
                                    <a class="bg-overlay" href="#"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">Web Development</a>
                                    </h3>
                                    <span class="resume-company">Envato Inc</span>
                                    <span class="resume-timeline">SEP 2013 – MAY 2015</span>
                                </header>
                                <p class="card-text">Vestibulum rutrum imperdiet diam et suscipit. Praesent vulputate ex id velit facilisis, dapibus pretium dui posuere. Mauris tempus gravida</p>
                            </article>
                        </div>
                    </div>
                    <div class="row justify-content-center m-t-60">
                        <div class="col-auto">
                            <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">University of Cambridge</a>
                                    </h3>
                                    <span class="resume-company">Specialization Course</span>
                                    <span class="resume-timeline">Sep 2015 – Present</span>
                                </header>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa quis est hendrerit rutrum. Nunc tincidunt pellentesque accumsan. Fusce vel lobortis justo, quis sagittis sem. Nam eleifend aliquet malesuada.
                                </p>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">University of Cambridge</a>
                                    </h3>
                                    <span class="resume-company">Specialization Course</span>
                                    <span class="resume-timeline">May 2014 – Aug 2015</span>
                                </header>
                                <p class="card-text">Maecenas eget lacinia leo. Curabitur non pretium lectus. Nullam sem augue, lacinia in dui a, pulvinar sagittis magna. Phasellus non accumsan ligula, a blandit nisi. Phasellus sed congue risus. Ut scelerisque laoreet
                                    tortor a ullamcorper
                                </p>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article class="card-secondary card-resume">
                                <header class="card-header">
                                    <h3 class="resume-title">
                                        <a href="#">University of Cambridge</a>
                                    </h3>
                                    <span class="resume-company">Specialization Course</span>
                                    <span class="resume-timeline">Sep 2009 – Oct 2013</span>
                                </header>
                                <p class="card-text">Donec ultrices finibus ipsum, quis gravida libero vulputate ac. Sed tristique, lectus ut efficitur facilisis, orci ex elementum elit, et feugiat massa libero nec lacus. In pharetra justo vel nulla ornare, non condimentum
                                    diam euismod
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="row justify-content-center m-t-60">
                        <div class="col-auto">
                            <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <div class="row">
                        <div class="col-lg-6 js-waypoint">
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">UI/UX Design</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="80">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">Photography</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="90">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">HTML5/CSS3</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="85">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 js-waypoint">
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">WordPress</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="80">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">Copywriter</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="90">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="au-progress-box">
                                <h4 class="au-progress-box-title">SEO Marketing</h4>
                                <div class="au-progress">
                                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="95">
                                        <span class="value"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center m-t-60">
                        <div class="col-auto">
                            <a class="au-btn au-btn-pill" href="#">DOWNLOAD CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section resume-->

<!-- section projects-->
<section class="section section-projects bg-dark-1 p-t-110 p-b-90" id="projects">
    <div class="container-fluid">
        <div class="section-inner">
            <h3 class="section-heading section-heading-light m-b-50">Featured Projects</h3>
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <article class="card-primary card-project">
                        <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#project-post"></a>
                        <figure class="card-figure">
                            <img class="project-image img-fluid" src="images/project-01.jpg" alt="Brand &amp; Strategy Contents" />
                        </figure>
                        <header class="card-header">
                            <h3 class="project-title">Brand &amp; Strategy Contents</h3>
                            <ul class="project-subjects">
                                <li>
                                    <a href="#">DESIGN</a>
                                </li>
                                <li>
                                    <a href="#">MARKETING</a>
                                </li>
                            </ul>
                        </header>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                    <article class="card-primary card-project">
                        <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#project-post"></a>
                        <figure class="card-figure">
                            <img class="project-image img-fluid" src="images/project-02.jpg" alt="Brand &amp; Strategy Contents" />
                        </figure>
                        <header class="card-header">
                            <h3 class="project-title">Brand &amp; Strategy Contents</h3>
                            <ul class="project-subjects">
                                <li>
                                    <a href="#">DESIGN</a>
                                </li>
                                <li>
                                    <a href="#">MARKETING</a>
                                </li>
                            </ul>
                        </header>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <article class="card-primary card-project">
                        <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#project-post"></a>
                        <figure class="card-figure">
                            <img class="project-image img-fluid" src="images/project-03.jpg" alt="Brand &amp; Strategy Contents" />
                        </figure>
                        <header class="card-header">
                            <h3 class="project-title">Brand &amp; Strategy Contents</h3>
                            <ul class="project-subjects">
                                <li>
                                    <a href="#">DESIGN</a>
                                </li>
                                <li>
                                    <a href="#">MARKETING</a>
                                </li>
                            </ul>
                        </header>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    <article class="card-primary card-project">
                        <a class="card-link-overlay" href="#" data-toggle="modal" data-target="#project-post"></a>
                        <figure class="card-figure">
                            <img class="project-image img-fluid" src="images/project-04.jpg" alt="Brand &amp; Strategy Contents" />
                        </figure>
                        <header class="card-header">
                            <h3 class="project-title">Brand &amp; Strategy Contents</h3>
                            <ul class="project-subjects">
                                <li>
                                    <a href="#">DESIGN</a>
                                </li>
                                <li>
                                    <a href="#">MARKETING</a>
                                </li>
                            </ul>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section projects-->

<!-- section statistic-->
<div class="section section-statistic bg-grey-1 p-t-150 p-b-120" id="statistic">
    <div class="container">
        <div class="section-inner">
            <ul class="list-reset row justify-content-center">
                <li class="col-md-3">
                    <div class="box box-number">
                        <span class="number counterUp">10</span>
                        <span class="title">YEARS OF EXPERIENCE</span>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="box box-number">
                        <span class="number counterUp">679</span>
                        <span class="title">PROJECT COMPLETED</span>
                    </div>
                </li>
                <li class="col-md-3">
                    <div class="box box-number">
                        <span class="number counterUp">12</span>
                        <span class="title">AWARDS</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end section statistic-->

<!-- section latest blog-->
<section class="section section-latest-blog bg-white p-t-110 p-b-100" id="blog">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-50">Blogs</h3>
            <ul class="list-reset js-slick row" data-slick-lg="1" data-slick-dots="true" data-slick-dotsClass="slick-dots dots-style-1">
                <li class="col">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-01.jpg" alt="How to Create a Split-Screen Slider With JavaScript
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 18, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-02.jpg" alt="New Short Course: Lightweight Carousels With John
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 10, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-03.jpg" alt="10 Remedial Design Pointers for Developers
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JUNE 29, 2017</span>
                                </footer>
                            </article>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-01.jpg" alt="How to Create a Split-Screen Slider With JavaScript
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 18, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-02.jpg" alt="New Short Course: Lightweight Carousels With John
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 10, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-03.jpg" alt="10 Remedial Design Pointers for Developers
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JUNE 29, 2017</span>
                                </footer>
                            </article>
                        </div>
                    </div>
                </li>
                <li class="col">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-01.jpg" alt="How to Create a Split-Screen Slider With JavaScript
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">How to Create a Split-Screen Slider With JavaScript
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Nam eget nulla sem. Duis tristique risus in condimentum consequat. Pellentesque cursus enim sit amet sem ornare tristique.</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 18, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-02.jpg" alt="New Short Course: Lightweight Carousels With John
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">New Short Course: Lightweight Carousels With John
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Pellentesque tristique mi ut condimentum dapibus. Nulla tortor risus, posuere interdum volutpat non, lacinia vitae magna tristique</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JULY 10, 2017</span>
                                </footer>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <article class="card-secondary card-blog">
                                <figure class="card-figure">
                                    <img class="blog-image img-fluid" src="images/blog-03.jpg" alt="10 Remedial Design Pointers for Developers
" />
                                    <a class="bg-overlay" href="#" data-toggle="modal" data-target="#blog-post"></a>
                                </figure>
                                <header class="card-header">
                                    <h3 class="blog-title">
                                        <a href="#" data-toggle="modal" data-target="#blog-post">10 Remedial Design Pointers for Developers
                                        </a>
                                    </h3>
                                </header>
                                <p class="card-text">Integer a ante fringilla, ultricies nunc a, bibendum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
                                <footer class="card-footer">
                                    <span class="blog-date">JUNE 29, 2017</span>
                                </footer>
                            </article>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end section blog-->

<!-- section testimonials-->
<section class="section section-testimonials bg-grey-1 p-t-110 p-b-50" id="testimonials">
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading m-b-10">Testimonials</h3>
            <ul class="list-reset js-slick js-slick-test section-content slick-arrow-style-1" data-slick-lg="1" data-slick-autoplay="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev lnr lnr-chevron-left' data-toggle='tooltip' title='Preview'&gt;&lt;/i&gt;"
                data-slick-nextarrow="&lt;i class='arrow arrow-next lnr lnr-chevron-right' data-toggle='tooltip' title='Next' &gt;&lt;/i&gt;" data-slick-loop="false">
                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.3s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis mauris posuere, rhoncus quam et, congue arcu. Sed mattis vulputate turpis sit amet elementum. Maecenas a lobortis sapien. Maecenas eget dolor laoreet, maximus quam id, auctor orci.
                        </p>
                    </div>
                    <div class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="images/avatar-03.jpg" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Cheryl Cruz</span>
                        <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">WEB DEVELOPER</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.3s">
                            Curabitur quis mauris posuere, rhoncus quam et, congue arcu. Sed mattis vulputate turpis sit amet elementum. Maecenas a lobortis sapien. Maecenas eget dolor laoreet, maximus quam id, auctor orci.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <div class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="images/avatar-02.jpg" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">John Doe</span>
                        <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">PROJECT MANAGER</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="box box-testimonials">
                    <div class="client-text">
                        <p data-animation="fadeInDown" data-animation-delay="0.3s">
                            Maecenas a lobortis sapien. Maecenas eget dolor laoreet, maximus quam id, auctor orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis mauris posuere, rhoncus quam et, congue arcu. Sed mattis vulputate turpis sit amet elementum.
                        </p>
                    </div>
                    <div class="client-avatar" data-animation="fadeIn" data-animation-delay="0.8s">
                        <img src="images/avatar-01.jpg" alt="Client">
                    </div>
                    <div class="client-info">
                        <span class="client-name" data-animation="fadeInDown" data-animation-delay="1.3s">Jacky</span>
                        <span class="client-title-job" data-animation="fadeInDown" data-animation-delay="1.3s">WEB DESIGNER</span>
                        <ul class="h-list social-list" data-animation="fadeInDown" data-animation-delay="1.4s">
                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end section testimonials-->

<!-- section partner-->
<div class="section section-partner bg-grey-1 p-t-80 p-b-110" id="partner">
    <div class="container-fluid">
        <div class="section-inner">
            <ul class="list-reset js-slick partner-list" data-slick-lg="5" data-slick-md="3" data-slick-sm="2" data-slick-xs="1" data-slick-autoplay="true">
                <li class="partner-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <a class="box box-partner" href="#" data-toggle="tooltip" title="Wooecommerce">
                        <img class="partner-image" src="images/icons/ic-partnership-01.png" alt="partner">
                    </a>
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
                    <a class="box box-partner" href="#" data-toggle="tooltip" title="WordPress">
                        <img class="partner-image" src="images/icons/ic-partnership-02.png" alt="partner">
                    </a>
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <a class="box box-partner" href="#" data-toggle="tooltip" title="Evanto">
                        <img class="partner-image" src="images/icons/ic-partnership-03.png" alt="partner">
                    </a>
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
                    <a class="box box-partner" href="#" data-toggle="tooltip" title="Bootstrap">
                        <img class="partner-image" src="images/icons/ic-partnership-04.png" alt="partner">
                    </a>
                </li>
                <li class="partner-item wow zoomIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <a class="box box-partner" href="#" data-toggle="tooltip" title="Jquery">
                        <img class="partner-image" src="images/icons/ic-partnership-05.png" alt="partner">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end section partner-->

<!-- section contact-->
<section class="section section-contact bg-parallax p-t-110 p-b-80" id="contact" style="background: url(images/bg-contact.jpg) center center no-repeat;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="section-inner">
            <h3 class="section-heading section-heading-light m-b-45">Contact Me</h3>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="messages" id="status"></div>
                    <form class="section-contact-form m-b-80" method="post" action="includes/contact-form.php" name="contact" id="contact-form" role="form" data-toggle="validator">
                        <div class="input-item form-group">
                            <label class="input-label">
                                <span>NAME*</span>
                                <span class="help-block with-errors"></span>
                            </label>
                            <input class="au-input" type="text" id="name" name="name" required data-error="Name is required.">
                        </div>
                        <div class="input-item form-group">
                            <label class="input-label">
                                <span>EMAIL*</span>
                                <span class="help-block with-errors"></span>
                            </label>
                            <input class="au-input" type="email" id="email" name="email" required data-error="Valid email is required.">
                        </div>
                        <div class="input-item form-group">
                            <label class="input-label">
                                <span>MESSAGE*</span>
                                <span class="help-block with-errors"></span>
                            </label>
                            <textarea class="au-input" id="msg" name="msg" style="height: 160px;" required data-error="Please, leave us a message."></textarea>
                        </div>
                        <div class="input-item text-center m-t-40">
                            <input class="au-btn au-btn-pill" type="submit" id="contactBtn" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row section-contact-info">
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-home"></i>
                            <span>Address</span>
                        </h3>
                        <p class="box-text">New York, NY 10018</p>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-volume-control-phone"></i>
                            <span>Lets Talk</span>
                        </h3>
                        <p class="box-text">222 389 8919</p>
                    </div>
                </div>
                <div class="col-md col-sm-12">
                    <div class="box box-contact-info">
                        <h3 class="box-title">
                            <i class="fa fa-envelope"></i>
                            <span>Email</span>
                        </h3>
                        <p class="box-text">contact@email.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact-->

<!-- footer-->
<footer class="section section-footer p-t-85 p-b-90" id="footer">
    <div class="container">
        <div class="section-inner">
            <ul class="h-list footer-social social-list">
                <li class="list-item" data-toggle="tooltip" title="Email">
                    <a class="fa fa-envelope" href="#"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Twitter">
                    <a class="fa fa-twitter" href="#"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Dribbble">
                    <a class="fa fa-dribbble" href="#"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Linkedin">
                    <a class="fa fa-linkedin" href="#"></a>
                </li>
                <li class="list-item" data-toggle="tooltip" title="Vimeo">
                    <a class="fa fa-vimeo" href="#"></a>
                </li>
            </ul>
            <p class="footer-text-intro">
                <span>Built with</span>
                <span class="fa fa-heart"></span>
                <span>in New York</span>
            </p>
            <p class="footer-copy-text">@ 2017 Designed by ThemeEggs.</p>
        </div>
    </div>
</footer>
<!-- end footer-->

<!-- section blog post-->
<section class="section-blog-post modal fade js-modal" id="blog-post" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader"></div>
        <div class="modal-content">
            <div class="section-inner modal-primary">
                <div class="container-fluid">
                    <div class="modal-header">
                        <div class="modal-header-logo">
                            <img src="images/icons/logo.png" alt="Ora">
                        </div>
                        <div class="modal-header-control">
                            <button class="btn-prev au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-left"></i>
                            </button>
                            <button class="btn-next au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-right"></i>
                            </button>
                            <button class="btn-close au-btn au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                <i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-11">
                            <div class="modal-body">
                                <article class="post-blog m-b-55">
                                    <header class="post-header">
                                        <h3 class="post-title">New Short Course: Lightweight Carousels With John</h3>
                                        <ul class="post-info h-list">
                                            <li class="post-info-item">
                                                    <span>BY
                                                        <a href="#">JOHN DOE</a>
                                                    </span>
                                            </li>
                                            <li class="post-info-item">
                                                <span>AUGUST 28, 2018</span>
                                            </li>
                                            <li class="post-info-item">
                                                    <span>
                                                        <a href="#">WEB DESIGN</a>
                                                    </span>
                                            </li>
                                            <li class="post-info-item">
                                                    <span>
                                                        <a href="#">3 COMMENTS</a>
                                                    </span>
                                            </li>
                                        </ul>
                                    </header>
                                    <figure class="post-image">
                                        <img class="img-fluid" src="images/blog-post-01.jpg" alt="New Short Course: Lightweight Carousels With John">
                                    </figure>
                                    <div class="post-body">
                                        <p class="post-paragraph">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget mi sem. Nulla facilisi. Sed ultricies eros a nibh tempus, in sodales mi vestibulum . Nullam quis dui ac nisl ultrices euismod et sit amet urna. Morbi semper sapien quis ex tempor, sit
                                            amet scelerisque eros rhoncus. Cras scelerisque auctor gravida. Nunc fermentum luctus rhoncus. Nulla vulputate fermentum convallis. In quis pellentesque tortor. Cras metus nibh, gravida vitae ante vel, finibus
                                            semper tellus. Nulla vel tincidunt magna. Morbi tempor velit lectus, eu commodo quam volutpat vitae.
                                        </p>
                                        <blockquote class="post-quote">
                                            <p class="quote-text">Cras nec odio facilisis, suscipit sem sit amet, tincidunt turpis. Praesent diam eros, consectetur ac viverra vitae, imperdiet ut est.</p>
                                            <span class="quote-sign">JOHN SMITH, ENVATO</span>
                                        </blockquote>
                                        <p class="post-paragraph">
                                            Nulla feugiat nulla mi, a aliquam arcu condimentum in. Cras pulvinar ac odio quis efficitur. Pellentesque commodo sapien ac arcu ultrices dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur eu
                                            arcu at sem lobortis rhoncus sed at dolor.
                                        </p>
                                    </div>
                                    <footer class="post-footer">
                                        <div class="flex-bar align-items-start justify-content-lg-between m-b-40">
                                            <ul class="post-tags h-list">
                                                <li class="post-tag-item">
                                                    <a href="#">WEBSITE</a>
                                                </li>
                                                <li class="post-tag-item">
                                                    <a href="#">ONEPAGE</a>
                                                </li>
                                                <li class="post-tag-item">
                                                    <a href="#">PROFESIONAL</a>
                                                </li>
                                            </ul>
                                            <div class="post-socials">
                                                <span class="post-social-label">SHARE</span>
                                                <ul class="h-list social-list">
                                                    <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                        <a class="fa fa-facebook" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                        <a class="fa fa-twitter" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                        <a class="fa fa-google-plus" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                        <a class="fa fa-linkedin" href="#"></a>
                                                    </li>
                                                    <li class="list-item" data-toggle="tooltip" title="Other">
                                                        <a class="fa fa-plus" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="post-author">
                                            <div class="post-author-image">
                                                <a href="#">
                                                    <img src="images/avatar-04.jpg" alt="John Doe">
                                                </a>
                                            </div>
                                            <div class="post-author-text">
                                                <a class="post-author-name" href="#">Tammy Ramos</a>
                                                <p class="post-author-paragraph">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin est nec ex vestibulum, vitae imperdiet justo malesuada. Donec quam augue, tempus sed tempor quis, rutrum sit amet
                                                </p>
                                            </div>
                                        </div>
                                    </footer>
                                </article>
                                <div class="comment-pane m-b-45">
                                    <div class="comment-pane-header">
                                        <h3 class="comment-pane-title">3 COMMENTS</h3>
                                    </div>
                                    <div class="comment-pane-body">
                                        <ul class="comment-pane-list">
                                            <li class="list-item has-comment-children">
                                                <div class="comment-item">
                                                    <div class="comment-author-avatar">
                                                        <a href="#">
                                                            <img src="images/avatar-05.jpg" alt="Arthur Reyes">
                                                        </a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="comment-paragraph">
                                                            Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                                        </p>
                                                        <div class="comment-info">
                                                            <a href="#">ARTHUR REYES &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                            <a class="comment-reply" href="#">
                                                                <i class="fa fa-share"></i>REPLY</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="comment-pane-list-children">
                                                    <li class="list-item">
                                                        <div class="comment-item">
                                                            <div class="comment-author-avatar">
                                                                <a href="#">
                                                                    <img src="images/avatar-06.jpg" alt="Arthur Reyes">
                                                                </a>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p class="comment-paragraph">Nullam ipsum urna, dapibus sed justo sed, imperdiet malesuada commodo</p>
                                                                <div class="comment-info">
                                                                    <a href="#">SHIRLEY CAMPBELL &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                                    <a class="comment-reply" href="#">
                                                                        <i class="fa fa-share"></i>REPLY</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-item has-comment-children">
                                                <div class="comment-item">
                                                    <div class="comment-author-avatar">
                                                        <a href="#">
                                                            <img src="images/avatar-07.jpg" alt="Arthur Reyes">
                                                        </a>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p class="comment-paragraph">
                                                            Donec sollicitudin nisi sed eros elementum, non vestibulum quam convallis. Curabitur bibendum magna at nisl hendrerit, et tempus metus facilisis. Praesent augue tellus, euismod id posuere eget, gravida id dolor
                                                        </p>
                                                        <div class="comment-info">
                                                            <a href="#">SARA ELLIS &nbsp;</a>- JUNE 25, 2018 &nbsp;
                                                            <a class="comment-reply" href="#">
                                                                <i class="fa fa-share"></i>REPLY</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="leave-comment-pane">
                                    <div class="leave-comment-pane-header">
                                        <h3 class="leave-comment-pane-title">LEAVE A COMMENT</h3>
                                        <p class="leave-comment-pane-notify">You must be logged in to post a comment.</p>
                                    </div>
                                    <div class="leave-comment-pane-body">
                                        <form class="leave-comment-pane-form">
                                            <div class="form-group input-item">
                                                <textarea class="au-input" placeholder="COMMENT..."></textarea>
                                            </div>
                                            <div class="row no-gutters form-row">
                                                <div class="col-lg-4 input-item form-group">
                                                    <input class="au-input" type="text" placeholder="NAME*">
                                                </div>
                                                <div class="col-lg-4 input-item form-group">
                                                    <input class="au-input" type="text" placeholder="EMAIL*">
                                                </div>
                                                <div class="col-lg-4 input-item form-group">
                                                    <input class="au-input" type="text" placeholder="WEBSITE*">
                                                </div>
                                            </div>
                                            <div class="input-submit">
                                                <input class="au-btn au-btn-pill" type="submit" value="POST COMMENT">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section blog post-->

<!-- section project post-->
<section class="section-project-post modal fade js-modal" id="project-post" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader"></div>
        <div class="modal-content">
            <div class="section-inner modal-primary">
                <div class="container-fluid">
                    <div class="modal-header">
                        <div class="modal-header-logo">
                            <img src="images/icons/logo.png" alt="Ora">
                        </div>
                        <div class="modal-header-control">
                            <button class="btn-prev au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-left"></i>
                            </button>
                            <button class="btn-next au-btn au-btn-circle" type="button">
                                <i class="lnr lnr-chevron-right"></i>
                            </button>
                            <button class="btn-close au-btn au-btn-circle" type="button" data-dismiss="modal" aria-label="Close">
                                <i class="lnr lnr-cross"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-lg-9">
                            <div class="modal-body">
                                <article class="post-project m-b-55">
                                    <header class="post-header">
                                        <h3 class="post-title">Brand & Strategy Contents</h3>
                                    </header>
                                    <div class="row no-gutters">
                                        <div class="col col-figure">
                                            <figure class="post-image">
                                                <div class="js-slick slick-arrow-style-2" data-slick-lg="1" data-slick-dots="true" data-slick-arrows="true" data-slick-prevarrow="&lt;i class='arrow arrow-prev arrow_carrot-left'&gt;&lt;/i&gt;" data-slick-nextarrow="&lt;i class='arrow arrow-next arrow_carrot-right'&gt;&lt;/i&gt;"
                                                     data-slick-dotsclass="slick-dots-2">
                                                    <div class="project-image-item">
                                                        <img class="img-fluid" src="images/project-post-01.jpg" alt="Featured Details">
                                                    </div>
                                                    <div class="project-image-item">
                                                        <img class="img-fluid" src="images/project-post-02.jpg" alt="Featured Details">
                                                    </div>
                                                    <div class="project-image-item">
                                                        <img class="img-fluid" src="images/project-post-03.jpg" alt="Featured Details">
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="col col-aside">
                                            <aside class="project-aside">
                                                <div class="project-aside-inner">
                                                    <div class="project-aside-block m-b-30">
                                                        <h4 class="project-aside-title m-b-15">PROJECT DESCRIPTION</h4>
                                                        <p class="project-aside-paragraph">Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat. Fusce fermentum tellus non magna</p>
                                                    </div>
                                                    <div class="project-aside-block m-b-45">
                                                        <h4 class="project-aside-title m-b-20">PROJECT DESCRIPTION</h4>
                                                        <ul class="project-aside-list">
                                                            <li>
                                                                <span class="t-left">Website:</span>
                                                                <a class="t-right" href="#">Visit Site</a>
                                                            </li>
                                                            <li>
                                                                <span class="t-left">Categories:</span>
                                                                <span class="t-right cate-link">
                                                                        <a href="#">Website &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Branding &nbsp;</a>
                                                                        <span>, &nbsp;</span>
                                                                        <a href="#">Digital &nbsp;</a>
                                                                    </span>
                                                            </li>
                                                            <li>
                                                                <span class="t-left">Date:</span>
                                                                <span class="t-right">10/2018</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="project-aside-block">
                                                        <h4 class="project-aside-title project-aside-title-sm m-b-20">SHARE</h4>
                                                        <ul class="h-list social-list">
                                                            <li class="list-item" data-toggle="tooltip" title="Facebook">
                                                                <a class="fa fa-facebook" href="#"></a>
                                                            </li>
                                                            <li class="list-item" data-toggle="tooltip" title="Twitter">
                                                                <a class="fa fa-twitter" href="#"></a>
                                                            </li>
                                                            <li class="list-item" data-toggle="tooltip" title="Google Plus">
                                                                <a class="fa fa-google-plus" href="#"></a>
                                                            </li>
                                                            <li class="list-item" data-toggle="tooltip" title="Linkedin">
                                                                <a class="fa fa-linkedin" href="#"></a>
                                                            </li>
                                                            <li class="list-item" data-toggle="tooltip" title="Other">
                                                                <a class="fa fa-plus" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section project post-->

<div id="up-to-top">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/popper.js/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/slick/slick.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="vendor/wowjs/wow.min.js"></script>
<script src="vendor/validator/validator.min.js"></script>
<script src="js/config-contact.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body>

</html>
<!-- end document-->