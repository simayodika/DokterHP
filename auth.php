<head>
    <?php include_once "header.php"?>
</head>
<body>
    <?php include_once "footer.php"?>
</body>
<?php

require_once "koneksi.php";

if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username'";

    $query = $conn->query($sql);

    foreach ($query as $data) {

        if ($data['password'] == $password) {
            $_SESSION['nama'] = $data['nama_user'];
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['level'] = $data['level'];

            if($data['level'] == "pelanggan"){
                echo '<script>
              swal.fire({
                title: "Susscess",
                text: "Berhasil Login",
                type: "success"
            }).then(function() {
                window.location = "index.php";
            });
            </script>';   
            }else{
                echo '<script>
              swal.fire({
                title: "Susscess",
                text: "Berhasil Login",
                type: "success"
            }).then(function() {
                window.location = "tambahSparePart.php";
            });
            </script>';
            }
            
        } else {
            echo '<script>
              swal.fire({
                title: "Gagal",
                text: "Username/Password Salah",
                type: "error"
            }).then(function() {
                window.location = "login.php";
            });
            </script>';
        }
    }
} else {
    echo '<script>
    swal.fire({
        title: "Gagal",
            text: "Username/Password tidak boleh kosong",
            type: "error"
        }).then(function() {
            window.location = "login.php";
        });
        </script>';
}
?>
