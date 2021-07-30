
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once"header.php"  ;
include_once"koneksi.php"  ;
include_once"accesControl.php";

$id=$_GET['id'];
$sqlquery=("SELECT * FROM jenis_hp WHERE id_jenis_hp='$id'");
$query=mysqli_query($conn, $sqlquery);
$a=mysqli_fetch_array($query);
?>

<title>edit Model | DokterHP</title>
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
            <h4 class="font-weight-bold">Edit Model Hp</h4>
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
                            edit Data Modelhp
                        </div>
                         <div class="card-body">
                            <form action="prosesEditModel.php" method="post">
                                <div class="form-group">
                                    <label>Nama Model :</label>
                                    <input type="text" name="namaModel" class="form-control" value="<?php echo $a['nama_hp'];?>">
                                    <label>Merk :</label>
                                    <input type="text" name="merk" class="form-control" value="<?php echo $a['merk'];?>">
                                    <input class="invisible" type="text" name="id" class="form-control" value="<?php echo $id?>">
                                    
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