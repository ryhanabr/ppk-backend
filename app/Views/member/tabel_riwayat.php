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
    <link rel="stylesheet" href="tabel_riwayat.css">
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
      
      <div class="container">
        <h1>Riwayat Layanan Konsultasi Kesehatan</h1><br>
        <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Umur</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Keluhan</th>
              </tr>
            </thead>
            <tbody id="d1">
            </tbody>
          </table><br><hr><br>

          <script>
            fetch("http://localhost:8080/kesehatan")
            .then((response)=>response.json())
            .then((json)=> {
              data1 = json.konsultasi_kesehatan_pasien;
              let li = "";
              let n = 0;
              for (let i = 0; i < data1.length; i++) {
                if(data1[i].username === "user1" && new Date(data1[i].tanggal) < new Date()) {
                  li += "<tr>";
                  li += "<td>"+(n+1)+"</td>";
                  li += "<td>"+data1[i].nama_pasien+"</td>";
                  li += "<td>"+data1[i].jk+"</td>";
                  li += "<td>"+data1[i].umur+"</td>";
                  li += "<td>"+data1[i].kategori+"</td>";
                  li += "<td>"+data1[i].tanggal+"</td>";
                  li += "<td>"+data1[i].keluhan+"</td>";
                  li += "</tr>";
                  n++;
                }
              }

              

              document.getElementById("d1").innerHTML = li;
            });
        </script>

          <h1>Riwayat Layanan Perawatan Kecantikan</h1><br>
          <table class="table table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" rowspan="2">No.</th>
                  <th scope="col" rowspan="2">Nama Pasien</th>
                  <th scope="col" rowspan="2">Jenis Kelamin</th>
                  <th scope="col" rowspan="2">Umur</th>
                  <th scope="col" rowspan="2">Tanggal</th>
                  <th scope="col" rowspan="2">Catatan</th>
                </tr>
              </thead>
              <tbody id="d2">
              </tbody>
            </table>
      </div>
      <script>
        fetch("http://localhost:8080/kecantikan")
        .then((response)=>response.json())
        .then((json)=> {
          data1 = json.perawatan_kecantikan_pasien;
          let lu = "";
          let n = 0;
          for (let i = 0; i < data1.length; i++) {
            if(data1[i].username === "user1" && new Date(data1[i].tanggal) <= new Date()) {
              lu += "<tr>";
              lu += "<td>"+(n+1)+"</td>";
              lu += "<td>"+data1[i].nama_pasien+"</td>";
              lu += "<td>"+data1[i].jk+"</td>";
              lu += "<td>"+data1[i].umur+"</td>";
              lu += "<td>"+data1[i].tanggal+"</td>";
              lu += "<td>"+data1[i].catatan+"</td>";
              lu += "</tr>";
              n++;
            }
            
          }

          

          document.getElementById("d2").innerHTML = lu;
        });
    </script>
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>