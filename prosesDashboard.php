
<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";

$nama = $_POST['nama'];
$sp = $_POST['sparepart'];
$svc = $_POST['service'];
$id_user = $_SESSION['id_user'];
$total_harga=0;
$total = count($sp);


if(isset($_POST['kirim'])) {
  $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
  $shuffle  = substr(str_shuffle($karakter), 0, 5);
  $depan = date("Ymdhisa");
  $invoice = $depan.$shuffle;

   for($i=0; $i<$total; $i++){
        $querySp = "SELECT harga FROM sparepart where id_sparepart='$sp[$i]' ";
        $hasilSp = mysqli_query($conn, $querySp);
        $a =mysqli_fetch_array($hasilSp);

        $querySvc = "SELECT harga FROM service where id_service='$svc[$i]' ";
        $hasilSvc = mysqli_query($conn, $querySvc);
        $b =mysqli_fetch_array($hasilSvc);
        $harga= $a['harga'] + $b['harga'];
        $total_harga+=$harga;


        $query1 = "INSERT INTO detail_transaksi (no_invoice,id_sparepart,id_service,total_harga)
                  VALUE ('$invoice','$sp[$i]','$svc[$i]','$harga') ";
        $hasil1 = mysqli_query($conn, $query1);
    }
    $query = "INSERT INTO transaksi (no_invoice,id_user,total_harga,id_pelanggan)
                  VALUE ('$invoice','$id_user','$total_harga','$nama') ";
    $hasil = mysqli_query($conn, $query);

if($hasil){
  $success=1;
}

if($success==1){
	echo '<script>
            swal.fire({
              title: "Berhasil ",
              text: "Data transaksi berhasi ditambahkan",
              type: "success"
          }).then(function() {
              window.location = "dashboard.php";
          });
          </script>';
      }else{
      	echo '<script>
            swal.fire({
              title: "Gagal ",
              text: "data transaksi Gagal ditambahkan",
              type: "error"
          }).then(function() {
              window.location = "dashboard.php";
          });
          </script>';}
}

