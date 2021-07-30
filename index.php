<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include_once"header.php";
    ?>
    <title>DokterHP | Home</title>
</head>
<!-- start page -->

<body>
    <!-- navigation menu -->
    <div class="navmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand font-weight-bold pl-5 my-0" href="#page-top"><img src="assets/img/logo.png" alt="Logo" width="150px height=85px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto pr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="#page-one">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pagetwo">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if(!isset($_SESSION['nama'])){
                            echo '<a class="nav-link" href="regis.php">Daftar Sekarang</a>';
                        }else{
                            echo '<a class="nav-link" href="viewSparepart.php">Daftar Harga</a>';
                        }
                        ?>
                        
                    </li>
                    
                    <li class="nav-item">
                        <?php 
                        if(isset($_SESSION['nama'])){
                            
                            echo'<a class="btn btn-light bg-danger btn-lg" href="logout.php" role="button">LOGOUT</a>';
                        }else{
                            echo'<a class="btn btn-light bg-white btn-lg" href="login.php" role="button">LOGIN</a>';
                        }

                        ?>
                        
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- jumbotron start -->
    <div class="pageone">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="assets/img/ilus.png" alt="Asset1" width="100%" height="100%">
            </div>
            <div class="col-md-5 pl-5">
                <div class="jumbotron my-5"><br><br>
                    <h2 class="font-weight-bold">Selamat datang!</h2><br>
                    <h5>Website resmi DokterHP</h5>
                    <hr class="my-4">
                    <p>Solusi Untuk Penyakit Handphone Anda</p>
                    <?php 
                        if(isset($_SESSION['nama'])){
                            echo '<a class="btn btn-light bg-warning " href="viewTransaksi.php" role="button">History Service</a>' ;
                        }else{
                            echo'<a class="btn btn-light bg-warning btn-lg" href="login.php" role="button">LOGIN</a>';
                        }

                        ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="pagetwo my-5" id="pagetwo">
        <div class="card text-center">
            <div class="card-header bg-warning">
                <h4 class="font-weight-bold">Apa saja Keuntungan mengunakan Jasa DokterHP?</h4>
                
                <center>
                    <hr>
                </center>
            </div>
            <div class="container my-2">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col-md-4">
                        <div class="card h-100">
                            
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">1. Harga terjangksau</h5>
                                <hr>
                                <p class="card-text">Kami Menawarkan harga terjangkau untuk permasalahan ponsel anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">2. Kualitas Terjamain</h5>
                                <hr>
                                <p class="card-text">Kami selalu menggunakan sprarepart dengankuaitas yang sangat bagus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">3. Status service realtime</h5>
                                <hr>
                                <p class="card-text">status service dapat dilihat langsung memaluli web ini</p>
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