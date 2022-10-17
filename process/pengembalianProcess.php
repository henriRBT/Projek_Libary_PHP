<?php
session_start();
if(isset($_GET['id'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        $id = $_GET['id'];
        $user_id = $_SESSION['user']['id'];
        $query = mysqli_query($con, "SELECT * FROM book b join peminjaman p on (b.id = p.id_buku) join user u on (u.id = p.id_user) WHERE b.id = '$id'") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query);
        $nama_buku = $data['nama_buku'];
        $status = $data['status']='Sudah Dikembalikan';
        $jumlah_tersedia = $data['jumlah_tersedia']+1;
        
        $sql = "UPDATE book SET jumlah_tersedia ='$jumlah_tersedia', status ='$status' WHERE id=$id ";
        $update = "UPDATE peminjaman SET status_peminjaman = 'Sudah Dikembalikan' WHERE id_buku = $id AND status_peminjaman = 'Dipinjam'";


        if ($con->query($sql) == TRUE && $con->query($update) == TRUE) {
          echo
                '<script>
                alert("Pengembalian Buku Success"); window.location = "../page/pengembalianBukuPage.php"
                </script>';
        } else {
          echo
                '<script>
                alert("Pengembalian Buku Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
