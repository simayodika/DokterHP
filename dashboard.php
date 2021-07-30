
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once"header.php"  ;
include_once"koneksi.php"  ;
include_once"accesControl.php";

?>

<title>dashboard | DokterHP</title>
</head>
<!-- start page -->

<body>
    <script src="main.js"></script>
    <?php
    include_once"slidingMenu.php";
    ?>
    <!--page title -->
    <div class="pagefive my-5" id="pagefive">
        <div class="container">
            <h4 class="font-weight-bold">Transaksi</h4>
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
                            Masukkan Data Service
                        </div>
                         <div class="card-body">
                            <form action="prosesDashboard.php" method="post">
                                <div class="form-group after-add-more">
                                    <label>Nama Pelanggan :</label>
                                    <select class="form-control" name="nama" >
                                          <option disabled selected> Pilih </option>
                                         <?php 
                                          $sql = "SELECT * FROM user where level='pelanggan'";
                                          $hasil=mysqli_query($conn,$sql);
                                          while ($data=mysqli_fetch_array($hasil)) {
                                         ?>
                                           <option  value="<?=$data['id_user']?>"><?=$data['nama_user'];?> || U:<?=$data['username']?></option> 

                                         <?php
                                          }
                                         ?>
                                    </select>
                                    <label>Sparepart :</label><br>
                                    <select class="form-control" name="sparepart[]" >
                                          <option disabled selected> Pilih </option>
                                         <?php 
                                          $sql2 = "SELECT * FROM sparepart INNER JOIN jenis_hp ON sparepart.id_jenis_hp = jenis_hp.id_jenis_hp where stok!=0 ";
                                          $hasil2=mysqli_query($conn,$sql2);
                                          while ($data2=mysqli_fetch_array($hasil2)) {

                                         ?>
                                           <option  value="<?=$data2['id_sparepart']?>"><?=$data2['nama_sparepart'];?> <?=$data2['nama_hp'];?> RP.<?=$data2['harga']?></option> 

                                         <?php
                                          }
                                         ?>
                                    </select>

                                    <label>Servvice :</label><br>
                                    <select class="form-control" name="service[]" >
                                          <option disabled selected> Pilih </option>
                                         <?php 
                                          $sql1 = "SELECT * FROM service";
                                          $hasil1=mysqli_query($conn,$sql1);
                                          while ($data1=mysqli_fetch_array($hasil1)) {
                                         ?>
                                           <option  value="<?=$data1['id_service']?>"><?=$data1['nama_service']?> RP.<?=$data1['harga']?></option> 

                                         <?php
                                          }
                                         ?>
                                    </select>
                                    <br>
						            <button class="btn btn-success add-more" type="button">
						              <i class="glyphicon glyphicon-plus"></i> Add
						            </button>
						            <hr>
                                    
                                   
                                </div>
                                <button name="kirim" type="submit" class="btn btn-success font-weight-bold"> Tambah transaksi</button>     
                            </form>
                            
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>
								<div class="copy invisible">
		                            <div class="form-group">
		                                    
		                               <label>Sparepart :</label><br>
                                    	<select class="form-control" name="sparepart[]" >
                                          <option disabled selected> Pilih </option>
                                         <?php 
                                          $sql2 = "SELECT * FROM sparepart INNER JOIN jenis_hp ON sparepart.id_jenis_hp = sparepart.id_jenis_hp ";
                                          $hasil2=mysqli_query($conn,$sql2);
                                          while ($data2=mysqli_fetch_array($hasil2)) {

                                         ?>
                                           <option  value="<?=$data2['id_sparepart']?>"><?=$data2['nama_sparepart'];?> <?=$data2['nama_hp'];?> RP.<?=$data2['harga']?></option> 

                                         <?php
                                          }
                                         ?>
                                    </select>

		                                    <label>Servvice :</label><br>
		                                    <select class="form-control" name="service[]" >
		                                          <option disabled selected> Pilih </option>
		                                         <?php 
		                                          $sql1 = "SELECT * FROM service";
		                                          $hasil1=mysqli_query($conn,$sql1);
		                                          while ($data1=mysqli_fetch_array($hasil1)) {
		                                         ?>
		                                           <option  value="<?=$data1['id_service']?>"><?=$data1['nama_service']?> RP.<?=$data1['harga']?></option> 

		                                         <?php
		                                          }
		                                         ?>
		                                    </select>
		                                    <br>
							              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
							              <hr>
		                                    
		                                   
		                                </div>
		                             </div>
		                       

		          
    <?php 
    include_once"footer.php";
    ?>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".form-group").remove();
      });
    });
</script>
</body>

</html>