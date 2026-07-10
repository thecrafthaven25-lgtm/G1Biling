<?php
$id = $_GET['p_id'] ?? null;
?>

<?php include "header.php"?>



<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <!-- ========== Page Title Start ========== -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0"><?php if($id){ echo 'Update Party'; }else{ echo 'Add Party'; } ?></h4>

                </div>
            </div>
        </div>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="party.php">Party</a></li>
                <li class="breadcrumb-item active">
                    <?php if($id){ echo 'Update Party'; }else{ echo 'Add Party'; } ?>
                </li>
            </ol>
        </div>
        <hr>

        <!-- ========== Page Title End ========== -->

        <div class="row row-cols">
            <div class="col">
                <div class="card">


                    <div class="card-body">
                        <div>

                            <?php if($id){ 
                                
                                $query = "SELECT * FROM `party` WHERE p_id='$id'";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row = mysqli_fetch_array($query_run)) {
                                ?>

                            <form method="POST" action="code.php">
                                <div>
                                    <input type="text" class="form-control" id='p_id' name="p_id"
                                        value=<?php echo $id ?> hidden/>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Party Id</label>
                                                <input type="text" id="party_id" name="party_id"
                                                    class="form-control" value="<?php echo $row['party_id']?>" 
                                                    autofocus placeholder="Please enter party id">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Party Name</label>
                                                <input type="text" id="p_name" name="p_name"
                                                    class="form-control" value="<?php echo $row['p_name']?>"
                                                    placeholder="Please enter party name">
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">GST No.</label>
                                                <input type="text" id="gst" name="gst"
                                                    class="form-control" value="<?php echo $row['gst']?>"
                                                    placeholder="Please enter GST Number">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Email Id</label>
                                                <input type="text" id="email_id" name="email_id"
                                                    class="form-control" value="<?php echo $row['email_id']?>"
                                                    placeholder="Please enter email id">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="text" id="mobile_no" name="mobile_no"
                                                    class="form-control" value="<?php echo $row['mobile_no']?>"
                                                    placeholder="Please enter mobile no">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Address</label>
                                            <textarea class="form-control" id="p_address" name="p_address" rows="5" 
                                            placeholder="Please enter address"><?php echo $row['p_address']?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit" name="p_update">Update</button>
                                    </div>

                                </div>

                            </form>

                            <?PHP }}} else { ?>

                            <form method="POST" action="code.php">
                                <div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-3 mb-3">
                                                <label class="form-label">Party Id</label>
                                                <input type="text" id="party_id" name="party_id" class="form-control" 
                                                    autofocus placeholder="Please enter party id">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Party Name</label>
                                                <input type="text" id="p_name" name="p_name" class="form-control"
                                                    placeholder="Please enter party name">
                                            </div>

                                             <div class="col-md-3 mb-3">
                                                <label class="form-label">GST No.</label>
                                                <input type="text" id="gst" name="gst"
                                                    class="form-control" placeholder="Please enter GST Number">
                                            </div>
                                        </div>

                                       

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Email Id</label>
                                                <input type="text" id="email_id" name="email_id" class="form-control" 
                                                    placeholder="Please enter email id">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="text" id="mobile_no" name="mobile_no" class="form-control"
                                                    placeholder="Please enter mobile no">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Address</label>
                                            <textarea class="form-control" id="p_address" name="p_address" rows="5" placeholder="Please enter address"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" name="p_submit" type="submit">Submit</button>
                                    </div>

                                </div>

                            </form>
                            <?PHP } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container Fluid -->


        <?php include "footer.php" ?>