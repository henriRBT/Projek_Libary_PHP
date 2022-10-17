<?php
    if(isset($_POST['tambahStudentStaff'])){
        include('../db.php');
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $gambar = $_FILES['gambar']['name'];
        $gambar_size = $_FILES['gambar']['size'];
        $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
        $image_folder ='../uploaded_image/'.$gambar;
        $jabatan = $_POST['jabatan'];
        

        $query = mysqli_query($con,
            "INSERT INTO student_staff(nama, npm, gambar, jabatan)
            VALUES
            ('$nama', '$npm', '$gambar', '$jabatan')") or die(mysqli_error($con)); 
        if($query){
            move_uploaded_file($gambar_tmp_name, $image_folder);
            echo
                '<script>
                alert("Tambah Student Staff Success");
                window.location = "../page/studentStaffPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Tambah Student Staff Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>