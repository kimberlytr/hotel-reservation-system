<?php
require ('database.php');

$queryCustomerInfo = 'SELECT * FROM customer_info ORDER BY Customer_id';
$statementCustomerInfo = $db -> prepare($queryCustomerInfo);
$statementCustomerInfo -> execute();
$CustomerInfo = $statementCustomerInfo -> fetchAll();
$statementCustomerInfo -> closeCursor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Customer Address</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" href="css/customerInfo.css" />
</head>
<body>
<div id="top">
    <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    <h1>Customer Address</h1>
</div>
<main>
    <aside>
        <h2><em>Choose Below</em></h2>
        <a href="RoomManagement.php">Room Management</a>
        <a href="customerInfo.php">Customer Info</a>
        <a href="address.php">Customer Address</a>
    </aside>
    <hr>
    <section>
        <h2>Customer Address</h2>
        <table>
            <tr>
                <th>Customer_id</th>
                <th>Title</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Street</th>
                <th>City</th>
                <th>State</th>
            </tr>
            <?php foreach ($CustomerInfo as $Customer): ?>
                <tr>
                    <td><?php echo $Customer['Customer_id']?></td>
                    <td><?php echo $Customer['Title']?></td>
                    <td><?php echo $Customer['First_Name']?></td>
                    <td><?php echo $Customer['Last_Name']?></td>
                    <td><?php echo $Customer['Street']?></td>
                    <td><?php echo $Customer['City']?></td>
                    <td><?php echo $Customer['State']?></td>
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