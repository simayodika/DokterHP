<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php
require_once("koneksi.php");
include_once"accesControl.php";


$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$password = md5($_POST['pass']);

$sqlCek = "SELECT * FROM user WHERE  username = '$username' OR email = '$email'";
$cek = mysqli_query($conn, $sqlCek);
if(mysqli_num_rows($cek)==0){
    if(empty($email)||empty($nama)||empty($nohp)||empty($alamat)||empty($username)||empty($password)){
    echo '<script>
          swal.fire({
            title: "Gagal",
            text: "Data tidak boleh kosong",
            type: "error"
        }).then(function() {
            window.location = "regisStaff.php";
        });
        </script>'; 
    }else{
	       $query = "INSERT INTO user (nama_user,email,no_hp,alamat,username,level,password)
                   VALUE ('$nama','$email','$nohp','$alamat','$username','staff','$password') ";

        	$hasil = mysqli_query($conn, $query);

	       if ($hasil) {
	           echo '<script>
            	      swal.fire({
                        title: "Susscess",
                        text: "Berhasil tambah Staff",
                        type: "success"
                    }).then(function() {
                        window.location = "dashboard.php";
                    });
            		</script>';
	       }
        }
}else{
    if(empty($email)||empty($nama)||empty($nohp)||empty($alamat)||empty($username)||empty($password)){
    echo '<script>
          swal.fire({
            title: "Gagal",
            text: "Data tidak boleh kosong",
            type: "error"
        }).then(function() {
            window.location = "regisStaff.php";
        });
        </script>'; 
    }else{
	echo '<script>
	      swal.fire({
            title: "Gagal",
            text: "Email/username Sudah Digunakan",
            type: "error"
        }).then(function() {
            window.location = "regisStaff.php";
        });
		</script>';	
}
}
?>

