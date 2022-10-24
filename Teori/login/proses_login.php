<?php 
    $connect = mysqli_connect("localhost", "root", "", "db_web2022");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if(empty($username) || empty($password)){
        echo "Username atau Password tidak boleh kosong";
    }else{
        $query   = mysqli_query($connect,"SELECT * FROM tb_mahasiswa WHERE nim='$username' && password='$password'");
        $data = mysqli_fetch_array($query);

        if($data){
            echo "Anda Berhasil Login";
        }else{
            echo "Anda gagal";
        }
    }
?>