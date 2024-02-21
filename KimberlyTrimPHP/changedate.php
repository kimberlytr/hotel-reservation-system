<?php
require ('database.php');

$New_in = $_POST['new_in'];
$New_out = $_POST['new_out'];
$Customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);

if ($Customer_id != false){
    $queryNewIn = 'UPDATE book_info SET Check_In = :new_in, Check_Out = :new_out WHERE Customer_id= :customer_id';
    $statementCustomer = $db -> prepare($queryNewIn);
    $statementCustomer -> bindValue(':customer_id', $Customer_id);
    $statementCustomer -> bindValue(':new_in', $New_in);
    $statementCustomer -> bindValue(':new_out', $New_out);
    $statementCustomer -> execute();
    $statementCustomer ->closeCursor();
}

include ('customerInfo.php');

?>
