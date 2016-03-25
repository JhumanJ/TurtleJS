<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Turtle JS</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('css/style-home.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a>Menu</a>
        </li>
        <li>
            <a href="#top" onclick = $("#menu-close").click(); >Home</a>
        </li>
        <li>
            <a href="{{ url('/login') }}">Login</a>
        </li>
        <li>
            <a href="{{ url('/register') }}" >Register</a>
        </li>
        <li>
            <a href="#overview" onclick = $("#menu-close").click(); >Overview</a>
        </li>
        <li>
            <a href="#whyProgramming" >Why Programming?</a>
        </li>
        <li>
            <a href="#whyJS" >Why JavaScript?</a>
        </li>
        <li>
            <a href="#about" onclick = $("#menu-close").click(); >Team</a>
        </li>
        <li>
            <a href="#portfolio" onclick = $("#menu-close").click(); >The app</a>
        </li>
        <!-- <li>
            <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
        </li> -->
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="container">
        <img src="{!! asset('img/Home/index.png') !!}" class="center-block logo">
    </div>
    <div class="container text-center">
        <h1 class="white">TurtleJS</h1>
        <a href="{{ url('/login') }}" class="btn btn-dark btn-lg">Login</a>
        <a href="{{ url('/register') }}" class="btn btn-dark btn-lg">Register</a>
    </div>
</header>

<!--About-->

<section id="overview" class="about bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2>Overview</h2>
                <hr class="small">
                <p class="lead">Turtle JS is an online platform to teach kids between the age of
                    11 - 14 <strong class="ft-weight-500"> simple programming </strong>logic using the <strong class="ft-weight-500">Javascript</strong> language. After completing this tutorial the kids should have enough knowledge in computing to be able to understand and implement the <strong class="ft-weight-500">Bubblesort Sorting Algorithm</strong>. The teaching material will thus cover the basics of a programming language and be shown to the kids in the most interactive way possible.
                    The teaching material was made from scratch by our team members and follows the story of Loid the tortoise racing against his vicious friend Paul the Hare. Each video is an exercise in the form of a story. The goal is to make the exercise as appealing as possible for the kids by giving a purpose to each exercise: help the tortoise win the race.
                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section id="whyProgramming" class="bg-green" >

    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    </br>
                    <h2>Why programming ?</h2>
                    <img src="{!! asset('img/Home/steve.jpg') !!}" class="img-circle img-responsive center-block" >
                    <div class="lead">
                        <blockquote>
                            <p>”Everybody in this country should learn to program a computer… because it teaches you how to think".</p>
                            <footer class="noPad author">Steve Jobs</footer>
                        </blockquote>
                        <p> Nowadays, the whole world depends on <strong class="ft-weight-500">computers</strong>, and none of us knows how to read or write code !
                        So here and now, with Turtle JS, you are launching yourself into a great adventure where you are going to discover a new world.
                        This world is the programming world. There, you will learn how to <strong class="ft-weight-500">make your ideas come to life</strong>, solve real problems, the only limit is your imagination. </p>
                    </div>
                </div>
            </div>
    </div>

</section>


<section id="whyJS" class="about bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 lead text-center">
                <h1>Why JavaScript ?</h1>
                <p>To communicate with your computer, you will use a programming language called JavaScript.</p><p> It is the easiest way for you to dive into programming without getting confused.</p><p> Straightforward and widely used, this is your entry ticket to your new life. </p>
                <a href="https://www.javascript.com/" class="vertBleu">Visit JavaScript Official Page</a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="about" class="services bg-blue">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Our Team</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <img src="{!! asset('img/Home/kristelle.png') !!}" class="img-circle img-responsive center-block" >
                                </span>
                            <h4>
                                <strong>Kristelle Feghali</strong>
                            </h4>
                            <p>I started learning programming this year at UCL. Before that, I had no experience in the field and decided to study Computer Science based on what I heard of the subject, but I have found myself to really love it and enjoy it.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <img src="{!! asset('img/Home/aouss.png') !!}" class="img-circle img-responsive center-block" >
                            </span>
                            <h4>
                                <strong>Aouss Sbai</strong>
                            </h4>
                            <p>Hi ! I am Aouss Sbai and have been coding for 1 year. I am studying computer science because I am fascinated by technology and would like to launch my own startup company when I am older.
                                I am very happy to have started studying this great subject. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                              <img src="{!! asset('img/Home/julien.png') !!}" class="img-circle img-responsive center-block" >
                            </span>
                            <h4>
                                <strong>Julien Nahum</strong>
                            </h4>
                            <p>I learnt to code about a year ago, while I was working in a start up in Paris. I came to UCL to improve my computing knowledge! I love coding because it allows you to create whatever you can imagine, and see the results quickly! </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <img src="{!! asset('img/Home/romain.png') !!}" class="img-circle img-responsive center-block" >
                            </span>
                            <h4>
                                <strong>Romain Dumon</strong>
                            </h4>
                            <p>My name is Romain Dumon and I have only been coding for a year now. So far, what I love about programming is the logic and thought process that goes behind a computer program. Before university, I was interested by maths and the natural sciences.</p>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Callout -->
<aside class="callout">
    <div class="text-vertical-center">
        <h1>Learn By Doing</h1>
    </div>
</aside>

<!-- Portfolio -->
<section id="portfolio" class="portfolio bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Our Work</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{!! asset('img/Home/portfolio-1.jpg') !!}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{!! asset('img/Home/portfolio-2.jpg') !!}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{!! asset('img/Home/portfolio-3.jpg') !!}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{!! asset('img/Home/portfolio-4.jpg') !!}">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <hr class="small">
                <p class="text-muted">Copyright &copy; TurtleJS 2016</p>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>

</html>
