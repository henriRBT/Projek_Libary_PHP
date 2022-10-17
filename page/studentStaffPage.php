<?php
    include '../component/sidebarAdmin.php'
?>


<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
        solid #00008B; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
        0.19);">

    <h4 >Library Pirates</h4>
    <hr>
    <a href="../page/tambahStudentStaffPage.php?"> 
        <i style="color: green; position: right" class="fa fa-plus fa-2x"></i> 
    </a>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Student Staff</th>
                <th scope="col">NPM</th>
                <th scope="col">Pas Foto</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM student_staff") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                    echo'
                    <tr>    
                        <th scope="row">'.$no.'</th>
                        <td>'.$data['nama'].'</td>
                        <td>'.$data['npm'].'</td>
                        <td><img src="../uploaded_image/'.$data['gambar'].'" width="80" height="90"</td>
                        <td>'.$data['jabatan'].'</td>
                        <td>
                            <a href="../page/editStudentStaffPage.php?id='.$data['id'].'"> 
                                <i style="color: red" class="fa fa-edit fa-2x"></i> 
                            </a>
                        </td>
                        <td> 
                            <a href="../process/deleteStudentStaffProcess.php?id='.$data['id'].'" onClick="return confirm ( \'Are you sure want to delete this data?\')"> 
                                <i style="color: red" class="fa fa-trash fa-2x"></i> 
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
</html>