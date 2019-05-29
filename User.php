<?php 

class User{
    public function __construct(){
       require "conn.php";      //import file conn.php
       $this->db = $koneksi;    //deklarasi variabel $this -> db untuk terkoneksi dengan daabase
    }
    public function create($id_user, $nama_user,$email, $pass, $lev_user){
        try{
            $query ="INSERT INTO pos_user VALUES('$id_user','$nama_user','$email', md5('$pass'),'$lev_user','1')";
            $stmt =$this->db->prepare($query);
            $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    } 
    public function read(){
        try{
            $query ="SELECT * FROM pos_user ORDER BY id_user ASC";
            $stmt =$this->db->prepare($query);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_id($id_user){
        try{
            $query ="SELECT * FROM pos_user WHERE id_user='$id_user'";
            $stmt =$this->db->prepare($query);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function update($id_user,$nama_user,$email,$pass,$lev_user){
        try{
            $query ="UPDATE pos_user SET 
            nama_user = '$nama_user', lev_user='$lev_user', email='$email'
            WHERE id_user='$id_user' ";
            $stmt =$this->db->prepare($query);
            $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function delete($id_user){
        try{
            $query = " DELETE FROM pos_user WHERE id_user='$id_user' ";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
    
}


?>