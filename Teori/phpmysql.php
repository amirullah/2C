<?php 
$connect = mysqli_connect("localhost","root","","db_web2022");
if($connect){
    echo "Database terkoneksi"."<br>";
}else{
    echo "Gagal koneksi database";
}

// mysqli_select_db($connect,"db_web2022");

$hasil = mysqli_query($connect, "select * from tb_mahasiswa");
while ($row = mysqli_fetch_array($hasil)) {
    echo "nama : " . $row["nama"]."<br>"; //array asosiatif
    echo " Nim : " . $row[1]."<br>";  //array numeris
    echo " Keahlian : " . $row["keahlian"]."<br>";  //array numeris
}

?>