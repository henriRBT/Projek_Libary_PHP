<?php
    include '../component/sidebarAdmin.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4 >Tambah Data Buku</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/tambahBukuProcess.php" method="post" enctype="multipart/form-data">
            <table style="width: 100%;">
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="titleInput" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control w-100" id="judulBuku" name="judulBuku" width="100%"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-4">
                        <label for="imageInput" class="form-label">Gambar Buku</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/jpg, image/jpeg, image/png">
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="amountInput" class="form-label">Jumlah Buku</label>
                    <input type="text" class="form-control w-100" id="jumlahBuku" name="jumlahBuku" width="100%"/>
                    </div>
                </td>
                </tr>
            </table>
            
            <input type="submit" class="btn btn-primary" name="tambahBuku"></button>
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