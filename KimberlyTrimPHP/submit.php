<?php
require ('database.php');
session_start();
$room = $_SESSION['book']['room'];
$adult = (int) $_SESSION['book']['adult'];
$child = (int) $_SESSION['book']['child'];
$roomNumber = (int) $_SESSION['book']['numberofroom'];


$queryAvailable = 'SELECT Available FROM room_categories WHERE Room_name = :room';
$statementAvailable = $db -> prepare($queryAvailable);
$statementAvailable -> bindValue(':room', $room);
$statementAvailable ->execute();
$available = $statementAvailable -> fetch();
$statementAvailable -> closeCursor();

$subtraction = (int)$available['0'] - $roomNumber;

$queryBook = 'UPDATE room_categories SET Available = :a WHERE Room_name = :room';
$statementBook = $db -> prepare($queryBook);
$statementBook -> bindValue(':room', $room);
$statementBook -> bindValue(':a', $subtraction);
$statementBook ->execute();
$statementBook -> closeCursor();


$queryRoom = 'SELECT Room_id FROM room_categories WHERE Room_name = :room';
$statementRoom = $db -> prepare($queryRoom);
$statementRoom -> bindValue(':room', $room);
$statementRoom ->execute();
$room_id = $statementRoom -> fetchAll();
$statementRoom -> closeCursor();

$queryAddress = 'INSERT INTO customer_info(Title, First_Name, Last_Name, Street, City, State)VALUES (:title, :first_name, :last_name, :street, :city, :state)';
$statementAddress = $db -> prepare($queryAddress);
$statementAddress -> bindValue(':title', $_SESSION['address']['title']);
$statementAddress -> bindValue(':first_name', $_SESSION['address']['first_name']);
$statementAddress -> bindValue(':last_name', $_SESSION['address']['last_name']);
$statementAddress -> bindValue(':street', $_SESSION['address']['street']);
$statementAddress -> bindValue(':city', $_SESSION['address']['city']);
$statementAddress -> bindValue(':state', $_SESSION['address']['state']);
$statementAddress -> execute();
$statementAddress -> closeCursor();


$queryBook = 'INSERT INTO book_info(First_Name, Last_Name, Check_In, Check_Out, Room_id, Number_of_Adult, Number_of_Child, Number_of_Room, Comment) 
values (:first_name, :last_name, :check_in, :check_out, :room_id, :number_of_adult, :number_of_child, :number_of_room, :comment)';
$statement = $db -> prepare($queryBook);
$statement -> bindValue(':first_name', $_SESSION['book']['first_name']);
$statement -> bindValue(':last_name', $_SESSION['book']['last_name']);
$statement -> bindValue(':check_in', $_SESSION['book']['check_in']);
$statement -> bindValue(':check_out', $_SESSION['book']['check_out']);
$statement -> bindValue(':room_id', (int) $room_id['0']['Room_id']);
$statement -> bindValue(':number_of_adult',$adult);
$statement -> bindValue(':number_of_child',$child);
$statement -> bindValue(':number_of_room',$roomNumber);
$statement -> bindValue(':comment', $_SESSION['book']['comment']);
$statement -> execute();
$statement -> closeCursor();

header("Location:ThankYou.php");

?>