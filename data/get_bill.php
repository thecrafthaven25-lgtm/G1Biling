<?php include "../db_con.php";


$p_name = $_POST['p_name'];

$sql =  "SELECT * FROM chalan WHERE p_name = '$p_name' ORDER BY c_id DESC";
$result1 = mysqli_query($conn,$sql);



while($row=mysqli_fetch_assoc($result1))
{
?>
    <div class="" id="invoiceContainer">
        <label class="form-check-label mb-1" for="inlineCheckbox1"><?php echo date("d-m-Y", strtotime($row['c_date']));?></label>
        <div class="form-check">
            <input class="form-check-input invoice_check" type="checkbox" id="Chalan_no" name="Chalan_no" value="<?php echo $row['chalan_no']?>"/>
            <label class="form-check-label" for="inlineCheckbox1">Chalan No :- <?php echo $row['chalan_no'] ?> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; ₹ 
                <?php echo $row['total_amount'] ?>
            </label>
        </div>
    </div>
     <hr>

<?php 
}

?>