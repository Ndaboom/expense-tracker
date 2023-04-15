<?php
session_start();
require '../db.php';
require '../includes/functions.php';

extract($_POST);
$output = '';
$q = $conn->prepare("SELECT * FROM expenses WHERE 
                    date BETWEEN :date1 AND :date2
                    AND category_id = :category_id");
$q->execute([
    'date1' => $_POST['date1'],
    'date2' => $_POST['date2'],
    'category_id' => $_POST['category']
]);

$expenses = $q->fetchAll(PDO::FETCH_OBJ);
$q->closeCursor();

// Loop throught data found

if (count($expenses) != 0){
    foreach ($expenses as $index => $expense){
        $category = fetch_defined_record_by_parameter('categories', 'id', $expense->category_id);
        $output .= '
          <tr>
            <th scope="row">'.($index+1).'</th>
            <td>'. $expense->description .'</td>
            <td>'. $category->name .'</td>
            <td>'. $expense->amount .'</td>
            <td>'. $expense->date .'</td>
        </tr>
        ';
    }
} else { 
    $output .= '<tr>No expenses in this period...</tr>';
}

echo $output;