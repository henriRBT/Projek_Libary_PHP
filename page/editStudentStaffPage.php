<?php
    include '../component/sidebarAdmin.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4 >Edit Data Buku</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/editStudentStaffProcess.php" method="post" enctype="multipart/form-data">
            <?php
            if(isset($_GET['id'])){
                include ('../db.php');
                $id = $_GET['id'];
                $sql="SELECT * FROM student_staff WHERE id=$id";
                $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                if($result) {
                        if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);   
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $npm = $row['npm'];
                        $jabatan = $row['jabatan'];
                        }
                    }
                }
            ?>
            <table style="width: 100%;">
                <div><input type="text" name="id" hidden value="<?php echo $id?>"></div>
                <tr>
                <td>
                    <div class="mb-3">
                    <label for="titleInput" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control w-100" id="nama" name="nama" value="<?php echo $nama ?>" width="100%"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">NPM Mahasiswa</label>
                    <input type="text" class="form-control w-100" id="npm" name="npm" value="<?php echo $npm ?>" width="100%"/>
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                <div class="mb-3">
                    <label for="titleInput" class="form-label">Jabatan Mahasiswa</label>
                    <input type="text" class="form-control w-100" id="jabatan" name="jabatan" value="<?php echo $jabatan ?>" width="100%"/>
                    </div>
                </td>
                </tr>
            </table>
            
            <input type="submit" class="btn btn-primary" name="editStudentStaff"></button>
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