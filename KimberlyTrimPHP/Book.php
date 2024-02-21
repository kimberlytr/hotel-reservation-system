<?php
$today = date("Y-m-d");

@$check_in = $_POST['check_in_date'];
@$check_out = $_POST['check_out_date'];
@$adult = $_POST['adult'];
@$child = $_POST['child'];
@$room = $_POST['room'];
@$roomNumber = $_POST['roomNumber'];

$lifetime = 60 * 60 * 24 * 30;
session_set_cookie_params($lifetime, '/');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="stylesheet" type="text/css" href="css/Booking.css">
</head>
<body>
<div class="main_logo">
    <div id="hotel_name"><em>
            KT Plaza Hotel
        </em>
    </div>
    <div id="top">
        <a class="Book_Now_Top" href="Room.php"> &nbspBook Now</a>
    </div>
</div>
<hr class="hr_1">
<div class="top_nav">
    <div><a class="nav_rooms" href="Room.php">Rooms</a></div>
    <div><a class="nav_dinning" href="Dining.php">Dining</a></div>
    <div><a class="nav_facilities" href="FacilitiesandService.php">Service</a></div>
    <div><a class="nav_location" href="Location.php">Location</a></div>
</div>

<div id="left">
    <form action="session.php" method="post">
        <p>Room Details</p><br>
        <label>Room</label><br>
        <input type="text" list="room" name="room" value="<?php echo $room; ?>" required><br><br>
        <label>Number of Room</label><br>
        <input type="number" list="number_1" name="NumberOfRoom" value="<?php echo $roomNumber; ?>" required><br><br>
        <label>Check In Date</label><br>
        <input type="date" name="check_in_date" value="<?php echo $check_in; ?>" min="<?php echo $today; ?>" required><br><br>
        <label>Check Out Date</label><br>
        <input type="date" name="check_out_date" value="<?php echo $check_out; ?>" min="<?php echo $today; ?>" required><br><br>
        <hr>
        <br>
        <p>Guest Details</p><br>
        <label>Title</label><br>
        <input type="search" list="title" name="title" required><br><br>
        <label>First Name</label><br>
        <input type="text" name="first_name" required><br><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name" required><br><br>
        <label>Phone Number</label><br>
        <input type="tel" name="phone" required><br><br>
        <label>Email</label><br>
        <input type="email" name="email" required><br><br>
        <hr>
        <br>
        <p>Address</p><br>
        <label>Street</label><br>
        <input type="text" name="street" required><br><br>
        <label>City</label><br>
        <input type="text" name="city" required><br><br>
        <label>State</label><br>
        <select name="state" required>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select><br><br>
        <hr>
        <br>
        <p>Guests</p><br>
        <label>Adult(s)</label><br>
        <input type="number" list="number_1" name="adult" min="1" max="4" value="<?php echo $adult; ?>" required><br><br>
        <label>Child(ren)</label><br>
        <input type="number" list="number_2" name="child" min="0" max="4" value="<?php echo $child; ?>"><br><br>
        <hr>
        <br>
        <p>Special Requests</p><br>
        <textarea rows="10" cols="70" name="comment" id="comment"></textarea><br>
        <input id="submit_booking" type="submit" value="Booking">
        <datalist id="number_1">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
        </datalist>
        <datalist id="number_2">
            <option value="0">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
        </datalist>
        <datalist id="room">
            <option value="SOHO ROOM">
            <option value="MANHATTAN ROOM">
            <option value="LIBERTY SUITE">
            <option value="BARCLAY SUITE">
            <option value="HUDSON ROOM">
            <option value="OCULUS SUITE">
        </datalist>
        <datalist id="title">
            <option value="Mr.">
            <option value="Ms.">
            <option value="Mrs.">
        </datalist>
        <datalist id="state">

        </datalist>
    </form>
</div>
    

</body>
</html>
