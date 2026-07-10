<?php //include "db_con.php"; 
?>


<?php include "header.php" ?>



<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <hr>
    <form>

        <div id="invoiceForm">

            <div class="row">

                <div class="col-5 mb-3 col-remove">
                    <label class="form-label">Maching No.</label>

                    <input type="text" name="matching_no[]" class="form-control" placeholder="Maching no">
                </div>
                <div class="col-5 mb-3">
                    <label class="form-label">Cut</label>
                    <input type="text" name="cut[]" class="form-control cut" placeholder="Cut">
                </div>

            </div>
        </div>

        <div class="mb-3">

            <div type="button" id="addRow">
                <span class="nav-text pr-2">+ Add Item </span>
            </div>

        </div>

        <hr>

        <div class="row">
            <div class="col-md-3 col-6 mb-3">
                <label class="form-label"><b>Total Maching</b></label>
                <input type="text" id="totalRow" value="1" disabled
                    class="form-control">
            </div>

            <div class="col-md-3 col-6 mb-3">
                <label class="form-label"><b>Total Metre</b></label>
                <input type="text" id="total_metre" name="total_metre"
                    class="form-control" disabled>
            </div>

            <div class="col-md-3 col-6 mb-3">
                <label class="form-label">Rate</label>
                <input type="text" id="rate" name="rate"
                    class="form-control rate" placeholder="rate per metre">
            </div>

            <div class="col-md-3 col-6 mb-3">
                <label class="form-label"><b>Total Amount</b></label>
                <input type="text" id="total_amount" name="total_amount"
                    class="form-control" disabled>
            </div>
        </div>
    </form>


    <?php include "footer.php" ?>



    <script>
        function updateCount() {

            let total = document.querySelectorAll(".col-remove").length;

            document.getElementById("totalRow").value = total;
        }

        document.getElementById("addRow").onclick = function() {

            let row = document.createElement("div");

            row.className = "row";

            row.innerHTML =
                `<div class="col-5 mb-3 col-remove">
                    <label class="form-label">Maching No.</label>
                    <input type="text" id="" name="matching_no[]" class="form-control" placeholder="Maching no">
                </div>

                <div class="col-5 mb-3">
                    <label class="form-label">Cut</label>
                    <input type="text" id="" name="cut[]" class="form-control cut" placeholder="Cut">
                </div>

                <div type="button" class="col-2 mb-3 align-self-center removeBtn">
                    X &nbsp; Remove
                </div>`;


            document.getElementById("invoiceForm").appendChild(row);

            updateCount();
        };


        document.addEventListener("click", function(e) {

            if (e.target.classList.contains("removeBtn")) {

                e.target.parentElement.remove();

                updateCount();
            }

        });



        // cut Change
        document.addEventListener("keyup", function(e) {

            if (e.target.classList.contains("cut")) {
                totalcut();
            }

        });

        document.addEventListener("change", function(e) {

            if (e.target.classList.contains("cut")) {
                totalcut();
            }

        });

        // Total Function
        function totalcut() {

            let cutInputs = document.querySelectorAll(".cut");

            let total = 0;

            let values = [];

            cutInputs.forEach(function(input) {

                let cut = parseInt(input.value) || 0;

                total += cut;

                values.push(cut);

            });

            // Show Total
            document.getElementById("total_metre").value = total;


            totalcut();
        }


        // total price
        function calculateTotal() {
            let qty = document.getElementById("total_metre").value;
            let price = document.getElementById("rate").value;

            let total = qty * price;

            document.getElementById("total_amount").value = total;
        }

        // Auto calculate on typing
        document.getElementById("total_metre").addEventListener("input", calculateTotal);
        document.getElementById("rate").addEventListener("input", calculateTotal);
    </script>