<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>In Pos</title>

    <!-- Fontfaces CSS-->
    <link href="cool-admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Bootstrap CSS-->
    <link href="cool-admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="cool-admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="cool-admin/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cool-admin/css/theme.css" rel="stylesheet" media="all">
    <script src ="js/jquery-3.3.1.min.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
       <?php include "content-left-menu.php" ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
           <?php include "header.php" ?>
         
           
           <?php include "content-left.php" ?>
            <!-- END HEADER DESKTOP-->

        <?php 
        //include "content-dashboard.php"
        if(@$_GET['page'] == "member"){
           include "view/master/member.php"; 
        }else if(@$_GET['page'] == "supplier"){
            include "view/master/supplier.php";
        }else if(@$_GET['page'] == "barang"){
            include "view/master/barang.php";
        }else if(@$_GET['page'] == "pembelian"){
            include "view/transaksi/pembelian.php";
        }else if(@$_GET['page'] == "penjualan"){
            include "view/transaksi/penjualan.php";
        }else if(@$_GET['page'] == "user"){
            include "view/pengaturan/user.php";
        }else if(@$_GET['page'] == "ubah_password"){
            include "view/pengaturan/ubah_password.php";
        }else{
            include "content-dashboard.php";
        }
        ?>
        
           <?php include "footer.php" ?>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="cool-admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="cool-admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="cool-admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="cool-admin/vendor/slick/slick.min.js">
    </script>
    <script src="cool-admin/vendor/wow/wow.min.js"></script>
    <script src="cool-admin/vendor/animsition/animsition.min.js"></script>
    <script src="cool-admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="cool-admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="cool-admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="cool-admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="cool-admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="cool-admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="cool-admin/vendor/select2/select2.min.js">
    </script>
    <script src="cool-admin/vendor/vector-map/jquery.vmap.js"></script>
    <script src="cool-admin/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="cool-admin/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="cool-admin/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="cool-admin/js/main.js"></script>

</body>

</html>
<!-- end document-->

<!--
    keterangan :
    if(@$_get['page'] == soal-uts){
        jika sebuah variabel / parameter GET dengan nama page bernilai soal-uts maka 
        akan menjalankan perintah

    include "view/saol-uts.php">
    menyalin title soal-uts .php yang berada didalam folder view

    @ digunakan untuk menghilangkan pesan error
 -->