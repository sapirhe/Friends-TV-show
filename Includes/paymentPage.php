<?php
$server_name="localhost";
$user_name="nitzanda";
$password="S4I_w3&bK)yF";
$database_name="nitzanda_FriendsProducts";

$conn=new mysqli($server_name,$user_name,$password,$database_name);

if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);}

$product_name=$_POST['product_name'];
$price=$_POST['price'];
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];	

$sql="insert into purchase(product_name,price,full_name,email,address,city,state,zip) values ('".$product_name."','".$price."','".$full_name."','".$email."','".$address."','".$city."','".$state."','".$zip."')";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Friends</title>
        <link rel="stylesheet" type="text/css" href="../CSS/messageStyle.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <header>
            <img class="center img_header" src="../Images/friends_logo.jpg" height="30%" width="50%">

            <nav class="navbar navbar-expand-lg">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav center nav-top nav_lines">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="theShowPage.html"><b>The Show</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalogPage.html"><b>Catalog</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Not realized"><b>NBC</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="Not realized"><b>Contact us</b></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>


        <main>
            <div>
                <div class="messagebox center">
                    <?php
                    if ($conn->query($sql) === TRUE) {

                        echo "<img class='center' src='../Images/success.jpg'>";
                        echo " <h1 class='messageText'>"."Congrats!"." </h1> "."<h5 class='messageText'>"."Order complete and payment recived."."</h5>"; ?>

                    <br><a class="btnWrapper" href='../index.html'><button class='btn1'>Accept</button></a><br>

                    <?php
                    }
                    else {
                        echo "<img class='center' src='../Images/error.jpg'>";
                        echo " <h1 class='messageText'>"."Error!"." </h1> "."<h5 class='messageText'>"."Something went worng"."</h5>";
                    ?> 

                    <br><a class="btnWrapper" href="paymentPage.html"><button class="btn1">Try Again </button>
                    </a> <br>
                    <?php
                    }

                    $conn->close();
                    ?><br>

                </div>
            </div>
        </main>
        <footer>
            <p class="footerp">© Maya Greenbaum, Sapir Hen & Nitzan Dagan </p>
            <div class="links">
                <a href="https://www.instagram.com/friends/"><img border="0" alt="https://www.facebook.com/friends.tv/" src="../Images/instagram.jpg" width="30" height="30"></a>
                <a href="https://www.facebook.com/friends.tv/"><img border="0" alt="https://www.facebook.com/friends.tv/" src="../Images/facebook.jpg" width="41" height="35"></a>
            </div>


        </footer>
    </body>
</html>