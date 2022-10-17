<?php
       include '../component/sidebarAdmin.php'
?>
  
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">
   
   <div class="card mb-3" style="max-width: 580px; margin-top: 50px; margin-left:200px;">
      <div class="row g-12">
         <div class="col-md-4" >
            <div class="profil" >
               <?php
                  $user_id = $_SESSION['user']['id'];
                  $select = mysqli_query($con, "SELECT * FROM user WHERE id = '$user_id'") or die('query failed');
                  if(mysqli_num_rows($select) > 0){
                     $fetch = mysqli_fetch_assoc($select);
                     echo '<img src="../uploaded_image/'.$fetch['image'].'"style="margin-left:190px; margin-top:20px;height: 220px; width: 210px; object-fit:cover; border-radius: 50%; ">';
                  }
               ?>
            </div>
            
         </div>
         <div class="col-md-8" style="margin-left:30px;">
            <div class="card-body">
            <h5 class="card-title" style="margin-left:100px;"><b><?php echo $fetch['email']; ?></b></h5>
           
            <p>Hallo selamat datang dalam Library Pirates kau masuk dengan username <b><?php echo $fetch['username']; ?></b> </p>
            <p>Silahkan jika mau mengupdate data diri nya <b><?php echo $fetch['nama_user']; ?></b></p>

            <div class="d-grid gap-2">
               <a href="../page/updateAdminPage.php" type="submit" class="btn btn-primary" name="Update" style="margin-left:120px;">Update</a>
            </div>
            </div>
         </div>
      </div>
   </div>
</aside>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html


