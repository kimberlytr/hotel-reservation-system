<?php
require ('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>backup</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="stylesheet" type="text/css" href= "css/Thankyou.css">

</head>
<body>
<div class="main_logo">
    <div>
        <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    </div>
    <div id="hotel_name"><em>
            KT Plaza Hotel
        </em>
    </div>
    <div>
        <p id="in"> Thank you for choosing to stay with us! Your confirmation details are below.</p>
<p><?php $_SESSION['address']['title']; ?> <?php $_SESSION['address']['first_name']; ?> <?php $_SESSION['address']['last_name']; ?></p>
<p id="in"></p>    
    </>
</div>


<div id="border">
    <div id="left">
        <p><em>Name: </em></p>
        <p><em>Room: </em></p>
        <p><em>Number of Room: </em></p>
        <p><em>Check In Date: </em></p>
        <p><em>Check Out Date: </em></p>
        <p><em>Number of Adult: </em></p>
        <p><em>Number of child: </em></p>
        <p><em>Address: </em></p>
        <p><em>Comment: </em></p>
    </div>
    <div id="center">
        <p><em><?php echo $_SESSION['book']['title'] ?> <?php echo $_SESSION['book']['first_name'] ?> <?php echo $_SESSION['book']['last_name']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['room']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['numberofroom']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['check_in']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['check_out']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['adult']; ?></em></p>
        <p><em><?php echo $_SESSION['book']['child']; ?></em></p>
        <p><em><?php echo $_SESSION['address']['street']?>, <?php echo $_SESSION['address']['city']?>, <?php echo $_SESSION['address']['state']?></em></p>
        <p><em><?php echo $_SESSION['book']['comment']; ?></em></p>
    </div>
</div>


<hr class="hr_1">
<div class="foot">
    <div class="contact">
    <Strong>Contact Us</Strong><br><br>
            Address: &nbsp&nbsp&nbsp&nbsp&nbspKimberly's Hilton Plaza<br>
            Telephone: &nbsp&nbsp (973)243-2121<br><br>
            Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspcontactus@theplazahotel.com<br>
    </div>
    <div class="legal">
        <a href="ServiceDescription.php">Service Description</a><br>
        <a href="PrivacyPolicy.php">Privacy Policy</a><br>
        <a href="RefundPolicy.php">Refund Policy</a><br>
    </div>
    <div class="payment_logo">
        <img id="visa" src="images/visa.svg" alt="Visa">
        <img id="master" src="images/master.svg" alt="Master">
    </div>
</div>
</body>
</html>
