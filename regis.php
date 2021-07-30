
<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once"header.php"  ; ?>
    <title>Daftar | ParkirKU </title>
</head>
<!-- start page -->

<body>
    <script src="main.js"></script>
    <div class="navmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand font-weight-bold pl-5 my-0" href="index.php"><img src="assets/img/.png" alt="Logo" width="150px height=85px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#pagetwo">Tentang Kami</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="regis.php">Daftar Sekarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light bg-white btn-lg" href="login.php" role="button">LOGIN</a>
                        
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- register title -->
   <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Registrasi</h4>
            <center>
                <hr>
            </center>
            <h6 class="font-weight-light">Laman Registrasi DokterHP</h6>
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
                            <form action="prosesRegis.php" method="post">
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
                                <button name="daftar" type="submit" class="btn btn-warning font-weight-bold" onclick="">DAFTAR SEKARANG</button>
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