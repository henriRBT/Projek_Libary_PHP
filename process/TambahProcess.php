<?php

    session_start();
    if(isset($_POST['Tambah'])) {

        include ('../db.php');
        $judul = $_POST['judul'];
        $tipe = $_POST['tipe'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun'];
        
        $query = mysqli_query ($con, "INSERT INTO dokumentasi(judul, tipe_karya, penulis, tahun_pembuatan) VALUES('$judul', '$tipe', '$penulis', '$tahun')") or
            die(mysqli_error($con));
    
         if( $query){
             echo
                '<script>
                     alert("Tambah Success"); 
                     window.location = "../page/dokumentasiPage.php"
                 </script>';
         } else{
             echo
             '<script>
                 alert("Tambah Failed"); 
                 window.location = "../page/dokumentasiPage.php"
                
             </script>';
        }
        
    }
?>
