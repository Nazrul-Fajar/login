<?php
  require "aksi_login.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 mt-5">
        <div class="card">
          <div class="card-header">
            <h1>Halaman Login</h1>
          </div>
          <div class="card-body">
            <form action="aksi_login.php" method="post">
              <div class="form-floating mb-3">
                <input type="email" name="username" class="form-control" placeholder="name@example.com">
                <label for="username">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <div class="form-floating mb-3">
                <button class="btn btn-primary" type="btn" name="login" >Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>