<!DOCTYPE html>
<html lang="en">
<head>
    <title>NGO Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    require('config.php');
    $fetchTest = getAllTest();
?>

<!-- Navbar Start -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NGO Portal</a>
        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Cover Start -->
<div class="container-fluid">
    <div id="myCarousel" class="carousel fade" data-ride="carousel" data-interval="3000">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/forest.jpg" alt="Los Angeles" style="width:100%;">
            </div>
            <div class="item">
                <img src="img/mountain.jpg" alt="Chicago" style="width:100%;">
            </div>
            <div class="item">
                <img src="img/nature.jpg" alt="New York" style="width:100%;">
            </div>
        </div>

    </div>
</div>
<!-- Cover End -->


<!-- Our Mission Start -->
<div id="mission" class="mission">
    <div class="container">
        <div class="row">
            <h2>Our Mission</h2>
            <p>Helping the enlisted NGOs and makes it available to people who are interested in the cause.</p>
        </div>
    </div>
</div>
<!-- Our Mission End -->


<!-- Team Intro Start -->
<div id="myTeam" class="team">
    <div class="container">
        <div class="row">
            <h2>Meet our Team</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="col-lg-3 col-md-3">
                <img src="img/0.jpg" class="img-circle" alt="akshay">
                <h4>Akshay Gupta</h4>
                <b>Developer</b>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a><i class="fa fa-linkedin" style="font-size:24px"></i></a>
            </div>
            <div class="col-lg-3 col-md-3">
                <img src="img/0.jpg" class="img-circle" alt="akshay">
                <h4>Akshay Gupta</h4>
                <b>Developer</b>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a><i class="fa fa-linkedin" style="font-size:24px"></i></a>
            </div>
            <div class="col-lg-3 col-md-3">
                <img src="img/0.jpg" class="img-circle" alt="akshay">
                <h4>Akshay Gupta</h4>
                <b>Developer</b>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a><i class="fa fa-linkedin" style="font-size:24px"></i></a>
            </div>
            <div class="col-lg-3 col-md-3">
                <img src="img/0.jpg" class="img-circle" alt="akshay">
                <h4>Akshay Gupta</h4>
                <b>Developer</b>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a><i class="fa fa-linkedin" style="font-size:24px"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Team Intro End -->


<!-- Testimonial Start-->
<div class="container-fluid">
    <div id="testimonial" class="carousel slide" data-ride="carousel">
        <div class="transparent">

            <!-- Header -->
            <div class="testimonial_header">
                <h2>Testimonials</h2>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial" data-slide-to="1"></li>
                <li data-target="#testimonial" data-slide-to="2"></li>
                <li data-target="#testimonial" data-slide-to="3"></li>
                <li data-target="#testimonial" data-slide-to="4"></li>
            </ol>

            <!-- Wrapping Slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="testimonial_slide">
                        <?php echo '<p>'.$fetchTest[0]['test'].'</p>' ?>
                        <h4>Rayn Tenon</h4>
                    </div>
                </div>
                <?php for ($x = 1; $x < 5; $x++) {
                    echo '<div class="item">';
                    echo '<div class="testimonial_slide">';
                    echo '<p>'.$fetchTest[$x]['test'].'</p>';
                    echo '<h4>SHenon</h4>';
                    echo '</div>';
                    echo '</div>';
                }?>
            </div>

            <!-- Left and Right Controls -->
            <a class="left carousel-control" href="#testimonial" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonial" role="button"  data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</div>
<!-- Testimonial End-->

<!--Footer Start-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h6>Copyright &copy; 2018 Akshay Gupta</h6>
            </div>
            <div class="col-sm-4">
                <h6>About Us</h6>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,
                    and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
            </div>
            <div class="col-sm-2">
                <h6>Navigation</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h6>Follow Us</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h6>Coding with <span class="glyphicon glyphicon-heart"></span> by Akshay</h6>
            </div>
        </div>
    </div>
</footer>
<!--Footer Ends-->

</body>
</html>
