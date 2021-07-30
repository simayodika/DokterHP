

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <a class="navbar-brand font-weight-bold pl-5 my-0" href="#page-top"><img src="assets/img/logo.png" alt="Logo" width="150px height=85px"></a>
  <a href="dashboard.php">Transaksi</a>
  <a href="viewSparepart.php">Sparepart</a>
  <a href="viewService.php">service</a>
  <a href="historyTransaksi.php">History Transaksi</a>
  <a href="historyStok.php">History stok</a>
  <a href="viewModel.php">Model HP</a>
  <?php if($_SESSION['level']=="super"){?>
  <a href="regisStaff.php">Tambah Staff</a>
<?php } ?>
  <br>
  <div class="col-md-6">
      <button  onclick="logout()" class="btn btn-danger font-weight-bold"> LOGOUT</button>
  </div>
</div>

<div id="main">
  <span id="a" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
callopenNav()

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

function logout(){
    swal.fire({
    title: "Susscess",
    text: "Berhasil Logout",
    icon: "success"
}).then(function() {
    window.location = "logout.php";
});
}
</script>
   

