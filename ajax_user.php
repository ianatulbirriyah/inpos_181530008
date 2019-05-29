<?php 
    if($_POST["aksi"]== "simpan"){
        require "../pdo/User.php";
        $objuser = new User();

        $id_user    = $_POST["id_user"];
        $nama_user  = $_POST["nama_user"];
        $email      = $_POST["email"];
        $pass       = "123456";
        $lev_user   = $_POST["lev_user"];
      

        $objuser->create($id_user, $nama_user, $email, $pass, $lev_user);
        $msg = "success";

        $callback  = array(
            'validasi'=>$msg
        );
        echo json_encode($callback);
    }

    if($_POST["aksi"] == "hapus"){
        require "../pdo/User.php";
        $objuser = new User();
        $id_user    = $_POST['id_user'];

        $objuser->delete($id_user);
        $msg = "success";

        $callback  = array(
            'validasi'=>$msg
        );
        echo json_encode($callback);
    }

    if($_POST["aksi"] == "get_data"){
        require "../pdo/User.php";
        $objuser = new User();
        $id_user    = $_POST['id_user'];

        $query  = $objuser->read_id($id_user);
        if($row = $query->fetch(PDO::FETCH_OBJ)){   
            $nama_user  = $row->nama_user;
            $email      = $row->email;
            $lev_user   = $row->lev_user;
            $msg        = "success";
        }else {
            $msg        = "failed";
        }

        $callback  = array(
            'id_user'=>$id_user,
            'nama_user'=>$nama_user,
            'email'=>$email,
            'lev_user'=>$lev_user,
        );
        echo json_encode($callback);
    }

    if($_POST["aksi"]== "ubah"){
        require "../pdo/User.php";
        $objuser = new User();

        $id_user    = $_POST["id_user"];
        $nama_user  = $_POST["nama_user"];
        $email      = $_POST["email"];
        $pass       = "123456";
        $lev_user   = $_POST["lev_user"];
      

        $objuser->update($id_user, $nama_user, $email, $pass, $lev_user);
        $msg = "success";

        $callback  = array(
            'validasi'=>$msg
        );
        echo json_encode($callback);
    }

?>