<?php
include "koneksi.php";
$id=$_GET['id'];
$sqlquery=("DELETE FROM sparepart where id_sparepart='$id'");
$query=mysqli_query($conn, $sqlquery);

?>
<script type="text/javascript">window.location = "viewSparepart.php";</script>