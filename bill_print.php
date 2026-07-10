<?php session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: signup.php");
    exit;
}?>  

<?php
include_once 'db_con.php';

$id = $_GET['i_id'] ?? null;

?>

<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from html.laralink.com/invoma/general_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2026 03:58:35 GMT -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>Invoice - G1 Fashion</title>
    <link rel="stylesheet" href="assets/css/invoice_style.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicons.ico">



</head>

<body>
    <!-- <div class="tm_container"> -->
    <div class="">
        <div class="tm_invoice_wrap">
            <div class="tm_invoice tm_style1 tm_type1" id="tm_download_section">


                <?php if ($id) {

                    $query = "SELECT * FROM `invoice` WHERE i_id='$id'";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row1 = mysqli_fetch_array($query_run)) {

                            $date = $row1['date'];
                            $dateObject = new DateTime($date);
                            $dynamicDate = $dateObject->format('d-m-Y');
                ?>



                <div class="tm_invoice_in">
                    <div class="tm_invoice_head tm_top_head tm_mb10 tm_align_center">
                        <div class="tm_invoice_left">
                            <div class="tm_logo"><img src="assets/img/logo.svg" alt="Logo"></div>
                        </div>
                        <div class="tm_invoice_right tm_text_right tm_mobile_hide">
                            <div class="tm_f50 tm_text_uppercase tm_white_color">Invoice</div>
                        </div>
                        <div class="tm_shape_bg tm_accent_bg tm_mobile_hide"></div>
                    </div>
                    <div class="tm_invoice_info tm_mb25">
                        <div class="tm_card_note tm_mobile_hide">Mobile Number: <b class="tm_primary_color">7043772329 /
                                7043772329</b></div>
                        <div class="tm_invoice_info_list tm_white_color">
                            <p class="tm_invoice_number tm_m0">Card No: <b><?php echo $row1['card_no']; ?></b></p>
                            <p class="tm_invoice_date tm_m0">Date: <b><?php echo $dynamicDate; ?></b></p>
                        </div>
                        <div class="tm_invoice_seperator tm_accent_bg"></div>
                    </div>

                    <div class="tm_invoice_left tm_mb20">
                        <p class="tm_mb2"><b class="tm_primary_color">Address:</b>
                            81/82-AB, 83AB, 1STFLOOR, JAYANANDIND, ANJAMAFARM, DUMBHAL, SURAT - 395002
                        </p>

                    </div>
                    <div class="tm_table tm_style1">
                        <div class="">
                            <div class="tm_table_responsive">
                                <table>
                                    <thead>
                                        <tr class="tm_accent_bg">
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">No</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color">Description</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Fabric</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Matching No
                                            </th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Metre</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Total Metre
                                            </th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Rate</th>
                                            <th class="tm_width_1 tm_semi_bold tm_white_color text_center">Total Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="cs-text_center">1</td>

                                            <td class="cs-primary_color"><b><?php echo $row1['details']; ?></b></td>
                                            <td class="cs-text_center cs-primary_color">
                                                <b><?php echo $row1['fabric']; ?></b> </td>
                                            <td class="cs-text_center">-</td>
                                            <td class="cs-text_center">-</td>
                                            <td class="cs-text_center cs-primary_color">₹
                                                <?php echo $row1['total_metre'] ?></td>
                                            <td class="cs-text_center cs-primary_color">₹ <?php echo $row1['rate'] ?>
                                            </td>
                                            <td class="cs-text_center cs-primary_color"><b>₹
                                                    <?php echo $row1['total_amount'] ?></b></td>
                                        </tr>
                                        <?php
                                                $total_matching = explode(', ', $row1['total_matching']); // Laptop,Mobile,Tablet
                                                $matching_no = explode(', ', $row1['matching_no']); // Laptop,Mobile,Tablet
                                                $cut = explode(', ', $row1['cut']); // Laptop,Mobile,Tablet
                                                $details = explode(', ', $row1['details']); // Laptop,Mobile,Tablet

                                                for ($i = 0; $i < count($matching_no); $i++) {
                                                ?>


                                        <tr>

                                            <td class="cs-text_center"><?php echo $i + 2; ?></td>
                                            <td>-</td>
                                            <td class="cs-text_center">-</td>
                                            <td class="cs-text_center"><?php echo htmlspecialchars($matching_no[$i]); ?>
                                            </td>
                                            <td class="cs-text_center"><?php echo htmlspecialchars($cut[$i]); ?></td>
                                            <td class="cs-text_center">-</td>
                                            <td class="cs-text_center">-</td>
                                            <td class="cs-text_center">-</td>

                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer tm_border_top tm_mb15 tm_m0_md">
                            <div class="tm_left_footer">
                                <p class="tm_mb2"><b class="tm_primary_color">Terms & Conditions:</b></p>
                                <p class="tm_m0"><b>30 - 45 Days Payment Due*</b></p>
                            </div>
                            <div class="tm_right_footer">
                                <table class="tm_mb15">
                                    <tbody>
                                        <tr class="tm_gray_bg ">
                                            <td class="tm_width_3 tm_primary_color tm_bold">Total Amount:</td>
                                            <td class="tm_width_3 tm_primary_color tm_bold tm_text_right">₹
                                                <?php echo $row1['total_amount'] ?></td>
                                        </tr>
                                        <!-- <tr class="tm_gray_bg">
                                            <td class="tm_width_3 tm_primary_color">Paid:</td>
                                            <td class="tm_width_3 tm_primary_color tm_text_right">₹
                                                <?php echo $row1['pay_amount'] ?></td>
                                        </tr>
                                        <tr class="tm_accent_bg">
                                            <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_white_color">Balance
                                                Due: </td>
                                            <td
                                                class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_white_color tm_text_right">
                                                ₹ <?php echo $row1['pending_amount'] ?></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tm_invoice_footer tm_type1">
                            <div class="tm_left_footer"></div>
                            <div class="tm_right_footer">
                                <!-- <div class="tm_sign tm_text_center">
                                    <img src="assets/img/sign.svg" alt="Sign">
                                    <p class="tm_m0 tm_ternary_color">Jhon Donate</p>
                                    <p class="tm_m0 tm_f16 tm_primary_color">Accounts Manager</p>
                                </div> -->


                                <div class="tm_invoice_btns tm_hide_print">
                                    <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
                                        <span class="tm_btn_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                                <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                                <path
                                                    d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24"
                                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                                    stroke-width="32" />
                                                <circle cx="392" cy="184" r="24" fill='currentColor' />
                                            </svg>
                                        </span>
                                        <span class="tm_btn_text">Print</span>
                                    </a>
                                    <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
                                        <span class="tm_btn_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                        </span>
                                        <span class="tm_btn_text">Download</span>
                                    </button>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>


                <?php
                        }
                    }
                }
                ?>


            </div>

        </div>
    </div>


    
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jspdf.min.js"></script>
    <script src="assets/js/html2canvas.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v833ccba57c9e4d2798f2e76cebdd09a11778172276447"
        integrity="sha512-57MDmcccJXYtNnH+ZiBwzC4jb2rvgVCEokYN+L/nLlmO8rfYT/gIpW2A569iJ/3b+0UEasghjuZH/ma3wIs/EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"6f756f02820545e3be40ddc6eb6154c3","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>


    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'a0c6e59a1a6dca4b',t:'MTc4MTU4MjMxNA=='};var a=document.createElement('script');a.src='../cdn-cgi/challenge-platform/h/g/scripts/jsd/8fc8ed1d8752/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

<!-- Mirrored from html.laralink.com/invoma/general_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2026 03:58:37 GMT -->

</html>