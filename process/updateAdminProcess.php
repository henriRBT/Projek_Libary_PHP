<?php
    session_start();
      if(isset($_POST['update'])) {
        include ('../db.php');
        $id = $_POST['id'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nama_user = $_POST['nama_user'];
        $username = $email;

        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder ='../uploaded_image/'.$image;

        $unik= mysqli_query($con, "SELECT * FROM user WHERE id='$id'");
       
        
        if($email=="" || $password==""|| $nama_user=="" || $image==""){
            echo 
            '<script>
             alert("Input Harus Ada!!"); 
             window.history.back()
             </script>';
        } else {
            $query = mysqli_query($con,
            "UPDATE user SET image ='$image',  username='$email', password ='$password', email ='$email',  nama_user='$nama_user' 
            WHERE id = ".$_SESSION['user']['id']) or die('query failed');
  
            if($query){
                move_uploaded_file($image_tmp_name, $image_folder);
                echo 
                '<script>
                alert("Update Success");
                window.location ="../page/profilAdminPage.php"
                </script>';
            } else{
                echo
                '<script>
                alert("Update Failed");
                window.location ="../page/updateAdminPage.php"
                </script>';
            }
        } 
      }else{
        // echo
        // '<script>
        //     alert("Update Failed"); 
        //     window.location ="../page/updatePage.php"
        // </script>';
      }

?>