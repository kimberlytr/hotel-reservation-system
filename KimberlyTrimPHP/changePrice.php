<?php
require('database.php');

$room_price = filter_input(INPUT_POST, 'new_price', FILTER_VALIDATE_FLOAT);
$Room_id = filter_input(INPUT_POST, 'room_id', FILTER_VALIDATE_INT);

$queryChangprice =  'UPDATE room_categories SET Price = :room_price WHERE Room_id = :Room_id';
$statementChangePrice = $db -> prepare($queryChangprice);
$statementChangePrice -> bindValue(':room_price', $room_price);
$statementChangePrice -> bindValue(':Room_id', $Room_id);
$statementChangePrice -> execute();
$statementChangePrice -> closeCursor();

include ('RoomManagement.php');
?>