<?php
       include '../component/sidebar.php'
?>
  
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">

    <form action="../process/updateProcess.php" method="post" enctype="multipart/form-data">
        <div class="card" style="margin-left: 20px; margin-top:30px;">
            <?php
                $user_id = $_SESSION['user']['id'];
                $select = mysqli_query($con, "SELECT * FROM user WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                    $fetch = mysqli_fetch_assoc($select);
                    echo '<img src="../uploaded_image/'.$fetch['image'].'"style="margin:auto; height: 220px; width: 220px; object-fit:cover; border-radius: 50%; ">';
                }
            ?>

            <div><input type="text" name="id" hidden value="<?php echo $user_id?>"></div>

            <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"  value="<?php echo $fetch['email']; ?>">
            </div>

            <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">User</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user"value="<?php echo $fetch['nama_user']; ?>">
            </div>

            <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Upload Foto</label>
                <input type="file" class="form-control" id="image" name="image"  accept="image/jpg, image/jpeg, image/png">
            </div>

            <div class="d-grid gap-2" style="margin-top:20px;">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </div>
    </form>
</div>