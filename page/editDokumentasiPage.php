<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">

    <div class="body d-flex justify-content-between">
        <h4>Edit Dokumentasi</h4>
        <a href="../process/BackProcess.php?id='.$data['id'].'"> 
            <i style="color: blue" class="fa fa-arrow-left fa-3x"></i> 
        </a>
    </div>
    <hr>

    <?php 
        include ('../db.php');
        $id = $_GET['id'];
        $query_mysql = mysqli_query($con, "SELECT * FROM dokumentasi WHERE id='$id'")
        or die(mysqli_error());
        $nomor = 1;
        while($row = mysqli_fetch_array($query_mysql)){
	?>

    

    <form action="../process/editDokumentasiProcess.php" method="post">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">judul</label>

            <input type="hidden"class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>" >

            <input class="form-control" id="judul" name="judul" value="<?php echo $row['judul'] ?>" >
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe</label>
            <input class="form-control" id="tipe" name="tipe" value="<?php  echo  $row['tipe_karya'] ?>" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input class="form-control" id="penulis" name="penulis" value="<?php  echo  $row['penulis'] ?>" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Pembuatan</label>
            <input class="form-control" id="tahun" name="tahun" value="<?php echo $row['tahun_pembuatan'] ?>" >
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="Update">Update</button>
        </div>
    </form>
    
    <?php } ?>
</div>

    