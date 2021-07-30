
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$namaSv = $_POST['namaService'];
$harga = $_POST['harga'];
$idUser = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "INSERT INTO service (id_user,nama_service,harga)
		              VALUE ('$idUser','$namaSv','$harga') ";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Jenis service berhasi ditambahkan",
              type: "success"
          }).then(function() {
              window.location = "tambahService.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "jenis service Gagal ditambahkan",
              type: "error"
          }).then(function() {
              window.location = "tambahService.php";
          });
          </script>';}
}

