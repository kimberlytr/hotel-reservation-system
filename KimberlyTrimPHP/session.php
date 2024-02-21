<?php
require ('database.php');
$Room_name = $_POST['room'];

$queryCart =  'Select Price FROM room_categories WHERE Room_name = :room_name';
$statementCart = $db -> prepare($queryCart);
$statementCart -> bindValue(':room_name', $Room_name);
$statementCart -> execute();
$price = $statementCart -> fetch();
$statementCart -> closeCursor();
$lifetime = 60 * 60 * 24 * 30;

session_set_cookie_params($lifetime, '/');
session_start();

$_SESSION['book'] = array('room' =>$Room_name, 'numberofroom' => $_POST['NumberOfRoom'], 'price' => $price['0'], 'check_in' => $_POST['check_in_date'], 'check_out' => $_POST['check_out_date'], 'title' => $_POST['title'], 'first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'], 'adult' => $_POST['adult'], 'child' => $_POST['child'], 'comment' => $_POST['comment']);
$_SESSION['address'] = array('title' => $_POST['title'], 'first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'], 'street' => $_POST['street'], 'city' => $_POST['city'],'state' => $_POST['state']);
if ( $_SESSION['book']['child'] == ''){$_SESSION['book']['child'] = 0;}

function add_tax($roomPrice){
    $tax = $roomPrice * 0.06;
    return $tax;
}
function total($roomPrice){
    $total = $roomPrice * 1.06;
    return $total;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>backup</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="stylesheet" href="css/confirm.css">
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
</div>
<hr class="hr_1">
<div class="top_nav">
    <div><a class="nav_rooms" href="Room.php">Rooms</a></div>
    <div><a class="nav_dinning" href="Dining.php">Dining</a></div>
    <div><a class="nav_facilities" href="FacilitiesandService.php">Service</a></div>
    <div><a class="nav_location" href="Location.php">Location</a></div>
</div>

<h1>Your Room</h1>
<?php if (empty($_SESSION['book']) || count($_SESSION['book']) == 0) : ?>
    <p>There are no rooms in cart.</p>
<?php else: ?>
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
            <div id="submit"><a href="submit.php">Confirm</a></div>
            <p><a id="empty" href="emptyCart.php">Empty Cart</a></p>
        </div>
        <div id="center">
            <p><em><?php echo $_SESSION['book']['title'] ?> <?php echo $_SESSION['book']['first_name'] ?> <?php echo $_SESSION['book']['last_name']; ?></em></p>
            <p><em><?php echo $_SESSION['book']['room']; ?></em></p>
            <p><em><?php echo $_SESSION['book']['numberofroom']?></em></p>
            <p><em><?php echo $_SESSION['book']['check_in']; ?></em></p>
            <p><em><?php echo $_SESSION['book']['check_out']; ?></em></p>
            <p><em><?php echo $_SESSION['book']['adult']; ?></em></p>
            <p><em><?php echo $_SESSION['book']['child']; ?></em></p>
            <p><em><?php echo $_SESSION['address']['street']?>, <?php echo $_SESSION['address']['city']?>, <?php echo $_SESSION['address']['state']?></em></p>
            <p><em><?php echo $_SESSION['book']['comment']; ?></em></p>
            </div>
    </div>
    <div id="right">
        <p><img src="https://img.icons8.com/external-inipagistudio-lineal-color-inipagistudio/2x/external-invoice-online-bazaar-inipagistudio-lineal-color-inipagistudio.png"  <?php echo $_SESSION['book']['room']; ?>.jpg alt="Room Cost Summary"></p>
        <p><em>Price: &nbsp&nbsp&nbsp$<?php echo ($_SESSION['book']['price'] * $_SESSION['book']['numberofroom']); ?></em></p>
        <p><em>Tax: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$<?php echo add_tax($_SESSION['book']['price'] * $_SESSION['book']['numberofroom']); ?></em></p>
        <hr>
        <p><em>Total: &nbsp&nbsp&nbsp$<?php echo total($_SESSION['book']['price'] * $_SESSION['book']['numberofroom']); ?></em></p>
    </div>
<?php endif; ?>

<hr class="hr_1">
<div class="foot">
    <div class="legal">
        <a href="ServiceDescription.php">Service Description</a><br>
        <a href="PrivacyPolicy.php">Privacy Policy</a><br>
        <a href="RefundPolicy.php">Refund Policy</a><br>
    </div>
</div>
</body>
</html>

