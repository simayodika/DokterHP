
<!DOCTYPE html>
<html lang="en">

<head>
<?php
 include_once"header.php"  ; 
 include_once"accesControl.php";?>
    <title>Tambah Staff | ParkirKU </title>
</head>
<!-- start page -->

<body>
    <script src="main.js"></script>
    <?php
    include_once"slidingMenu.php";
    ?>
    <!-- register title -->
   <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Tambah Staff</h4>
            <center>
                <hr>
            </center>
            <h6 class="font-weight-light">Laman Tambah Staff DokterHP</h6>
        </div>
    </div>
    <!-- register page start -->
    <div class="pageregister">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-3 align-self-center">
                </div>
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-header bg-dark text-white text-center">
                            Daftar 
                        </div>
                        <div class="card-body">
                            <form action="prosesRegisStaff.php" method="post">
                                <div class="form-group">
                                    <label>Nama :</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Namamu Disini">
                                    <label>Email :</label>
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan Emailmu Disni">
                                    <label>No HP :</label>
                                    <input type="text" name="nohp" class="form-control" placeholder="Masukkan Nomer HPmu Disin">
                                    <label>Alamat :</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukkan Alamatmu Disini"></textarea>
                                    <label>Username :</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Usernamemu Disini">
                                    <label>Password :</label>
                                    <input type="Password" name="pass" class="form-control" placeholder="********">
                                   
                                </div>
                                <button name="daftar" type="submit" class="btn btn-warning font-weight-bold" onclick="">Tambah Satff </button>
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