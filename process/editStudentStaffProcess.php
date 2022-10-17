<?php
    if(isset($_POST['editStudentStaff'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $jabatan = $_POST['jabatan'];

        // Melakukan update ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "UPDATE student_staff
            SET nama='$nama', npm='$npm', jabatan ='$jabatan'
            WHERE id='$id'") or die(mysqli_error($con)); 
        // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
        if($query){
            echo
                '<script>
                alert("Edit Student Staff Success");
                window.location = "../page/studentStaffPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Student Staff Failed");
                window.location = "../page/studentStaffPage.php"
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
