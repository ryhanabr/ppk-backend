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
    <link rel="stylesheet" href="home.css">
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
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="riwayat_layanan.html">Riwayat Layanan</a>
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
        <div class="container">
          <h1>Hi, User!</h1><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="https://img.freepik.com/premium-photo/long-hospital-corridor-with-empty-seats_117023-1679.jpg?w=2000" alt=""></div>
                        <div class="img2"><img src="https://thumbs.dreamstime.com/b/medical-consultation-icon-vector-male-doctor-symbol-stethoscope-phone-health-care-glyph-pictogram-illustration-148148116.jpg" alt=""></div>
                        <div class="main-text">
                            <h2>Konsultasi Kesehatan</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam maxime repellat optio nostrum beatae, nisi at officiis. Optio, placeat.</p>
                            <br><a href="kesehatan_form.html" class="btn btn-primary w-50">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="https://media.istockphoto.com/photos/woman-in-mask-on-face-in-spa-beauty-salon-picture-id921797424?k=20&m=921797424&s=612x612&w=0&h=-oKjXqOjxamu9dcOtcF-WggUrXE8mB1DDTmTbCuACrc=" alt=""></div>
                        <div class="img2"><img src="https://www.pngitem.com/pimgs/m/367-3675869_transparent-beauty-icon-png-health-and-beauty-icon.png" alt=""></div>
                        <div class="main-text">
                            <h2>Perawatan Kecantikan</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam maxime repellat optio nostrum beatae, nisi at officiis. Optio, placeat.</p>
                            <br><a href="kecantikan_form.html" class="btn btn-primary w-50">Daftar</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="img1"><img src="https://dr-olivier-clinic.com/wp-content/uploads/2014/10/different-doctors.jpg" alt=""></div>
                        <div class="img2"><img src="https://st2.depositphotos.com/8440746/11227/v/950/depositphotos_112272230-stock-illustration-doctor-icon-flat-color-physician.jpg" alt=""></div>
                        <div class="main-text">
                            <h2>Dokter Kami</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ullam maxime repellat optio nostrum beatae, nisi at officiis. Optio, placeat.</p>
                            <br><a href="daftar_dokter.html" class="btn btn-primary w-50">Lihat</a>
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