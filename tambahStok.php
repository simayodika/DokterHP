

<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once"header.php"  ;
include_once"koneksi.php"  ;
include_once"accesControl.php";

?>

<title>Tambah Barang | DokterHP</title>
</head>
<!-- start page -->

<body>
    <script src="main.js"></script>
    <!--page title -->
    <?php
    include_once"slidingMenu.php";
    ?>
    <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Tambah Stok</h4>
            <center>
                <hr>
                <h5>Selamat Datang, <?php echo $_SESSION['nama']; ?></h>

            </center>
        </div>
    </div>
    <!-- page start -->
    <div class="pageregister">
        <div class="container my-2">
            <div class="row">
                <div class="col-md-3 align-self-center">
                </div>
                <div class="col-md-6">
                    <div class="card mt-2">
                        <div class="card-header bg-dark text-white text-center">
                            Tambah Stok
                        </div>
                         <div class="card-body">
                            <form action="prosesTambahStok.php" method="post">
                                <div class="form-group">
                                	<?php 
                                	$aa=$_GET['id'];
                                	$sql="SELECT * FROM sparepart INNER JOIN jenis_hp ON sparepart.id_jenis_hp = jenis_hp.id_jenis_hp Where id_sparepart=$aa";
                        				$hasil=mysqli_query($conn,$sql);
                        				$a=mysqli_fetch_array($hasil);

                                	?>
                                   <label><?php echo $a['nama_sparepart']." ".$a['nama_hp'];?></label><br>
                                    <label>Jumlah :</label>
                                    <input type="text" name="jumlah" class="form-control" placeholder="jumlah">
                                    <label>Keterangan :</label><br>
                                    <textarea name="ket"></textarea>

                                    <input class="invisible" type="text" name="id" class="form-control" value="<?php echo $aa?>">
                                   
                                </div>
                                <button name="kirim" type="submit" class="btn btn-success font-weight-bold"> Tambah Sparepart</button>     
                            </form>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>

          
    <?php 
    include_once"footer.php";
    ?>
</body>

</html>