<?php
require('database.php');

$queryChange = 'SELECT * FROM room_categories ORDER BY Room_id';
$statementChange = $db -> prepare($queryChange);
$statementChange -> execute();
$rooms = $statementChange -> fetchAll();
$statementChange -> closeCursor();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" href="css/changePN.css">
    <title>Modify Room Info</title>
</head>
<body>
<header>
<a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    <h1>Change Room Info</h1>
</header>
<hr>
<main>
    <h2><em>Change Price</em></h2>
    <form action="changePrice.php" method="post" id="change_price">
        <p><label>Category:&nbsp;&nbsp;
        <select name="room_id">
            <?php foreach ($rooms as $room): ?>
            <option value="<?php echo $room['Room_id']; ?>"><?php echo $room['Room_name']; ?></option>
            <?php endforeach; ?>
        </select></label></p>
        <p><label>Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="new_price"></label></p>
        <p><label>&nbsp;<input id="submit" type="submit" value="Change Price"><br></label></p>
    </form>
    <p><a href="RoomManagement.php" id="RM">View Room List</a></p>
</main>
<hr>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Kimberly's Plaza Hotel and Co.</p>
</footer>
</body>
</html>