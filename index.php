<!DOCTYPE html>
<html>
<head>
        <title>Membuat Login Dengan PHP dan MYSQLi</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="login">
        <h2>Login SMKN 1 SAYUNG</h2>
        <img src="logosmk.png" alt="logo">
        <h3>Pendaftaran Siswa SMKN 1 SAYUNG</h3>
    <br/>
    <!-- cek pesan notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</center>   
</body>
</html>