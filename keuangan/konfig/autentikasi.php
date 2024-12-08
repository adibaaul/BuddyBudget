<?php
session_start();
include ('config.php');

$username =$_POST['username'];
$password =$_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    $user = mysqli_fetch_array($query);
    $_SESSION['nama']=$user['nama'];
    $_SESSION['level']=$user['level'];
        if ($user['level'] == 'ar') {
            header('Location: ../app/index_ar.php');
        } else if ($user['level'] == 'manajer') {
            header('Location: ../app/index.php');
        } else if ($user['level'] == 'ap') {
            header('Location: ../app/index_ap.php');
        } else {
            // Jika level tidak valid, kembalikan ke login
            header('Location: ../index.php?error=3');
}}
else{
    header('Location:../index.php?error=1');
}

?>