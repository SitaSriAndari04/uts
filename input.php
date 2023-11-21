<?php
$db = mysqli_connect("localhost", "root", "", "projek_uts");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];
$jenis_seni = $_POST['jenis_seni'];
$alamat_rumah = $_POST['alamatrumah'];
$waktu_seni = $_POST['waktu'];
$tanggal_seni = $_POST['tanggalseni'];


$query = "INSERT INTO agustusan VALUES (NUll,'$nama','$password','$email','$jenis_seni','$alamat_rumah','$waktu_seni','$tanggal_seni')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>