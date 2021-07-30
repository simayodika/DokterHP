
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
            <h4 class="font-weight-bold">Tambah barang</h4>
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
                            <form action="prosesTambahSP.php" method="post">
                                <div class="form-group">
                                    <label>Nama SparePArt :</label>
                                    <input type="text" name="namaSP" class="form-control" placeholder="Masukkan Namamu Disini">
                                    <label>Harga :</label>
                                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Emailmu Disni">
                                    <label>Nama HP :</label><br>
                                    <select class="form-control" name="jenis" id="jenis">
                                          <option disabled selected> Pilih </option>
                                         <?php 
                                          $sql = "SELECT * FROM jenis_hp";
                                          $hasil=mysqli_query($conn,$sql);
                                          while ($data=mysqli_fetch_array($hasil)) {
                                         ?>
                                           <option value="<?=$data['id_jenis_hp']?>"><?=$data['nama_hp']?></option> 

                                         <?php
                                          }
                                         ?>
                                    </select>
                                    Model HP belum ada?<a href="tambahModel.php">KlikDisini</a>
                                   
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