<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">

    <div class="body d-flex justify-content-between">
        <h4>LIST Dokumentasi</h4>
        <a href="../page/TambahDokumentasiPage.php?id='.$data['id'].'"> 
            <i style="color: blue" class="fa fa-plus fa-3x"></i> 
        </a>
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tipe</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Dibuat</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM dokumentasi") or
                    die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                    <tr>    
                        <th scope="row">'.$no.'</th>
                        <td>'.$data['judul'].'</td>
                        <td>'.$data['tipe_karya'].'</td>
                        <td>'.$data['penulis'].'</td>
                        <td>'.$data['tahun_pembuatan'].'</td>
                        
                        <td>
                            <a href="../page/editDokumentasiPage.php?id='.$data['id'].'"> 
                                <i style="color: blue" class="fa fa-edit fa-2x"></i> 
                            </a>
                        </td>
                        <td>
                            <a href="../process/deleteDokumentasiProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Are you sure want to delete this data?\')"> 
                                <i style="color: blue" class="fa fa-trash fa-2x"></i> 
                            </a>
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
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html