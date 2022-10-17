<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM book WHERE id='$id'") or die(mysqli_error($con));
        if(mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);   
            $status = $row['status'];
        }

        if($status != "Dipinjam"){
            $queryDelete = mysqli_query($con, "DELETE FROM book WHERE id='$id'") or die(mysqli_error($con));
            if($queryDelete){
                echo
                '<script>
                alert("Delete Success"); window.location = "../page/dashboardAdminPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Delete Failed"); window.location = "../page/dashboardAdminPage.php"
                </script>';
            }
        } else {
            echo
                '<script>
                alert("Delete Failed! Maaf, buku masih ada yang meminjam!"); window.location = "../page/dashboardAdminPage.php"
                </script>';
        }
        
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
