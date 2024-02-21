<?php
require ('database.php');

$queryCustomerInfo = 'SELECT * FROM book_info ORDER BY Customer_id';
$queryRoomId = 'SELECT Room_id FROM book_info INNER JOIN  room_categories ON book_info.Room_id = room_categories.Room_id';
$statementCustomerInfo = $db -> prepare($queryCustomerInfo);
$statementCustomerInfo -> execute();
$CustomerInfo = $statementCustomerInfo -> fetchAll();
$statementCustomerInfo -> closeCursor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Customer Information</title>
    <link rel="stylesheet" href="css/customerInfo.css" />
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
</head>
<body>
<div id="top">
    <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a><br>
    <h1>Customer Information</h1>
</div>
    <main>
        <aside>
        <br><br>
            <a href="RoomManagement.php">Room Management</a>
            <a href="customerInfo.php">Customer Info</a>
            <a href="address.php">Customer Address</a>
        </aside>
        <hr>
        <section>
            <h2>Customer Information</h2>
            <table>
               <tr>
                   <th>Customer_id</th>
                   <th>First_Name</th>
                   <th>Last_Name</th>
                   <th>Checked_In</th>
                   <th>Checked_Out</th>
                   <th>Room_id</th>
                   <th>#_of_Adult</th>
                   <th>#_of_Child</th>
                   <th>#_of_Room</th>
                   <th>Comment</th>
                   <th>State</th>
               </tr>
                <?php foreach ($CustomerInfo as $Customer): ?>
                <tr>
                    <td><?php echo $Customer['Customer_id']?></td>
                    <td><?php echo $Customer['First_Name']?></td>
                    <td><?php echo $Customer['Last_Name']?></td>
                    <td><?php echo $Customer['Check_In']?></td>
                    <td><?php echo $Customer['Check_Out']?></td>
                    <td><?php echo $Customer['Room_id']?></td>
                    <td><?php echo $Customer['Number_of_Adult']?></td>
                    <td><?php echo $Customer['Number_of_Child']?></td>
                    <td><?php echo $Customer['Number_of_Room']?></td>
                    <td><?php echo $Customer['Comment']?></td>
                    <td><?php echo $Customer['State']?></td>
                    <td>
                        <form class="bottom" action="checkedOut.php" method="post">
                            <input type="hidden" name="Customer_id" value="<?php echo $Customer['Customer_id']; ?>">
                            <input class="input" type="submit" value="Checked Out">
                        </form>
                        <form class="bottom" action="cancel.php" method="post">
                            <input type="hidden" name="Customer_id" value="<?php echo $Customer['Customer_id']; ?>">
                            <input class="input" type="submit" value="Cancel">
                        </form>
                    </td>
                    <td>
                        <form class="bottom" action="delayCheckOut.php" method="post">
                            <input type="hidden" name="Customer_id" value="<?php echo $Customer['Customer_id']; ?>">
                            <input type="hidden" name="First_Name" value="<?php echo $Customer['First_Name']; ?>">
                            <input type="hidden" name="Last_Name" value="<?php echo $Customer['Last_Name']; ?>">
                            <input type="hidden" name="Check_In" value="<?php echo $Customer['Check_In']; ?>">
                            <input type="hidden" name="Check_Out" value="<?php echo $Customer['Check_Out']; ?>">
                            <input class="input" type="submit" value="Change Date">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
<hr>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kimberly's Plaza Hotel and Co.</p>
    </footer>
</body>
</html>