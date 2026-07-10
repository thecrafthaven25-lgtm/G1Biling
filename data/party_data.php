<?php include "../db_con.php"?>

<?php

$result = $conn->query("SELECT * FROM `party`");
$party = [];

while($row = $result->fetch_assoc()) {
    $party[] = $row; 
}

echo json_encode(['party' => $party]);
$conn->close();


?>
