<?php include "../db_con.php"?>

<?php

$result = $conn->query("SELECT * FROM `owner`");
$owner = [];

while($row = $result->fetch_assoc()) {
    $owner[] = $row; 
}

echo json_encode(['owner' => $owner]);
$conn->close();

?>

