<?php include "../db_con.php"?>



<?php

$result = $conn->query("SELECT * FROM `invoice`");
$invoice = [];

while($row = $result->fetch_assoc()) {
    $invoice[] = $row; 
}

echo json_encode(['invoice' => $invoice]);
$conn->close();

?>


