<?php include "../db_con.php";


$p_name = $_POST['p_name'];

$sql =  "SELECT * FROM invoice WHERE p_name = '$p_name'";
$result = mysqli_query($conn,$sql);

echo '<option id="non" value="">-- Select Design No -- </option>';



while($row=mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo $row['design_no']?>">
    <?php echo $row['design_no']?>
</option>

<?php 
}

?>