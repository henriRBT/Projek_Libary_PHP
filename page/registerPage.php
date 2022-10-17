<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Register Page</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold "href="../index.php">Library Pirates</a>
    </nav>

    <div class="bg bg-light text-dark"> 
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-white bg-dark ma-5 shadow " style="min-width: 25rem;">
                <div class="card-header fw-bold text-center">Register Pirates!</div>
                  
                <div class="card-body">
                    <form action="../process/registerProcess.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input  type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Example 2007@students.uajy">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user" aria-describedby="emailHelp">
                        </div>
                       
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Upload Foto</label>
                            <input type="file" class="form-control" id="image" name="image"  accept="image/jpg, image/jpeg, image/png">
                        </div>

                        <div class="d-grid gap-2">
                           <button type="submit" class="btn btn-primary" name="register">Register</button>
                        </div>
                    </form>
                    <p class="mt-2 mb-0">Have an Account?
                        <a href="../page/loginPage.php" class="text-primary">Login here!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>