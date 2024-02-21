<?php
$today = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KTRIM Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/Head_Foot.css">
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" type="text/css" href="css/Main.css">
    <script>
        var curIndex = 0;
        var timeInterval = 3000;
        var arr = new Array();
        arr[0] = "https://www.fourseasons.com/alt/img-opt/~80.1860.0,0000-0,1936-1599,6558-899,8064/publish/content/dam/fourseasons/images/web/NYD/NYD_298_aspect16x9.jpg";
        arr[1] = "https://www.fourseasons.com/alt/img-opt/~80.1860.0,0000-111,5000-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/NYD/NYD_294_original.jpg";
        arr[2] = "https://www.fourseasons.com/alt/img-opt/~80.1860.0,0000-213,6813-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/NYD/NYD_1231_original.jpg";
        setInterval(changeImg, timeInterval)
        function changeImg() {
            var img = document.getElementById("p");
            if (curIndex == arr.length - 1){
                curIndex = 0;
            } else{
                curIndex += 1;
            }
            p.src = arr[curIndex];
        }

    </script>
</head>
<body>
    <div class="main_logo">
    <div>
        <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    </div>
        <div id="hotel_name">
            <em>   KT Plaza Hotel</em>
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
    <div>
        <img id="p" src="https://www.fourseasons.com/alt/img-opt/~80.1860.0,0000-234,4519-3000,0000-1687,5000/publish/content/dam/fourseasons/images/web/NYD/NYD_1546_original.jpg" alt="Room" >
        <div id="check_in">
            <form method="post" action="Room.php">
                <div id="In">
                    <label>
                        <span>CHECK IN</span><br>
                        <input type="date" name="check_in_date" min="<?php echo $today; ?>">
                    </label>
                </div>
                <div id="Out">
                    <label>
                        <span>CHECK OUT</span><br>
                        <input type="date" name="check_out_date" min="<?php echo $today; ?>">
                    </label>
                </div>
                <div id="Adult">
                    <label>
                        <span># OF ADULT</span><br>
                        <input type="number" list="number_1" name="adult" min="1" max="4" required>
                    </label>
                </div>
                <div id="Child">
                    <label>
                        <span># OF CHILD</span><br>
                        <input type="number" list="number_2" name="child" min="0" max="4">
                    </label>
                </div>
                <div id="Room">
                    <label>
                        <span>TOTAL ROOMS</span><br>
                        <input type="number" list="number_1" min="1" max="4" name="roomNumber" required>
                    </label>
                </div>
                <div id="bn">
                    <br><input type="submit" value="BOOK NOW">
                </div>
            </form>
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
        </div>
    </div>
    <br><br><br><br>
    <div id="summary">
        <div class="s_PP">
            <div id="border">
                <div class="policy">
                    <div class="inline">
                        <img src="https://img.icons8.com/office/2x/hotel-upgrade.png" alt="Policy">
                        <h4>RESERVATION TIMES</h4> <br>
                    </div>
                    <b>Check-in:</b> 12:00 PM<br>
                    <b>Check-out:</b> 4:00 PM
</div>
                <hr class="hr_1">
                <div class="payment">
                    <div class="inline">
                        <img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/2x/external-credit-card-online-shopping-vitaliy-gorbachev-flat-vitaly-gorbachev-1.png" alt="Payment">
                        <h4>PAYMENT METHOD</h4> <br>
                    </div>
Visa / Master <br>
                </div>
            </div>
        </div>
        <div class="s_left">
            <img class="s_icon" src="https://img.icons8.com/office/2x/front-desk.png" alt="General">
        </div>
        <div class="s_right">
            <h3>GENERAL</h3>
            <ul>
                <li>Non-smoking rooms</li>
                <li>ADA Accessibility</li>
                <li>Free parking</li>
                <li>Elevator</li>
                <li>Safe deposit box</li>
                <li>Currency exchange</li>
                <li>24-hour reception</li>
                <li>Wheelchair access</li>
                <li>ATM/Cash machine</li>
                <li>Free internet access</li>
                <li>Free Wi-Fi</li>
                <li>Digital check-in/out</li>
                <li>Secured parking</li>
            </ul>
        </div>
        <div class="s_left">
            <img class="s_icon" src="https://img.icons8.com/office/2x/restaurant-membership-card.png" alt="Dining">
        </div>
        <div class="s_right">
            <h3>DINING</h3>
            <ul>
                <li>Restaurant</li>
                <li>Kitchen</li>
                <li>Bar and Lounge area</li>
                <li>Microwave</li>
                <li>Snack bar</li>
                <li>Gourmet meals</li>
                <li>Special menus</li>
            </ul>
        </div>
        <div class="s_left">
            <img class="s_icon" src="https://img.icons8.com/color/2x/bench-press-with-dumbbells.png" alt="Sport">
        </div>
        <div class="s_right">
            <h3>LEISURE & SPORTS</h3>
            <ul>
                <li>Spa & wellness center</li>
                <li>Indoor swimming pool</li>
                <li>Sauna</li>
                <li>Fitness center</li>
                <li>Outdoor heated pool</li>
                <li>Jacuzzi</li>
                <li>Dance nightclub</li>
                <li>Comedy shows</li>
                <li>Sun terrace</li>
                <li>Garden area</li>
                <li>Entertainment</li>
                <li>Game room</li>
            </ul>
        </div>
        <div class="s_left">
            <img class="s_icon" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/2x/external-service-hotel-kiranshastry-lineal-kiranshastry.png" alt="Service">
        </div>
        <div class="s_right">
            <h3>SERVICE</h3>
            <ul>
                <li>Room service</li>
                <li>Car Chaeffur</li>
                <li>Dry cleaning</li>
                <li>Room service</li>
                <li>Bicycle </li>
                <li>Business center</li>
                <li>Meeting Rm</li>
                <li>Housekeeping</li>
                <li>Shops/Commercial services</li>
                <li>Laundry</li>
                <li>Printers</li>
                <li>Valet parking</li>
                <li>Shuttle service</li>
                <li>Wake up service</li>
                <li>Paid shuttle service</li>
                <li>Tours/Ticket assistance</li>
            </ul>
        </div>
        <div class="s_left">
            <img class="s_icon" src="https://img.icons8.com/ios/2x/hotel-changing-room.png" alt="Room">
        </div>
        <div class="s_right">
            <h3>ROOM AMENITIES</h3>
            <ul>
                <li>Laundry services</li>
                <li>Heat</li>
                <li>Air conditioning</li>
                <li>Television</li>
                <li>Hair dryer</li>
                <li>AM/FM alarm clock</li>
                <li>Telephone</li>
                <li>Mini-bar</li>
                <li>Balcony area</li>
                <li>Terrace</li>
                <li>In-room mini-safe</li>
                <li>Game room</li>
                <li>Flat-screen TV</li>
                <li>Carpeted floor</li>
            </ul>
        </div>
       
    </div>
    <div id="map">
        <div id="google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.40399094293!2d-73.99344535222721!3d40.75980330695512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855dc57ce93%3A0x48cdcc44c56b2d30!2sThe%20Plaza%20Hotel!5e0!3m2!1sen!2sus!4v1637438519691!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div id="location">
            <Strong>KT Plaza Hotel</Strong><br><br>
            <p>Address: &nbsp&nbsp&nbsp&nbsp&nbsp 1 Hilton Plaza</p>
            <p>Telephone: &nbsp&nbsp (973)243-2121</p>
            <p>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp contactus@theplazahotel.com</p>
        </div>
    </div>
    <div id="Last">
        <p><strong>We look forward to your stay!</strong></p>
    </div>
    <hr class="hr_1">
    <div class="foot">
        <div class="contact">
        <Strong></Strong><br>
            <p>Address: &nbsp&nbsp&nbsp&nbsp&nbsp 1 Hilton Plaza</p>
            <p>Telephone: &nbsp&nbsp (973)243-2121</p>
            <p>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp contactus@theplazahotel.com</p>
        </div>
        <div class="legal">
            <a href="ServiceDescription.php">Services</a><br>
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