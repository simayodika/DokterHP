 
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
            <h4 class="font-weight-bold">Sparepart</h4>
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
                    <div class="col-md-6">
                        <a  href="tambahSparePart.php" class="btn btn-info font-weight-bold"> Tambah SparePart</a>
                    </div>
                    <table class="table table-stripped table-hover">
                        <br>
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama SparePart</th>
                            <th>Merk</th>
                            <th>stok</th>
                            <th>Harga</th>
                            <th></th>
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
                        $sql="SELECT * FROM sparepart INNER JOIN jenis_hp ON sparepart.id_jenis_hp = jenis_hp.id_jenis_hp  ORDER BY id_sparepart  desc limit $posisi,$batas";
                        $hasil=mysqli_query($conn,$sql);
                         $jmldata    = mysqli_num_rows($hasil);
                        $jmlhalaman = ceil($jmldata/$batas);
                        while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["nama_sparepart"]." ".$data['nama_hp']; ?></td>
                                <td><?php echo $data["merk"];   ?></td>
                                <td><?php echo $data["stok"];   ?></td>
                                <td><?php echo $data["harga"];   ?></td>
                                <?php if($_SESSION['level'] == "staff" ||$_SESSION['level'] == "super"){?>
                    
                                <td><a href="deleteSparepart.php?id=<?php echo $data['id_sparepart']; ?>
                                    " onclick="return confirm('Apakah anda yakin menghapus?')">Delete </a> |
                                    <a href="editSparepart.php?id=<?php echo $data['id_sparepart']; ?>">Update</a> |
                                      <a href="tambahStok.php?id=<?php echo $data['id_sparepart']; ?>">Tambah stok</a><?php } ?>
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