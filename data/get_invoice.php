<?php include "../db_con.php"?>

<?php

$design_no = $_POST['design_no'];

$result = $conn->query("SELECT * FROM  invoice where design_no = $design_no");

$data = $result->fetch_assoc();

echo json_encode($data);

?>

