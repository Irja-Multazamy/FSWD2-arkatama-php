<?php 
    session_start();
      if(!isset($_SESSION['user'])) {
        echo "<script>
            alert('Maaf sebelum akses halaman ini, harap login terlebih dahulu !');
            document.location='login.php';
            </script>";
      }else{
        include "koneksi.php";

        if(isset($_GET['id'])){ 
            
            $hapus = mysqli_query($koneksi,"DELETE FROM users WHERE id='$_GET[id]'");

            if($hapus){
                echo "<script>
                    alert('Berhasil hapus pengguna !');
                    document.location='show user.php';
                    </script>";
            }
            else {
                echo "<script>
                    alert('Maaf, terjadi kesalahan saat mencoba hapus pengguna !');
                    document.location='show user.php';
                    </script>";
            }
        }
      }

