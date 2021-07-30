
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];


$id_user = $_SESSION['id_user'];

if(isset($_POST['kirim'])) {

$query = "INSERT INTO history_stock (id_user,jumlah,keterangan,id_sparepart)
		              VALUE ('$id_user','$jumlah','$ket','$id') ";
$hasil = mysqli_query($conn, $query);
if($hasil){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Stok berhasi ditambahkan",
              type: "success"
          }).then(function() {
              window.location = "viewSparepart.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "stok Gagal ditambahkan",
              type: "error"
          }).then(function() {
              window.location = "viewSparepart.php";
          });
          </script>';}
}

