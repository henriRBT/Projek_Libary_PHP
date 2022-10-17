<?php 
  session_start();
  if(isset($_POST['Update'])) {
    include ('../db.php');

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tipe = $_POST['tipe'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    $query = mysqli_query($con, "UPDATE dokumentasi SET judul='$judul', tipe_karya='$tipe', penulis='$penulis', tahun_pembuatan='$tahun' WHERE id='$id'")or
        die(mysqli_error($con));
        
    if($query){
            echo
               '<script>
                    alert("Update Success"); window.location = "../page/dokumentasiPage.php"
                </script>';
    } else{
            echo
            '<script>
                alert("Tambah Failed"); window.location = "../page/dokumentasiPage.php"
               
            </script>';
       }
  }
?>