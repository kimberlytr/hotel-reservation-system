<?php
require ('database.php');

$Customer_id = filter_input(INPUT_POST, 'Customer_id', FILTER_VALIDATE_INT);

$query1 = 'SELECT State FROM book_info WHERE Customer_id= :customer_id';
$statement1 = $db -> prepare($query1);
$statement1 -> bindValue(':customer_id', $Customer_id);
$statement1 -> execute();
$state = $statement1 -> fetch();
$statement1 ->closeCursor();

if ($Customer_id != false && $state[0] != "Canceled" && $state[0] != "Checked out"){
    $query = 'SELECT Room_id FROM book_info WHERE Customer_id= :customer_id';
    $statement = $db -> prepare($query);
    $statement -> bindValue(':customer_id', $Customer_id);
    $statement -> execute();
    $room = $statement -> fetch();
    $statement ->closeCursor();

    $room_id =(int)$room['0'];

    $queryNumber = 'SELECT Number_of_Room FROM book_info WHERE Customer_id= :customer_id';
    $statementNumber = $db -> prepare($queryNumber);
    $statementNumber -> bindValue(':customer_id', $Customer_id);
    $statementNumber -> execute();
    $roomNumber = $statementNumber -> fetch();
    $statementNumber ->closeCursor();

    $queryRoom = 'SELECT Available FROM room_categories WHERE Room_id= :room_id';
    $statementRoom = $db -> prepare($queryRoom);
    $statementRoom -> bindValue(':room_id', $room_id);
    $statementRoom -> execute();
    $a = $statementRoom -> fetch();
    $statementRoom ->closeCursor();

    $add = (int)$a[0] + $roomNumber[0];

    $queryAdd = 'UPDATE room_categories SET Available = :add1 WHERE Room_id = :room_id';
    $statementAdd = $db -> prepare($queryAdd);
    $statementAdd -> bindValue(':room_id', $room_id);
    $statementAdd -> bindValue(':add1', $add);
    $statementAdd ->execute();
    $statementAdd -> closeCursor();

    $queryCancel = 'UPDATE book_info SET State = :cancel WHERE Customer_id= :customer_id';
    $statementCustomer = $db -> prepare($queryCancel);
    $statementCustomer -> bindValue(':customer_id', $Customer_id);
    $statementCustomer -> bindValue(':cancel', 'Canceled');
    $statementCustomer -> execute();
    $statementCustomer ->closeCursor();
}else{
    $queryCancel = 'UPDATE book_info SET State = :cancel WHERE Customer_id= :customer_id';
    $statementCustomer = $db -> prepare($queryCancel);
    $statementCustomer -> bindValue(':customer_id', $Customer_id);
    $statementCustomer -> bindValue(':cancel', 'Canceled');
    $statementCustomer -> execute();
    $statementCustomer ->closeCursor();

}

include ('customerInfo.php');

?>
