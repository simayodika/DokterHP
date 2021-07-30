<?php
include "koneksi.php";
$id=$_GET['id'];
$sqlquery=("DELETE FROM service where id_service='$id'");
$query=mysqli_query($conn, $sqlquery);

?>
<script type="text/javascript">window.location = "viewService.php";</script>