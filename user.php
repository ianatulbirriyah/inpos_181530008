<?php
require "pdo/User.php"; //import file user.php
$objuser = new User(); //membuat objek user agar
?>

<script src ="js/user.js"></script>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                        <h3 class="title-5 m-b-35">User</h3>


                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="btn_tambah" data-toggle="modal"
                                data-target="#mediumModal">
                                <i class="zmdi zmdi-plus"></i>Data BAru</button>

                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>

                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Email</th>
                                    <th>Lev.user</th>
                                    <th>Aktif</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                            $no = 1;
                                            $query = $objuser->read();
                                            while ($data = $query->fetch(PDO::FETCH_OBJ)){
    
                                        ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data ->nama_user ?></td>
                                    <td> <span class="block-email"><?= $data ->email ?></span></td>
                                    <td class "desc"><?= $data->lev_user ?></td>
                                    <td>
                                        <?php 
                                                    if($data->sta_aktif == 1){
                                                        echo "<span class='status--process'>Ya</span>";
                                                    }else{
                                                        echo "Tidak";
                                                    }
                                            ?>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">

                                            <button id="ubah" class="item" data-toggle="modal" data-placement="top"
                                                title="Edit" onclick="get_data(<?= $data->id_user ?>) " data-target="#mediumModal">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete" onclick="hapus(<?= $data->id_user ?>) ">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>

                                        </div>
                                    </td>
                                    </td>
                                </tr>

                                <?php } ?>



                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "input_user.php" ?>