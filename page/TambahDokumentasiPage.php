<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">


    <div class="body d-flex justify-content-between">
        <h4>Tambah Dokumentasi</h4>

        <a href="../page/dokumentasiPage.php"> 
            <i style="color: blue" class="fa fa-arrow-left fa-3x"></i> 
        </a>
    </div>
    <hr>

    <form action="../process/TambahProcess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Judul</label>
            <input class="form-control" id="judul" name="judul" >
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipe</label>
            <input class="form-control" id="tipe" name="tipe" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <input class="form-control" id="penulis" name="penulis" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun Pembuatan</label>
            <input class="form-control" id="tahun" name="tahun" >
        </div>

        
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="Tambah">Save</button>
        </div>
    </form>

    
    