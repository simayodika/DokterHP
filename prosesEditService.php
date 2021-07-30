
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$namaSvc = $_POST['namaService'];
$harga = $_POST['harga'];
$id =$_POST['id'];

$idUser = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "UPDATE `service` SET `nama_service`='$namaSvc',`harga`='$harga',`id_user`='$idUser' WHERE id_service = $id";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Sparepatberhasi diedit",
              type: "success"
          }).then(function() {
              window.location = "viewService.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "Sparepat Gagal diedit",
              type: "error"
          }).then(function() {
              window.location = "viewService.php";
          });
          </script>';}
}

