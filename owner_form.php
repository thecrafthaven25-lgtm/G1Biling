<?php
$id = $_GET['o_id'] ?? null;
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
                    <h4 class="mb-0"><?php if($id){ echo 'Update Owner'; }else{ echo 'Add Owner'; } ?></h4>

                </div>
            </div>
        </div>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="owner.php">Owner</a></li>

                <li class="breadcrumb-item active">
                    <?php if($id){ echo 'Update Owner'; }else{ echo 'Add Owner'; } ?>
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
                                
                                $query = "SELECT * FROM `users` WHERE owner_id='$id'";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row1 = mysqli_fetch_array($query_run)) {
                                ?>

                            <form method="POST" action="code.php" enctype="multipart/form-data">
                                <div>
                                    <input type="hidden" class="form-control" id='category_id' name="owner_id"
                                        value=<?php echo $id ?> />
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" autofocus
                                            value="<?php echo $row1['name']?>" placeholder="Please enter your name">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mobile Number 1</label>
                                            <input type="text" name="mobile_1" id="mobile_1" class="form-control"
                                                value="<?php echo $row1['mobile_1']?>"
                                                placeholder="Please enter mobile number 1">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mobile Number 2</label>
                                            <input type="text" name="mobile_2" id="mobile_2" class="form-control"
                                                value="<?php echo $row1['mobile_2']?>"
                                                placeholder="Please enter mobile number 2">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Address</label>
                                        <textarea class="form-control" rows="3" id="address" name="address"
                                            placeholder="Please enter address"> <?php echo $row1['address']?> </textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <p class="form-label">User name</p>
                                            <input type="text" id="user_name" name="user_name" class="form-control"
                                                value="<?php echo $row1['user_name']?>"
                                                placeholder="Please enter user name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <p class="form-label">Password</p>
                                            <input type="text" id="password" name="pass" class="form-control"
                                                    value="<?php echo $row1['pass']?>"
                                                placeholder="Please enter password">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" id="submit" type="submit"
                                        name="o_update">Update</button>
                                </div>

                            </form>

                            <?PHP }}} else { ?>

                            <form method="POST" action="code.php" enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" autofocus
                                                placeholder="Please enter your name">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mobile Number 1</label>
                                            <input type="text" name="mobile_1" id="mobile_1" class="form-control"
                                                placeholder="Please enter mobile number 1">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mobile Number 2</label>
                                            <input type="text" name="mobile_2" id="mobile_2" class="form-control"
                                                placeholder="Please enter mobile number 2">
                                        </div>
                                        <!-- <div class="col-md-6 mb-3">
                                            <label class="form-label">Upload Logo</label>
                                            <input type="file" name="image" accept="image/*" required class="form-control" placeholder="Please upload logo">
                                        </div> -->
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Address</label>
                                        <textarea class="form-control" rows="3" id="address" name="address"
                                            placeholder="Please enter address"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <p class="form-label">User name</p>
                                            <input type="text" id="user_name" name="user_name" class="form-control"
                                                placeholder="Please enter user name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <p class="form-label">Password</p>
                                            <input type="password" id="password" name="pass" class="form-control"
                                                placeholder="Please enter password">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Owner Photo</label>
                                            <div class="position-relative overflow-hidden rounded-4 border border-secondary border-opacity-25 p-4 p-lg-5" style="background: linear-gradient(135deg, #1f2937 0%, #111827 100%);">
                                                <div class="position-absolute top-0 end-0 opacity-25" style="width: 240px; height: 240px; background: radial-gradient(circle, #f59e0b 0%, transparent 70%);"></div>
                                                <div class="position-absolute bottom-0 start-0 opacity-25" style="width: 180px; height: 180px; background: radial-gradient(circle, #38bdf8 0%, transparent 70%);"></div>

                                                <div class="d-flex flex-column flex-xl-row align-items-xl-center justify-content-between gap-4 position-relative" style="z-index: 1;">
                                                    <div class="text-white">
                                                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3" style="background: rgba(255,255,255,.08); backdrop-filter: blur(8px);">
                                                            <span class="fw-semibold">Photo Uploader</span>
                                                        </div>
                                                        <h4 class="mb-2 text-white">Preview multiple photos, save one</h4>
                                                        <p class="mb-0 text-white-50" style="max-width: 42rem;">
                                                            Pick several photos if you want to compare them, remove the extras, and submit exactly one final owner photo.
                                                        </p>
                                                    </div>

                                                    <div class="d-flex flex-column gap-2 align-items-stretch" style="min-width: min(100%, 320px);">
                                                        <input type="file" id="owner_image" name="image" accept="image/*" multiple required class="visually-hidden">
                                                        <button type="button" class="btn btn-warning btn-lg fw-semibold" id="owner_image_pick">
                                                            Choose photos
                                                        </button>
                                                        <button type="button" class="btn btn-outline-light" id="owner_image_clear">
                                                            Clear selection
                                                        </button>
                                                        <div class="small text-white-50 text-center" id="owner-image-counter">
                                                            No photo selected yet.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4 position-relative" style="z-index: 1;">
                                                    <div class="small text-white-50 mb-2" id="owner-image-status">
                                                        Select one or more photos, then remove extras until only one remains.
                                                    </div>
                                                    <div class="row g-3 mt-1" id="owner-image-preview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ========== image upload Page End ========== -->

                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" id="submit" type="submit"
                                        name="o_submit">Submit</button>
                                </div>

                            </form>
                            <?PHP } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container Fluid -->

        <script>
            (function () {
                const input = document.getElementById('owner_image');
                const preview = document.getElementById('owner-image-preview');
                const status = document.getElementById('owner-image-status');
                const counter = document.getElementById('owner-image-counter');
                const pickButton = document.getElementById('owner_image_pick');
                const clearButton = document.getElementById('owner_image_clear');
                const form = input ? input.closest('form') : null;

                if (!input || !preview || !status || !counter || !pickButton || !clearButton || !form) {
                    return;
                }

                let selectedFiles = [];

                const syncInput = () => {
                    const transfer = new DataTransfer();
                    selectedFiles.forEach((file) => transfer.items.add(file));
                    input.files = transfer.files;
                };

                const render = () => {
                    preview.innerHTML = '';

                    if (!selectedFiles.length) {
                        status.textContent = 'Select one or more photos, then remove extras until only one remains.';
                        counter.textContent = 'No photo selected yet.';
                        preview.innerHTML = '<div class="col-12"><div class="alert alert-secondary mb-0">No photo selected yet.</div></div>';
                        return;
                    }

                    selectedFiles.forEach((file, index) => {
                        const card = document.createElement('div');
                        card.className = 'col-12 col-sm-6 col-lg-4';
                        const objectUrl = URL.createObjectURL(file);
                        card.innerHTML = `
                            <div class="card h-100 shadow-sm">
                                <img src="${objectUrl}" class="card-img-top" alt="Selected photo ${index + 1}" style="height: 180px; object-fit: cover;">
                                <div class="card-body d-flex flex-column gap-2">
                                    <div class="small text-muted text-truncate">${file.name}</div>
                                    <button type="button" class="btn btn-sm btn-outline-danger mt-auto" data-remove-photo="${index}">Remove</button>
                                </div>
                            </div>
                        `;
                        preview.appendChild(card);
                    });

                    status.textContent = selectedFiles.length === 1
                        ? 'One photo ready to submit.'
                        : 'More than one photo is selected. Remove extras so only one remains before submitting.';
                    counter.textContent = selectedFiles.length === 1
                        ? '1 photo selected'
                        : `${selectedFiles.length} photos selected`;

                    syncInput();
                };

                pickButton.addEventListener('click', () => {
                    input.click();
                });

                clearButton.addEventListener('click', () => {
                    selectedFiles = [];
                    input.value = '';
                    render();
                });

                input.addEventListener('change', (event) => {
                    const incomingFiles = Array.from(event.target.files || []);
                    selectedFiles = selectedFiles.concat(incomingFiles);
                    render();
                });

                preview.addEventListener('click', (event) => {
                    const removeButton = event.target.closest('[data-remove-photo]');
                    if (!removeButton) {
                        return;
                    }

                    const index = Number(removeButton.getAttribute('data-remove-photo'));
                    if (Number.isNaN(index)) {
                        return;
                    }

                    selectedFiles.splice(index, 1);
                    render();
                });

                form.addEventListener('submit', (event) => {
                    if (selectedFiles.length !== 1) {
                        event.preventDefault();
                        status.textContent = 'Please keep exactly one photo selected before submitting.';
                        preview.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    }
                });

                render();
            })();
        </script>



        <?php include "footer.php" ?>