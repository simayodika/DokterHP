
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$namaM = $_POST['namaModel'];
$merk = $_POST['merk'];
$id =$_POST['id'];

$idUser = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "UPDATE `jenis_hp` SET `nama_hp`='$namaM',`merk`='$merk',`id_user`='$idUser' WHERE id_jenis_hp = $id";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "model patberhasi diedit",
              type: "success"
          }).then(function() {
              window.location = "viewService.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "modell Gagal diedit",
              type: "error"
          }).then(function() {
              window.location = "viewService.php";
          });
          </script>';}
}

