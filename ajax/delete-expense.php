<?php
include('../db.php');

extract($_POST);

$q = $conn->prepare("DELETE FROM expenses WHERE id = :id");
$q->execute([
    'id' => $_POST['expense_id']
]);