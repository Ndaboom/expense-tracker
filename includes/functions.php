<?php
include('db.php');

function get_all_data_from_table($table)
{
    global $conn;
    $q = $conn->prepare("SELECT * FROM ".$table."");
    $q->execute();
    $data = $q->fetchAll(PDO::FETCH_OBJ);
    $q->closeCursor();
    return $data; 
}