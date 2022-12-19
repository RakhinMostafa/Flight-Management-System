<?php
// Start the session
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: customersignin.html");
    exit();
}
?>


<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <title>Shopping cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="forcompany.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="AdminSignin.css">
    <script src="login.js"> </script>
    <script src="billingSelect.js"> </script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:rgb(185, 75, 11);">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li id="cart">
                        <a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>


                    <li class="dropdown" id="new">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in&nbsp;</span><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="signup.html">Register</a></li>

                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Sign in</a>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="customersignin.html">Customer Sign in</a></li>
                            </li>


                        </ul>
                    </li>

                </ul>
                </li>
                <li class="dropdown" id="old">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user" id="wuser">Welcom!</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li><a href="showhistory.php">History</a></li>
                        <li><a href="#" id="logout">Sign out</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center" style="background-color:rgb(247, 177, 48);">
        <h1>Supra Flight</h1>
        <p>Come Fly with Us</p>
    </div>





    <div class="container" id="homepage">
        <h1><b>Payment</b></h1>
        <br />
        <p><b>Choose your Option</b></p>
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button id="button1" type="button" href="#Card" class="btn btn-primary">Card Payment</button>
            </div>
            <div class="btn-group">
                <button id="button2" type="button" href="#Cash" class="btn btn-primary">Cash Payment</button>
            </div>
        </div>
        <hr />

        <div id="card">
            <form role="form" action="cardPaymentCheck.php" method="post">

                <div class="row">
                    <div class="col-sm-6">
                        <label for="from">Account Number:</label>
                        <input type="text" class="form-control" name="AccountNumber" placeholder="Account" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="from">Promo Code:</label>
                        <input type="text" class="form-control" name="promoCode" placeholder="if any">
                    </div>
                </div>
                <hr>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="btn-group">
                        <button type="reset" class="btn btn-info" value="Reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="cash">
            <form role="form" action="cashPaymentCheck.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="from">Promo Code:</label>
                        <input type="text" class="form-control" name="promoCode" placeholder="if any">
                    </div>
                </div>
                <hr>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="btn-group">
                        <button type="reset" class="btn btn-info" value="Reset">Reset</button>
                    </div>
                </div>
            </form>

        </div>

    </div>









    <footer class="container-fluid text-center"  style="background-color:rgb(247, 177, 48);">
        <a href="#signUpPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Supra Flight</p>
    </footer>


</body>

</html>