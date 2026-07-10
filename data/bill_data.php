<?php include "../db_con.php"?>



<?php

$result = $conn->query("SELECT * FROM `bill`");
$bill = [];

while($row = $result->fetch_assoc()) {
    $bill[] = $row; 
}

echo json_encode(['bill' => $bill]);
$conn->close();

?>


