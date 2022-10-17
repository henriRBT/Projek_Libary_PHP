<?php

    if(isset($_POST['register'])){

       include('../db.php');

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $nama_user = $_POST['nama_user'];
        $username = $email;
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder ='../uploaded_image/'.$image;
        $unik= mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");
        $cek=mysqli_num_rows($unik);
       

        if($cek==0){
            $query = mysqli_query($con,
            "INSERT INTO user (image, username, password, email, nama_user)
                VALUES 
            ('$image', '$email', '$password', '$email', '$nama_user')")
                    or die(mysqli_error($con));
        
            if($query){
                move_uploaded_file($image_tmp_name, $image_folder);
                echo 
                '<script>
                alert("Register Success");
                window.location ="../index.php"
                </script>';
            } else{
                echo
                '<script>
                alert("Register Failed");
                </script>';
            }

        } else if($email=="" || $password==""|| $nama_user=="" || $image==""){
            echo 
            '<script>
             alert("Input Harus Ada!!"); 
             window.history.back()
             </script>';
        }
        
        else{
            echo 
            '<script>
             alert("Email harus unik"); 
             window.history.back()
             </script>';
        }

    } else{
        echo 
            '<script>
            window.history.back()
            </script>';
    }
?>