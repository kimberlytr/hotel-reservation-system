<?php
require_once ('database.php');

$Room_id = filter_input(INPUT_POST, 'Room_id', FILTER_VALIDATE_INT);

if ($Room_id != false){
    $queryDelete = 'DELETE FROM room_categories WHERE Room_id = :Room_id';
    $statementdelete = $db -> prepare($queryDelete);
    $statementdelete -> bindValue(':Room_id', $Room_id);
    $success = $statementdelete -> execute();
    $statementdelete -> closeCursor();
}

include('RoomManagement.php');
?>
