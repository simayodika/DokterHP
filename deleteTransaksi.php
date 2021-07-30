<?php
include "koneksi.php";
$id=$_GET['id'];

$sqlquery=("SELECT * FROM transaksi where id_transaksi='$id'");
$query=mysqli_query($conn, $sqlquery);
$a = mysqli_fetch_array($query);
$invoice = $a['no_invoice'];



$sqlquery1=("DELETE FROM transaksi where id_transaksi='$id'");
$query1=mysqli_query($conn, $sqlquery1);


$sqlquery2=("DELETE FROM detail_transaksi where no_invoice='$invoice'");
$query2=mysqli_query($conn, $sqlquery2);

?>
<script type="text/javascript">window.location = "historyTransaksi.php";</script>