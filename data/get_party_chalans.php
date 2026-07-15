<?php include "../db_con.php";
session_start();

$p_name = $_POST['p_name'] ?? '';
$active_owner_id = $_SESSION['active_owner_id'] ?? 1;

$p_name_escaped = mysqli_real_escape_string($conn, $p_name);

$sql = "SELECT chalan_no, total_amount FROM chalan WHERE p_name = '$p_name_escaped' AND owner_id = $active_owner_id ORDER BY c_id DESC";
$result = mysqli_query($conn, $sql);

$chalans = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $chalans[] = [
            'chalan_no' => $row['chalan_no'],
            'total_amount' => $row['total_amount']
        ];
    }
}

echo json_encode($chalans);
$conn->close();
?>
