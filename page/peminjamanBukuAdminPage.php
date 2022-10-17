<?php
include '../component/sidebarAdmin.php';

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
<div class="body d-flex justify-content-between">
    
        <h4>LIST PEMINJAMAN BUKU</h4> 
        </div>
        <hr>
        <table class="table ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Gambar</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Email Peminjam Buku</th>

                </tr>
            </thead>
            <tbody>
                
                <?php
                    $query = mysqli_query($con, "SELECT * FROM book b join peminjaman p on (b.id = p.id_buku)
                    join user u on (u.id = p.id_user) 
                    WHERE b.status = 'Dipinjam' OR b.status ='Sudah Dikembalikan'") or die(mysqli_error($con));
                    $querybuku = mysqli_query($con, "SELECT * FROM book") or die(mysqli_error($con));
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
                            $databuku = mysqli_fetch_assoc($querybuku);
                            echo'
                            <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['nama_buku'].'</td>
                            <td><img src="../uploaded_image/'.$data['gambar'].'" width="80" height="90"</td>
                            <td>'.$data['status_peminjaman'].'</td>
                            <td>'.$data['tanggal_pengembalian'].'</td>
                            <td>'.$data['email'].'</td>
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