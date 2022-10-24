<?php 
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "db_web2022");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if(empty($username) || empty($_POST['password'])){
        echo "<script>alert('Username atau password tidak boleh kosong !'); window.location='index.php'</script>";
    }else{
        $query   = mysqli_query($connect,"SELECT * FROM tb_mahasiswa WHERE nim='$username' && password='$password'");
        $data = mysqli_fetch_array($query);
        if($data){
            $_SESSION['usernamexyz'] = $username; //Session
            header('location:home.php');
        }else{
            echo "<script>alert('Anda gagal'); window.location='index.php'</script>";
        }
    }
?>