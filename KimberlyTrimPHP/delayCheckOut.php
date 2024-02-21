<?php
require ('database.php');
$today = date("Y-m-d");

$First_name = filter_input(INPUT_POST, 'First_Name');
$Last_name = filter_input(INPUT_POST, 'Last_Name');
$Customer_id = filter_input(INPUT_POST, 'Customer_id', FILTER_VALIDATE_INT);
$Check_in = filter_input(INPUT_POST, 'Check_In');
$Check_out = filter_input(INPUT_POST, 'Check_Out');

$queryDelay = 'SELECT * FROM book_info ORDER BY Customer_id';
$statementDelay = $db -> prepare($queryDelay);
$statementDelay ->execute();
$customer_id = $statementDelay -> fetchAll();
$statementDelay -> closeCursor();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Check Out Date</title>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" href="css/delayCheckOut.css">
</head>
<body>
<header>
    <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a>
    <h1>Change Check Out Date</h1>
</header>
<hr>
<main>
    <h2><em>Change Date</em></h2>
    <p>Customer ID: <?php echo $Customer_id; ?></p>
    <p>Customer Name: <?php echo $First_name. $Last_name; ?></p>
    <p>Check In Date: <?php echo $Check_in; ?></p>
    <p>Check Out Date: <?php echo $Check_out; ?></p>
    <form action="changedate.php" method="post">
        <input type="hidden" name="customer_id" value="<?php echo $Customer_id; ?>">
        <p><label>Choose New Check In Date:  <input type="date" name="new_in" value="<?php echo $Check_in; ?>" min="<?php echo $today; ?>"></label></p>
        <p><label>Choose New Check Out Date: <input type="date" name="new_out" value="<?php echo $Check_out; ?>" min="<?php echo $today; ?>"></label></p>
        <input id="submit" type="submit" value="Change Date">
    </form>
    <p><a href="customerInfo.php" id="ci">Return to Customer Info</a></p>
</main>
<hr>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kimberly's Plaza Hotel and Co.</p>
    </footer>
</body>
</html>








