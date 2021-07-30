<?php
include "koneksi.php";
$id=$_GET['id'];
$sqlquery=("DELETE FROM jenis_hp where id_jenis_hp='$id'");
$query=mysqli_query($conn, $sqlquery);

?>
<script type="text/javascript">window.location = "viewModel.php";</script>