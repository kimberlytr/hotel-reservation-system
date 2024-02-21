<?php
require ('database.php');

$room_id = filter_input(INPUT_GET, 'Room_id', FILTER_VALIDATE_INT);

$queryRoomCategories = 'SELECT * FROM room_categories ORDER BY Room_id';
$statementRoomCategories = $db ->prepare($queryRoomCategories);
$statementRoomCategories -> execute();
$RoomCategories = $statementRoomCategories -> fetchAll();
$statementRoomCategories -> closeCursor();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Room Management</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" href="css/RoomManagement.css">
</head>
<body>
<div id="top">
    <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    <h1>Room List</h1>
</div>
    <main>
    <aside>
        <h2><em>Choose Table</em></h2>
        <a href="RoomManagement.php">Room Management</a>
        <a href="customerInfo.php">Customer Info</a>
        <a href="address.php">Customer Address</a>
    </aside>
        <hr>
    <section>
        <h2>Room Management</h2>
        <table>
            <tr>
                <th>Room ID</th>
                <th>Room Name</th>
                <th>Rate</th>
                <th>Availability</th>
            </tr>
            <?php foreach ($RoomCategories as $roomCategory):  ?>
            <tr>
                <td><?php echo $roomCategory['Room_id']; ?></td>
                <td><?php echo $roomCategory['Room_name']; ?></td>
                <td><?php echo $roomCategory['Price']; ?></td>
                <td><?php echo $roomCategory['Available']; ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="Room_id" value="<?php echo $roomCategory['Room_id']; ?>">
                        <input type="hidden" name="Room_name" value="<?php echo $roomCategory['Room_name']; ?>">
                        <input type="hidden" name="Price" value="<?php echo $roomCategory['Price']; ?>">
                        <input id="delete" type="submit" value="delete">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="changePN.php" id="change">Change Room Rate</a></p>
    </section>
    </main>
<hr>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Kimberly's Plaza Hotel and Co.</p>
</footer>
</body>
</html>