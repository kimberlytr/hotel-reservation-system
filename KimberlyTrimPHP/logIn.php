<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Room Management</title>
    <h2>Room Management</h2>
    <link rel="icon" type="image/x-icon" href="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png"/>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div>
        <a href="index.php"><img class="logo"  src="https://cdn.iconscout.com/icon/free/png-256/hotel-2540586-2125130.png" alt="logo"></a><br><br><br><br><br>
    </div>
<hr>

<main>
    <form action="logIn.php" method="post">
    <p><label>User Name: &nbsp;<input type="text" name="user"> </label></p>
    <p><label>Password: &nbsp;&nbsp;&nbsp; <input type="password" name="password"> </label></p>
    <p><input type="submit" id="submit" value="Log In"></p>
    </form>
    <?php if (!isset($_POST['user'], $_POST['password'])){
        echo '';
    }else{if ($_POST['user'] != 'kimberlytrim' || $_POST['password'] != 'kimberlytrimpass'){
        echo 'Wrong username or password. ';
    }else {
        header('Location: RoomManagement.php');
    }}

    ?>
</main>
<hr>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Kimberly's Plaza Hotel and Co.</p>
</footer>
</body>
</html>