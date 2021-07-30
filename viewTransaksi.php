

<!DOCTYPE html>
<html>
<head>
    <?php include_once "header.php" ;
    include_once "accesControl.php" ;
     include "koneksi.php";

    ?>
    <title>History transaksi | DokterHP</title>
</head>
<body>
    <script src="main.js"></script>
    
     <div class="navmenu">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <a class="navbar-brand font-weight-bold pl-5 my-0" href="#page-top"><img src="assets/img/.png" alt="Logo" width="150px height=85px"></a>
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
                            echo '<a class="nav-link" href="listharga.php">Daftar Harga</a>';
                        }
                        ?>
                        
                    </li>
                    
                    <li class="nav-item">
                        <?php 
                        if(isset($_SESSION['nama'])){
                            
                            echo'<a class="btn btn-light bg-red btn-lg" href="logout.php" role="button">LOGOUT</a>';
                        }else{
                            echo'<a class="btn btn-light bg-white btn-lg" href="login.php" role="button">LOGIN</a>';
                        }

                        ?>
                        
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container my-2">
        <div class="row">
            <div class="col-md-1 align-self-center">
                <div class="col-md-6">
                    
                </div>
            </div>
            <div class="col-md-10">
                 <div class="card mt-2">
                    
                    <table class="table table-stripped table-hover">
                        <br>
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>NO Invoice</th>
                            <th>TotalHarga</th>
                            <th>status</th>
                            <th>Tanggal transaksi</th>
                        </tr>
                        </thead>
                        <?php
                        $id_user=$_SESSION['id_user'];
                       
                        $batas   = 10;
                        $halaman = @$_GET['halaman'];
                            if(empty($halaman)){
                                $posisi  = 0;
                                $halaman = 1;
                            }
                            else{
                                $posisi  = ($halaman-1) * $batas;
                            }

                        $no = $posisi+1;
                        $sql="SELECT * FROM transaksi INNER JOIN detail_transaksi ON transaksi.no_invoice = detail_tansaksi.no_invoice  ORDER BY id_sparepart  desc limit $posisi,$batas Where id_user=$id_user ";
                        $hasil=mysqli_query($conn,$sql);
                         $jmldata    = mysqli_num_rows($hasil);
                        $jmlhalaman = ceil($jmldata/$batas);
                        while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["no_invoice"]; ?></td>
                                <td><?php echo $data["total_harga"];   ?></td>
                                <td><?php echo $data["status"];   ?></td>
                                
                                <td><?php echo $data["created_at"];   ?></td>
                                  </td>

                            </tr>
                            </tbody>
                            <?php
                            $no++;
                        }
                        ?>
                    </table>
                    <hr>

                    <div class="text-center">
                        <ul class="pagination">
                            <?php
                            for($i=1;$i<=$jmlhalaman;$i++) {
                                if ($i != $halaman) {
                                    echo "<li class='page-item'><a class='page-link' href='history.php?halaman=$i'>$i</a></li>";
                                } else {
                                    echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once "footer.php"?>
</body>
</html>
