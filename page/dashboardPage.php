<?php
include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
<div class="body d-flex justify-content-between">
        <h4>LIST BUKU</h4> 
        </div>
        <hr>
        <table class="table ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Gambar</th>
                <th scope="col">Jumlah Tersedia</th>
                <th scope="col">Pinjam</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $query = mysqli_query($con, "SELECT * FROM book") or die(mysqli_error($con));
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
                            echo'
                            <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['nama_buku'].'</td>
                            <td><img src="../uploaded_image/'.$data['gambar'].'" width="80" height="90"</td>
                            <td>'.$data['jumlah_tersedia'].'</td>
                            <td>
                            ';
                            if ($data['jumlah_tersedia'] == "0"){
                                echo '
                                <button class="btn btn-danger disabled"> Pinjam</button>';
                            }else{
                                echo '
                                <a href="../page/PinjamBukuPage.php?id='.$data['id'].'"
                                <button type="submit" class="btn btn-primary">Pinjam</button>
                                </a>     
                                ';
                            }
                            echo'                        
                            </td>
                            </tr>';
                            $no++;
                        }
                    }
                ?>
            </tbody>
        </table>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>