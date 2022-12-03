<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Akun</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="riwayat_layanan.css">
</head>
<body>
    <nav class="navigasi navbar navbar-expand-lg bg-light">
        <div class="container-fluid m-2" style="padding: 16px 4% 16px 6%;">
            <a class="navbar-brand" href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/4891/4891664.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Poliklinik Statistika
              </a>
          
          <!-- <a class="navbar-brand" href="#"><img src="https://cdn-icons-png.flaticon.com/512/4624/4624025.png" alt=""> Poliklinik Statistika</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="riwayat_layanan.html">Riwayat Layanan</a>
              </li>
              <li class="nav-item">
                <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="edit_profile.html">Edit Profile</a>
                  <a class="dropdown-item text-danger btn btn-light" href="#">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="profile-area">
        <div class="container" style="width: 60%;">
          <h1>Riwayat Layanan</h1><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="img1"><img src="https://img.freepik.com/premium-photo/medical-doctor-workspace-concept-with-medical-equipment-color-background_44344-1492.jpg?w=2000" alt=""></div>
                        <div class="img2"><img src="data:image/png;base64,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" alt=""></div>
                        <div class="main-text">
                            <h2>Layanan Aktif Terdaftar</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam maxime repellat optio nostrum beatae, nisi at officiis. Optio, placeat.</p>
                            <br><a href="tabel_aktif.html" class="btn btn-primary w-50">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="img1"><img src="https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?cs=srgb&dl=pexels-pixabay-40568.jpg&fm=jpg" alt=""></div>
                        <div class="img2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThcCVEZhTRw-A1dqKAB_jdk0-hzE1TSO0OKA&usqp=CAU" alt=""></div>
                        <div class="main-text">
                            <h2>Riwayat Layanan</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam maxime repellat optio nostrum beatae, nisi at officiis. Optio, placeat.</p>
                            <br><a href="tabel_riwayat.html" class="btn btn-primary w-50">Lihat</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>