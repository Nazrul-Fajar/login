<?php
  session_start();
  include "koneksi.php";
  
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  } else {
    $username = $_SESSION["username"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boostrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.png">
</head>
<body>
  <!-- <h1 class="text-center ">Hello World!</h1> -->
  <!-- Navbar Start-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- Jumbotron Start -->
  <section id="home" class="jumbotron text-center">
    <img src="img/pp.jpg" alt="Nazrul Fajar Ramadhani" width="250vh" class="rounded-circle">
    <h1 class="display-4">Nazrul Fajar Ramadhani</h1>
    <p class="lead">Mahasiswa | Ilmu Komputer | USU</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" 
      d="M0,32L26.7,48C53.3,64,107,96,160,112C213.3,128,267,128,320,117.3C373.3,107,427,85,480,101.3C533.3,117,587,171,640,160C693.3,149,747,75,800,
      58.7C853.3,43,907,85,960,112C1013.3,139,1067,149,1120,128C1173.3,107,1227,53,1280,42.7C1333.3,32,1387,64,1413,80L1440,96L1440,320L1413.3,320C1386.7,
      320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,
      480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
  </section>
  <!-- Jumbotron End -->
  <!-- About Start -->
  <section id="about">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,96L34.3,96C68.6,96,137,96,206,85.3C274.3,75,
      343,53,411,42.7C480,32,549,32,617,58.7C685.7,85,754,139,823,165.3C891.4,192,960,192,1029,170.7C1097.1,149,1166,107,1234,96C1302.9,85,1371,107,
      1406,117.3L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,
      274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row text-center">
        <div class="col mb-7">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col mb-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque necessitatibus, 
            fuga facere nostrum consequuntur at numquam, eligendi ipsum quia asperiores ut. Labore, 
            accusantium quibusdam illum repudiandae aspernatur saepe consequatur beatae?</p>
        </div>
        <div class="col mb-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque necessitatibus, 
            fuga facere nostrum consequuntur at numquam, eligendi ipsum quia asperiores ut. Labore, 
            accusantium quibusdam illum repudiandae aspernatur saepe consequatur beatae?</p>
        </div>
      </div>
    </div>
  </section>
  <!-- About End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>