
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$namaHP = $_POST['namaModel'];
$merk= $_POST['merk'];
$id_user = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "INSERT INTO jenis_hp (id_user,nama_hp,merk)
		              VALUE ('$id_user','$namaHP','$merk') ";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Model berhasi ditambahkan",
              type: "success"
          }).then(function() {
              window.location = "viewModel.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "model Gagal ditambahkan",
              type: "error"
          }).then(function() {
              window.location = "viewModel.php";
          });
          </script>';}
}

