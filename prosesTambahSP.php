
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$namaSp = $_POST['namaSP'];
$harga = $_POST['harga'];

$idJenis = $_POST['jenis'];
$idUser = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "INSERT INTO sparepart (id_user,nama_sparepart,harga,id_jenis_hp)
		              VALUE ('$idUser','$namaSp','$harga','$idJenis') ";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Sparepatberhasi ditambahkan",
              type: "success"
          }).then(function() {
              window.location = "tambahSparePart.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "Sparepat Gagal ditambahkan",
              type: "error"
          }).then(function() {
              window.location = "tambahSparePart.php";
          });
          </script>';}
}

