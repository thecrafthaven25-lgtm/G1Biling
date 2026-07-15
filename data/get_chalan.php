<?php include "../db_con.php";
session_start();

$p_name = $_POST['p_name'] ?? '';
$active_owner_id = $_SESSION['active_owner_id'] ?? 1;

$p_name_escaped = mysqli_real_escape_string($conn, $p_name);

$sql = "SELECT DISTINCT card_no FROM orders WHERE p_name = '$p_name_escaped' AND owner_id = $active_owner_id ORDER BY card_no DESC";
$result = mysqli_query($conn, $sql);

echo '<option value="">-- Select Card No --</option>';

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (!empty($row['card_no'])) {
            echo '<option value="' . htmlspecialchars($row['card_no']) . '">' . htmlspecialchars($row['card_no']) . '</option>';
        }
    }
}
$conn->close();
?>