<html>
<head>
    <title>NGO Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<?php
    require('config.php');

    if(!empty($_POST)){

        $DonationType = $_POST['donationType'];
        $NGOName = $_POST['NGOList'];                               #will be replaced by NGOuniqueID

        $makeDonation = makeDonation($DonationType, $NGOName);

        if($makeDonation){
            header('Location: http://localhost/project/thankyou.php');
        }
    }

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

<div id="donation" class="container">
    <div class="well">
        <h2 class="text-center">Donate</h2>
        <hr>
        <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label class="control-label col-sm-3" for="firstName">First Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="firstName" placeholder="?" name="firstName" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="lastName">Last Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lastName" placeholder="?" name="lastName" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="email">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" placeholder="?" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3" for="phone">Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="phone" placeholder="?" name="phone" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Listed NGO's</label>
                <div class="col-sm-7">
                    <select class="form-control" name="NGOList">
                        <option>Select one ...</option>
                        <option value="ngo1">NGO 1</option>
                        <option value="ngo2">NGO 2</option>
                        <option value="ngo3">NGO 3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Donation Type</label>
                <div class="col-sm-7">
                    <select class="form-control" name="donationType">
                        <option>Select one ...</option>
                        <option value="goodies">Goodies</option>
                        <option value="time">Time</option>
                        <option value="money">Money</option>
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>