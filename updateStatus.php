<?php
include "koneksi.php";
$id=$_GET['id'];
$sqlquery=("SELECT * FROM transaksi where id_transaksi='$id'");
$query=mysqli_query($conn, $sqlquery);
$a = mysqli_fetch_array($query);
$status=$a['status'];

if($status=='Sedang Dikerjakan'){
$sqlquery=("UPDATE `transaksi` SET `status`='Bisa Diambil' WHERE id_transaksi='$id'");
$query=mysqli_query($conn, $sqlquery);
}else{
	$sqlquery=("UPDATE `transaksi` SET `status`='Selesai' WHERE id_transaksi='$id'");
$query=mysqli_query($conn, $sqlquery);
}

?>
<script type="text/javascript">window.location = "historyTransaksi.php";</script>