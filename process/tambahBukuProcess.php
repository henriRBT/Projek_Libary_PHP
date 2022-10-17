<?php
    if(isset($_POST['tambahBuku'])){
        include('../db.php');
        $judul = $_POST['judulBuku'];
        $gambar = $_FILES['gambar']['name'];
        $gambar_size = $_FILES['gambar']['size'];
        $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
        $image_folder ='../uploaded_image/'.$gambar;
        $jumlah_tersedia = $_POST['jumlahBuku'];
        

        $query = mysqli_query($con,
            "INSERT INTO book(nama_buku, gambar, status, jumlah_tersedia, tanggal_pinjam, tanggal_pengembalian)
            VALUES
            ('$judul', '$gambar', '', '$jumlah_tersedia', '', '')") or die(mysqli_error($con)); 
        if($query){
            move_uploaded_file($gambar_tmp_name, $image_folder);
            echo
                '<script>
                alert("Tambah Buku Success");
                window.location = "../page/dashboardAdminPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Tambah Buku Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>