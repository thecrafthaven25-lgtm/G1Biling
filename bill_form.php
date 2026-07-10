<?php
$id = $_GET['b_id'] ?? null;

$today = date('Y-m-d');

?>



<?php include "header.php" ?>



<!====================================================>
    <! Start right Content here>
        <!====================================================>
            <div class="page-content">

                <! Start Container Fluid>
                    <div class="container-fluid">

                        <!==========Page Title Start==========>
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <h4 class="mb-0">
                                            <?php 
                                                if ($id) {
                                                    echo 'Update GST Bill (%)';
                                                } else {
                                                    echo 'Add GST Bill (%)';
                                                } 
                                            ?>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="bill.php">GST Bill (%)</a></li>

                                    <li class="breadcrumb-item active">
                                        <?php 
                                            if ($id) {
                                                echo 'Update GST Bill (%)';
                                            } else {
                                                echo 'Add GST Bill (%)';
                                            } 
                                        ?>
                                    </li>
                                </ol>
                            </div>

                            <hr>

                            <!==========Page Title End==========>

                                <div class="row row-cols">
                                    <div class="col">
                                        <div class="card">


                                            <div class="card-body">
                                                <div>

                                                    <?php if ($id) {

                                                        $query = "SELECT * FROM `bill` WHERE b_id='$id'";
                                                        $query_run = mysqli_query($conn, $query);

                                                        if (mysqli_num_rows($query_run) > 0) {
                                                            while ($row = mysqli_fetch_array($query_run)) {
                                                    ?>



                                                    <form method="POST" action="code.php">
                                                        <div>

                                                            <div class="row">
                                                                <input type="text" class="form-control" id='b_id' hidden
                                                                    name="b_id" value="<?php echo $id ?>" />

                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">Date</label>
                                                                    <input type="text" id="basic-datepicker"
                                                                        name="b_date" class="form-control"
                                                                        value="<?php echo $row['b_date']; ?>">
                                                                </div>
                                                                <div class="col-md-3 col-6 mb-3">
                                                                    <label class="form-label">Bill No.</label>
                                                                    <input type="text" id="bill_no" name="bill_no"
                                                                        class="form-control"
                                                                        value="<?php echo $row['bill_no']; ?>">
                                                                </div>


                                                                <div class="col-md-3 col-6 mb-3">
                                                                    <label class="form-label">Party Id</label>
                                                                    <input type="text" id="party_id" name="party_id"
                                                                        class="form-control"
                                                                        value="<?php echo $row['party_id']; ?>"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>

                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">GST</label>
                                                                    <input type="text" id="gst" name="gst"
                                                                        class="form-control"
                                                                        value="<?php echo $row['gst']; ?>"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="simpleinput" class="form-label">Party
                                                                        Name</label>
                                                                    <select class="form-select" id="p_name"
                                                                        name="p_name">
                                                                        <option selected disabled> -- Select Party
                                                                            Name-- </option>

                                                                        <?php
                                                                            $fetch_query = "SELECT * FROM party";
                                                                            $fetch_query_run = mysqli_query($conn, $fetch_query);
                                                                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                                                                while ($row1 = mysqli_fetch_array($fetch_query_run)) {

                                                                            ?>
                                                                        <option value="<?php echo $row1['p_name']; ?>" <?php if ($row1['p_name'] == $row['p_name']) {
                                                                                        echo "selected";
                                                                                    } ?>>
                                                                            <?php echo $row1['p_name']; ?>
                                                                        </option>;
                                                                        <?php }
                                                                            }

                                                                            ?>

                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" id="p_address" name="p_address"
                                                                        class="form-control"
                                                                        value="<?php echo $row['p_address']; ?>"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr>


                                                        <div id="BillForm">
                                                            <?php
                                                                $chalan_no = explode(', ', $row['chalan_no']); // Laptop,Mobile,Tablet
                                                                $c_amount = explode(', ', $row['c_amount']); // Laptop,Mobile,Tablet

                                                                for ($i = 0; $i < count($chalan_no); $i++) {
                                                                ?>

                                                            <div class="row">

                                                                <div class="col-6 mb-3 col-remove">
                                                                    <label class="form-label">Chalan No.</label>

                                                                    <input type="text" name="chalan_no[]"
                                                                        value="<?php echo htmlspecialchars($chalan_no[$i]); ?>"
                                                                        class="form-control" placeholder="Chalan no">
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <label class="form-label">Chalan Amount</label>
                                                                    <input type="text" name="c_amount[]"
                                                                        value="<?php echo htmlspecialchars($c_amount[$i]); ?>"
                                                                        class="form-control c_amount"
                                                                        placeholder="Chalan amount">
                                                                </div>

                                                            </div>
                                                            <?php } ?>
                                                        </div>

                                                        <div class="mb-3">

                                                            <div type="button" id="addRow">
                                                                <span class="nav-text pr-2">+ Add New Row </span>
                                                            </div>

                                                        </div>

                                                        <hr>


                                                        <div class="row">

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label"><b>Total Chalan Amount</b></label>
                                                                <input type="text" id="total_c_amount" name="total_c_amount"
                                                                    value="<?php echo $row['c_total_amount']; ?>"
                                                                    class="form-control total_c_amount" readonly>
                                                            </div>



                                                            <input type="text" id="rate" hidden>


                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Discount</label>
                                                                <select class="form-select" id="dis_rate"
                                                                    name="dis_rate">
                                                                    <option value="1"
                                                                        <?= ($row['d_rate'] == '1') ? 'selected' : '' ?>>
                                                                        1% </option>
                                                                    <option value="2"
                                                                        <?= ($row['d_rate'] == '2') ? 'selected' : '' ?>>
                                                                        2% </option>
                                                                    <option value="3"
                                                                        <?= ($row['d_rate'] == '3') ? 'selected' : '' ?>>
                                                                        3% </option>
                                                                    <option value="4"
                                                                        <?= ($row['d_rate'] == '4') ? 'selected' : '' ?>>
                                                                        4% </option>
                                                                    <option value="5"
                                                                        <?= ($row['d_rate'] == '5') ? 'selected' : '' ?>>
                                                                        5% </option>
                                                                    <option value="6"
                                                                        <?= ($row['d_rate'] == '6') ? 'selected' : '' ?>>
                                                                        6% </option>
                                                                    <option value="7"
                                                                        <?= ($row['d_rate'] == '7') ? 'selected' : '' ?>>
                                                                        7% </option>
                                                                    <option value="8"
                                                                        <?= ($row['d_rate'] == '8') ? 'selected' : '' ?>>
                                                                        8% </option>
                                                                    <option value="9"
                                                                        <?= ($row['d_rate'] == '9') ? 'selected' : '' ?>>
                                                                        9% </option>
                                                                    <option value="10"
                                                                        <?= ($row['d_rate'] == '10') ? 'selected' : '' ?>>
                                                                        10% </option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Discount Amount</label>
                                                                <input type="text" id="dis_amount" name="dis_amount"
                                                                    class="form-control dis_amount"
                                                                    value="<?php echo $row['d_amount']; ?>"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>
                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">CGST</label>
                                                                <input type="text" id="cgst" name="cgst"
                                                                    class="form-control cgst"
                                                                    value="<?php echo $row['cgst']; ?>"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>
                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">SGST IGST</label>
                                                                <input type="text" id="sgst" name="sgst"
                                                                    class="form-control sgst"
                                                                    value="<?php echo $row['sgst']; ?>"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Total GST</label>
                                                                <input type="text" id="totalgst" name="totalgst"
                                                                    class="form-control totalgst"
                                                                    value="<?php echo $row['total_gst']; ?>"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>

                                                        </div>


                                                        <hr>


                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <label class="form-label">Final Amount</label>
                                                                <input type="text" id="final_amount" name="final_amount"
                                                                    class="form-control final_amount"
                                                                    value="<?php echo $row['total_amount']; ?>"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Paid Amount</label>
                                                                <input type="text" id="paid_amount" name="paid_amount"
                                                                    class="form-control"
                                                                    value="<?php echo $row['paid_amount']; ?>"
                                                                    placeholder="Please enter paid amount">
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Pending Amount</label>
                                                                <input type="text" id="pending_amount"
                                                                    name="pending_amount" class="form-control"
                                                                    value="<?php echo $row['pending_amount']; ?>"
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="btn btn-primary cs-mr10" name="b_update" type="submit">Update</button>
                                                        </div>
                                                    </form>



                                                    <?PHP }
                                                        }
                                                        } else { 
                                                    ?>
                                                </div>

                                                <?php
                                                        // card_no & order_no Auto increase start;

                                                        $query = "SELECT * FROM `bill` ORDER BY b_id DESC LIMIT 1";
                                                        $query_run = mysqli_query($conn, $query);

                                                        if (mysqli_num_rows($query_run) > 0) {
                                                            while ($row = mysqli_fetch_array($query_run)) {
                                                                $bill_no = $row['bill_no'] + 1;
                                                            }
                                                        }

                                                        // card_no & order_no Auto increase end;


                                                    ?>
                                                <div>
                                                    <form method="POST" action="code.php">
                                                        <div>

                                                            <div class="row">
                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">Date</label>
                                                                    <input type="text" id="basic-datepicker"
                                                                        name="b_date" class="form-control"
                                                                        value="<?php echo $today; ?>">
                                                                </div>
                                                                <div class="col-md-3 col-6 mb-3">
                                                                    <label class="form-label">Bill No.</label>
                                                                    <input type="text" id="bill_no" name="bill_no"
                                                                        class="form-control"
                                                                        value="<?php echo $bill_no; ?>">
                                                                </div>


                                                                <div class="col-md-3 col-6 mb-3">
                                                                    <label class="form-label">Party Id</label>
                                                                    <input type="text" id="party_id" name="party_id"
                                                                        class="form-control"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>

                                                                <div class="col-md-3 mb-3">
                                                                    <label class="form-label">GST</label>
                                                                    <input type="text" id="gst" name="gst"
                                                                        class="form-control"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <label for="simpleinput" class="form-label">Party
                                                                        Name</label>
                                                                    <select class="form-select" id="p_name"
                                                                        name="p_name">
                                                                        <option selected disabled> -- Select Party
                                                                            Name-- </option>

                                                                        <?php
                                                                            $clients  = mysqli_query($conn, "SELECT * FROM party");
                                                                            while ($row = mysqli_fetch_array($clients )) {
                                                                        ?>
                                                                        <option value="<?php echo $row['p_name']; ?>">
                                                                            <?php echo $row['p_name']; ?>
                                                                        </option>';
                                                                        <?php
                                                                            }
                                                                        ?>

                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6 mb-3">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" id="p_address" name="p_address"
                                                                        class="form-control"
                                                                        placeholder="Please select party name" readonly>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <!-- <div id="BillForm"> -->

                                                        <!-- <div class="row">

                                                                <div class="col-12 mb-3">

                                                                    <div type="button" id="chalan_no"
                                                                        class="btn btn-secondary w-100 text-center"
                                                                        placeholder="Click here chalan no select"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#chalanNo">
                                                                        Click here Chalan no select
                                                                    </div>

                                                                </div> -->


                                                        <div id="BillForm">

                                                            <div class="row">

                                                                <div class="col-6 mb-3 col-remove">
                                                                    <label class="form-label">Chalan No.</label>

                                                                    <input type="text" name="chalan_no[]"
                                                                        class="form-control" placeholder="Chalan no">
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <label class="form-label">Chalan Amount</label>
                                                                    <input type="text" name="c_amount[]"
                                                                        class="form-control c_amount"
                                                                        placeholder="Chalan amount">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="mb-3">

                                                            <div type="button" id="addRow">
                                                                <span class="nav-text pr-2">+ Add New Row </span>
                                                            </div>

                                                        </div>

                                                        <hr>

                                                        <!-- </div> -->
                                                        <!-- </div> -->


                                                        <div class="row">

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label"><b>Total Chalan
                                                                        Amount</b></label>
                                                                <input type="text" id="total_c_amount"
                                                                    name="total_c_amount"
                                                                    class="form-control total_c_amount" value="0"
                                                                    readonly>
                                                            </div>



                                                            <input type="text" id="rate" hidden>


                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Discount</label>
                                                                <select class="form-select" id="dis_rate"
                                                                    name="dis_rate">
                                                                    <option value="1%"> 1% </option>
                                                                    <option value="2%"> 2% </option>
                                                                    <option value="3%"> 3% </option>
                                                                    <option value="4%"> 4% </option>
                                                                    <option value="5%" selected> 5% </option>
                                                                    <option value="6%"> 6% </option>
                                                                    <option value="7%"> 7% </option>
                                                                    <option value="8%"> 8% </option>
                                                                    <option value="9%"> 9% </option>
                                                                    <option value="10%"> 10% </option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Discount Amount</label>
                                                                <input type="text" id="dis_amount" name="dis_amount"
                                                                    class="form-control dis_amount"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>
                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">CGST</label>
                                                                <input type="text" id="cgst" name="cgst"
                                                                    class="form-control cgst"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>
                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">SGST IGST</label>
                                                                <input type="text" id="sgst" name="sgst"
                                                                    class="form-control sgst"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Total GST</label>
                                                                <input type="text" id="totalgst" name="totalgst"
                                                                    class="form-control totalgst"
                                                                    placeholder="Please select design no 2" readonly>
                                                            </div>

                                                        </div>


                                                        <hr>


                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <label class="form-label">Final Amount</label>
                                                                <input type="text" id="final_amount" name="final_amount"
                                                                    class="form-control final_amount" value="0"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Paid Amount</label>
                                                                <input type="text" id="paid_amount" name="paid_amount"
                                                                    class="form-control"
                                                                    placeholder="Please enter paid amount">
                                                            </div>

                                                            <div class="col-md-4 col-6 mb-3">
                                                                <label class="form-label">Pending Amount</label>
                                                                <input type="text" id="pending_amount"
                                                                    name="pending_amount" class="form-control" value="0"
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 col-12 cs-mb-10">
                                                            <button class="btn btn-primary cs-mr10 " name="b_submit"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </form>

                                                    <?PHP } ?>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <! End Container Fluid>


                                    <!-- Modal -->
                                    <!-- <div class="modal fade center" id="chalanNo" aria-hidden="true"
                            aria-labelledby="chalanNoToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-sm modal-dialog-scrollable modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Chalan No</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>


                                    <div class="modal-body" id="selectedChalanTable">
                                        <div id="Chalan_no">Please select party name</div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="applyInvoice">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                                    <script>
                                    // $("#applyInvoice").click(function() {

                                    //     $("#selectedInvoices").html("");

                                    //     $(".invoice-checkbox:checked").each(function() {

                                    //         let invoice = $(this).val();

                                    //         $("#selectedInvoices").append(`
                                    //                         <div class="mb-2">
                                    //                             <input type="text" name="chalan_no[]" class="form-control" value="${chalan}" readonly>
                                    //                         </div>
                                    //                     `);
                                    //     });

                                    //     $("#invoiceModal").modal("hide");
                                    // });
                                    </script>



                                    <?php include "footer.php" ?>