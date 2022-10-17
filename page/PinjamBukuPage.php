<?php
    include '../component/sidebar.php';
    $id = $_GET["id"];
    $update = mysqli_query($con,"UPDATE `book` SET `tanggal_pinjam`= SYSDATE() WHERE `id` = $id");
    $updateKembali = mysqli_query($con,"UPDATE `book` SET `tanggal_pengembalian`= (`tanggal_pinjam`+7) WHERE `id` = $id");
    //$updatePeminjaman = mysqli_query($con,"UPDATE `peminjaman` SET `status_peminjaman`= 'Dipinjam' WHERE `id` = $id");
    

    $sql = mysqli_query($con,"SELECT * FROM book WHERE id = $id");
    $data = mysqli_fetch_array($sql);
    
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >Pinjam Buku</h4>
        <hr>
        <form action="../process/pinjamBukuProcess.php" method="post">
            <div class="mb-3">
                <label for="nama_buku" class="form-label">Nama Buku</label>
                <input class="form-control" id="nama_buku" name="nama_buku" value="<?php echo $data['nama_buku'] ?>"readonly aria-describedby="emailHelp" >
            </div>

            <div class="mb-3">
                <label for="jumlah_tersedia" class="form-label">Jumlah Tersedia</label>
                <input class="form-control" id="jumlah_tersedia" name="jumlah_tersedia" value="<?php echo $data['jumlah_tersedia'] ?>"readonly aria-describedby="emailHelp" >
            </div>
            
            <div class="mb-3">
                <label for="tanggal_pengembalian" class="form-label">Batas Tanggal Pengembalian</label>
                <input class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $data['tanggal_pengembalian'] ?>"readonly aria-describedby="emailHelp" >
            </div>

            <div class="card" style=" width: wrap-content;">
                <div class="card-body">
                    <h3>Apakah Anda Yakin Ingin Meminjam Buku Ini??</h3>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="pinjamBuku">Pinjam</button>
                    </div>
                    <input type="hidden" name="id" value="<?= $data['id'];?>">
                </div>
            </div>

            <input type="hidden" name="id" value="<?= $data['id'];?>">

        </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</body>
</html>