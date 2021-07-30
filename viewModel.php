  
<!DOCTYPE html>
<html>
<head>
    <?php include_once "header.php" ;
    include_once "accesControl.php" ;
     include "koneksi.php";

    ?>
    <title>List Service | DokterHP</title>
</head>
<body>
    <script src="main.js"></script>
    <br>
    <?php
    include_once"slidingMenu.php";
    ?>
    <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Service</h4>
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
                        <a href="tambahModel.php" class="btn btn-info font-weight-bold"> Tambah Model</a>
                    </div>
                    <table class="table table-stripped table-hover">
                        <br>
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama HP</th>
                            <th>Merk</th>
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
                        $sql="SELECT * FROM jenis_hp  ORDER BY id_jenis_hp  desc limit $posisi,$batas";
                        $hasil=mysqli_query($conn,$sql);
                         $jmldata    = mysqli_num_rows($hasil);
                        $jmlhalaman = ceil($jmldata/$batas);
                        while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["nama_hp"] ?></td>
                                <td><?php echo $data["merk"];   ?></td>
                                <?php if($_SESSION['level'] == "staff" ||$_SESSION['level'] == "super"){?>
                    
                                <td><a href="deleteModel.php?id=<?php echo $data['id_jenis_hp']; ?>
                                    " onclick="return confirm('Apakah anda yakin menghapus?')">Delete </a> |
                                    <a href="editMode.php?id=<?php echo $data['id_service']; ?>">Update</a><?php } ?>
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