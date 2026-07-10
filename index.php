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
                            <h4 class="mb-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- ========== Page Title End ========== -->


                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                        <h3 class="text-dark mt-2 mb-0">55</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-primary rounded">
                                            <iconify-icon icon="mingcute:box-line"
                                                class="fs-32 avatar-title text-primary"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Complite Orders</p>
                                        <h3 class="text-dark mt-2 mb-0">40</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-success rounded">
                                            <iconify-icon icon="mingcute:box-line"
                                                class="fs-32 avatar-title text-success"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Pending Orders</p>
                                        <h3 class="text-dark mt-2 mb-0">5</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-warning rounded">
                                            <iconify-icon icon="mingcute:box-line"
                                                class="fs-32 avatar-title text-warning"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-muted mb-0 text-truncate">Cancel Orders</p>
                                        <h3 class="text-dark mt-2 mb-0">10</h3>
                                    </div>

                                    <div class="col-6">
                                        <div class="ms-auto avatar-md bg-soft-danger rounded">
                                            <iconify-icon icon="mingcute:box-line"
                                                class="fs-32 avatar-title text-danger"></iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Pending Amount</h4>
                                <a href="party.php" class="btn btn-sm btn-light">
                                    View All
                                </a>
                            </div>
                            <!-- end card-header-->

                            <div class="card-body pb-1">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 table-centered">
                                        <thead>
                                            <th class="py-1">Party ID</th>
                                            <th class="py-1">Name</th>
                                            <th class="py-1">Mobile Number</th>
                                            <th class="py-1">Address</th>
                                            <th class="py-1">Pending Amount</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#US523</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Dan Adrick</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@omions</td>
                                            </tr>
                                            <tr>
                                                <td>#US652</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Daniel Olsen</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@alliates</td>
                                            </tr>
                                            <tr>
                                                <td>#US862</td>
                                                <td>20 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Jack Roldan</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Pending</span>
                                                </td>
                                                <td>@griys</td>
                                            </tr>
                                            <tr>
                                                <td>#US756</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Betty Cox</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@reffon</td>
                                            </tr>
                                            <tr>
                                                <td>#US420</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Carlos
                                                        Johnson</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Blocked</span>
                                                </td>
                                                <td>@bebo</td>
                                            </tr>
                                            <tr>
                                                <td>#US523</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Dan Adrick</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@omions</td>
                                            </tr>
                                            <tr>
                                                <td>#US652</td>
                                                <td>24 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Daniel Olsen</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@alliates</td>
                                            </tr>
                                            <tr>
                                                <td>#US862</td>
                                                <td>20 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Jack Roldan</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-warning">Pending</span>
                                                </td>
                                                <td>@griys</td>
                                            </tr>
                                            <tr>
                                                <td>#US756</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Betty Cox</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-success">Verified</span>
                                                </td>
                                                <td>@reffon</td>
                                            </tr>
                                            <tr>
                                                <td>#US420</td>
                                                <td>18 April, 2024</td>
                                                <td>
                                                    <span class="align-middle ms-1">Carlos
                                                        Johnson</span>
                                                </td>
                                                <td>
                                                    <span class="badge badge-soft-danger">Blocked</span>
                                                </td>
                                                <td>@bebo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">
                                    Recent Pending Order
                                </h4>

                                <a href="invoice.php" class="btn btn-sm btn-light">
                                    View All
                                </a>
                            </div>
                            <!-- end card-header-->

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0 table-centered">
                                        <thead>
                                            <th class="py-1">ID</th>
                                            <th class="py-1">Date</th>
                                            <th class="py-1">Party Name</th>
                                            <th class="py-1">Amount</th>
                                            <th class="py-1">Status</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#98521</td>
                                                <td>24 April, 2024</td>
                                                <td>Commisions</td>
                                                <td>$120.55</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#20158</td>
                                                <td>24 April, 2024</td>
                                                <td>Affiliates</td>
                                                <td>$9.68</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#36589</td>
                                                <td>20 April, 2024</td>
                                                <td>Grocery</td>
                                                <td>$105.22</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#95362</td>
                                                <td>18 April, 2024</td>
                                                <td>Refunds</td>
                                                <td>$80.59</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#75214</td>
                                                <td>18 April, 2024</td>
                                                <td>Bill Payments</td>
                                                <td>$750.95</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#98521</td>
                                                <td>24 April, 2024</td>
                                                <td>Commisions</td>
                                                <td>$120.55</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#20158</td>
                                                <td>24 April, 2024</td>
                                                <td>Affiliates</td>
                                                <td>$9.68</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#36589</td>
                                                <td>20 April, 2024</td>
                                                <td>Grocery</td>
                                                <td>$105.22</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#95362</td>
                                                <td>18 April, 2024</td>
                                                <td>Refunds</td>
                                                <td>$80.59</td>
                                                <td>
                                                    <span class="badge bg-success">Cr</span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>#75214</td>
                                                <td>18 April, 2024</td>
                                                <td>Bill Payments</td>
                                                <td>$750.95</td>
                                                <td>
                                                    <span class="badge bg-danger">Dr</span>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- End Container Fluid -->


<?php include "footer.php" ?>