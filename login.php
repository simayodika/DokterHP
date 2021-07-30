<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include_once"header.php";
    ?>
    <title>Login | Dokter Hp</title>
</head>
<!-- start page -->
<body>
    <div class="navmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand font-weight-bold pl-5 my-0" href="index.php"><img src="assets/img/.png" alt="Logo" width="150px height=85px"></a>
          
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="regis.php">Daftar Sekarang</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- login title -->
    <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Login</h4>
            <center>
                <hr>
            </center>
            <h6 class="font-weight-light">Laman Login DokterHp</h6>
        </div>
    </div>
    <!-- login page start -->
    <div class="pagelogin">
        <div class="container my-2">
            <div class="row justify-content-center my-5">
                <div class="col-md-6">
                    <form action="auth.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Isi dengan Username yang sudah didaftarkan</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            <small id="emailHelp" class="form-text text-muted">Isi dengan password yang sudah didaftarkan</small>
                        </div>
                        <button type="submit" class="btn btn-warning font-weight-bold">SUBMIT</button>
                        <p>Belum Punya Akun ? <a href="regis.php">Registrasi Disini</a> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    include_once"footer.php";
    ?>
</body>

</html>