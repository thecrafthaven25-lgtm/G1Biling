<?php include "../db_con.php"?>

<?php

$p_name = $_POST['p_name'];

    $result = $conn->query("SELECT * FROM party LEFT JOIN invoice ON party.p_name = invoice.p_name WHERE party.p_name='$p_name'");
    $data = $result->fetch_assoc();
    echo json_encode($data);

?>

