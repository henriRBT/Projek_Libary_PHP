<?php
    if(isset($_POST['pinjamBuku'])){
        session_start();
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $id = $_POST['id'];
        $user_id = $_SESSION['user']['id'];
        $nama_buku = $_POST['nama_buku'];
        $jumlah_tersedia = $_POST['jumlah_tersedia']-1;
        
        $sql = "UPDATE book SET jumlah_tersedia ='$jumlah_tersedia', status ='Dipinjam' WHERE id=$id ";
        $cek = mysqli_query($con, "SELECT * FROM peminjaman WHERE id_buku = '$id' AND id_user = '$user_id' AND status_peminjaman = 'Dipinjam'") or die(mysqli_error($con));
        $query = "INSERT INTO peminjaman (id_buku, id_user, status_peminjaman) VALUES ('$id', '$user_id', 'Dipinjam')";

        
        if (mysqli_num_rows($cek) > 0){
            echo
                '<script>
                alert("Pinjam Buku Failed! Maaf, anda sudah meminjam buku ini!"); window.location = "../page/dashboardPage.php"
                </script>';
        } else {
            if ($con->query($sql) == TRUE && $con->query($query) == TRUE ) {
                echo
                      '<script>
                      alert("Pinjam Buku Success"); window.location = "../page/dashboardPage.php"
                      </script>';
            } else {
                echo
                      '<script>
                      alert("Pinjam Buku Failed");
                      </script>';
            }
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
