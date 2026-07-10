<?php include "../db_con.php"?>



<?php

$result = $conn->query("SELECT * FROM `chalan`");
$chalan = [];

while($row = $result->fetch_assoc()) {
    $chalan[] = $row; 
}

echo json_encode(['chalan' => $chalan]);
$conn->close();

?>


