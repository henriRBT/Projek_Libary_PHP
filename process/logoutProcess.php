<?php
    session_start();
    session_destroy();
    echo 
     '<script>
     alert("Logout Success");
     </script>';
    header("location:../index.php");
?>