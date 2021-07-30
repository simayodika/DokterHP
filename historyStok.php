
<!DOCTYPE html>
<html>
<head>
    <?php include_once "header.php" ;
    include_once "accesControl.php" ;
     include "koneksi.php";

    ?>
    <title>List SparePart | DokterHP</title>
</head>
<body>
    <script src="main.js"></script>
    <br>
    <?php
    include_once"slidingMenu.php";
    ?>
    <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">History stok</h4>
            <center>
                <hr>
                <h5>Selamat Datang, <?php echo $_SESSION['nama']; ?></h>

            </center>
        </div>
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
                            <th>Nama SparePart</th>
                            <th>jumlah</th>
                            <th>keterangan</th>
                            <th>user</th>
                            <th>jam input</th>
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
                        $sql="SELECT * FROM history_stock INNER JOIN sparepart ON history_stock.id_sparepart = sparepart.id_sparepart INNER JOIN user ON history_stock.id_user= user.id_user INNER JOIN jenis_hp ON sparepart.id_jenis_hp = jenis_hp.id_jenis_hp  ORDER BY created_at  desc limit $posisi,$batas";
                        $hasil=mysqli_query($conn,$sql);
                        
                        $jmldata    = mysqli_num_rows($hasil);
                        $jmlhalaman = ceil($jmldata/$batas);
                        while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["nama_sparepart"]." ".$data['nama_hp']; ?></td>
                                <td><?php echo $data["jumlah"];   ?></td>
                                <td><?php echo $data["keterangan"];   ?></td>
                                <td><?php echo $data["nama_user"];   ?></td>
                                <td><?php echo $data["created_at"];   ?></td>
                             

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