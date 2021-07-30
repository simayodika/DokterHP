
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
$id =$_POST['id'];

$idJenis = $_POST['jenis'];
$idUser = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "UPDATE `sparepart` SET `nama_sparepart`='$namaSp',`harga`='$harga',`id_user`='$idUser',`id_jenis_hp`='$idJenis' WHERE id_sparepart = $id";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Sparepatberhasi diedit",
              type: "success"
          }).then(function() {
              window.location = "viewSparepart.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "Sparepat Gagal diedit",
              type: "error"
          }).then(function() {
              window.location = "viewSparepart.php";
          });
          </script>';}
}

