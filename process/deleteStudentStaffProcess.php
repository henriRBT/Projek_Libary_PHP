<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM student_staff WHERE id='$id'") or die(mysqli_error($con));
            if($queryDelete){
                echo
                '<script>
                alert("Delete Success"); window.location = "../page/studentStaffPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Delete Failed"); window.location = "../page/studentStaffPage.php"
                </script>';
            }
        
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
