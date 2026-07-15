<?php include "../db_con.php";

$card_no = $_POST['card_no'] ?? '';
$card_no_escaped = mysqli_real_escape_string($conn, $card_no);

$result = $conn->query("SELECT * FROM orders WHERE card_no = '$card_no_escaped' LIMIT 1");

$data = $result ? $result->fetch_assoc() : null;

echo json_encode($data);
$conn->close();
?>
