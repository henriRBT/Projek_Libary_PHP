<?php
    include '../component/sidebarAdmin.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4 >Edit Data Buku</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/editBukuProcess.php" method="post" enctype="multipart/form-data">
            <?php
            if(isset($_GET['id'])){
                include ('../db.php');
                $id = $_GET['id'];
                $sql="SELECT * FROM book WHERE id=$id";
                $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                if($result) {
                        if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);   
                        $id = $row['id'];
                        $nama = $row['nama_buku'];
                        $jumlah = $row['jumlah_tersedia'];
                        }
                    }
                }
            ?>
            <table style="width: 100%;">
                <div><input type="text" name="id" hidden value="<?php echo $id?>"></div>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="titleInput" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control w-100" id="judulBuku" name="judulBuku" value="<?php echo $nama ?>" width="100%"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-4">
                        <label for="imageInput" class="form-label">Gambar Buku</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="amountInput" class="form-label">Jumlah Buku</label>
                    <input type="text" class="form-control w-100" id="jumlahBuku" name="jumlahBuku" value="<?php echo $jumlah ?>" width="100%"/>
                    </div>
                </td>
                </tr>
            </table>
            
            <input type="submit" class="btn btn-primary" name="editBuku"></button>
            </form>	
        </div>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>