<?php
    if(isset($_POST['editBuku'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id = $_POST['id'];
        $judul = $_POST['judulBuku'];
        $gambar = $_FILES['gambar']['name'];
        $gambar_size = $_FILES['gambar']['size'];
        $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
        $image_folder ='../uploaded_image/'.$gambar;
        $jumlah_tersedia = $_POST['jumlahBuku'];

        // Melakukan update ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "UPDATE book
            SET nama_buku='$judul', gambar='$gambar', status='', jumlah_tersedia='$jumlah_tersedia', tanggal_pinjam='', tanggal_pengembalian=''
            WHERE id='$id'") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            move_uploaded_file($gambar_tmp_name, $image_folder);
            echo
                '<script>
                alert("Edit Buku Success");
                window.location = "../page/dashboardAdminPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Buku Failed");
                window.location = "../page/dashboardAdminPage.php"
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
