
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
            <h4 class="font-weight-bold">Tambah Model Hp</h4>
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
                            Masukkan Data Sparepart
                        </div>
                         <div class="card-body">
                            <form action="prosesTambahModel.php" method="post">
                                <div class="form-group">
                                    <label>Nama Model :</label>
                                    <input type="text" name="namaModel" class="form-control" placeholder="Masukkan Namamu Disini">
                                    <label>Merk :</label>
                                    <input type="text" name="merk" class="form-control" placeholder="Masukkan Emailmu Disni">
                                   
                                    
                                </div>
                                <button name="kirim" type="submit" class="btn btn-success font-weight-bold"> Tambah Model HP</button>     
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