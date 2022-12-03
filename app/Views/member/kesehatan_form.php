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

    <!-- My Style -->
    <link rel="stylesheet" href="kesehatan_form.css">

    

</head>
<body style="background-image: url('https://img.freepik.com/premium-photo/long-hospital-corridor-with-empty-seats_117023-1679.jpg?w=2000') ; background-size: 121%;">
    
    <section class="login h-100" style="margin: 30px 0;">
        <div class="login-left w-50 h-100 m-auto">
            <div class="row justify-content-center align-items-center h-100 bg-light">
                <div class="col-10">
                    <div class="header">
                        <h1>Konsultasi Kesehatan</h1>
                        <p>Keluhkan kesehatan Anda bersama kami.</p>
                    </div>
        
                    <div class="login-form">
                        <form name="inputkesehatan" method="post" id="data">
                            
                            <div class="mb-3">
                              <label for="nama_pasien" class="form-label">Nama Pasien</label>
                              <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama pasien yang akan berkonsultasi">
                            </div>

                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jenis_kelamin" value="L">
                                    <label class="form-check-label" for="jenis_kelamin">Laki - Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jenis_kelamin" value="P">
                                    <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                  </div>
                              </div>

                            <div class="mb-3">
                              <label for="umur" class="form-label">Umur</label>
                              <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur pasien" min="1">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label><br>
                                <select class="form-select" name="kategori" aria-label="Default select example">
                                    <option selected>Pilih Kategori</option>
                                    <option value="THT">THT</option>
                                    <option value="Mata">Mata</option>
                                    <option value="Gigi">Gigi</option>
                                    <option value="Umum">Umum</option>
                                  </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Konsultasi</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal">
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="keluhan">Keluhan Kesehatan</label>
                                    <textarea class="form-control" name="keluhan" id="keluhan" rows="3"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="username" class="form-control" value="user1">
                            
                            <button class="signin" type="submit">Daftar</button>
                            <!-- <button class="signin-google">Sign In With Google</button> -->

                            <div class="text-center mb-4">
                                <span class="d-inline">Batal mendaftar konsultasi? <a href="home.html" class="d-inline text-decoration-none">Kembali</a></span>
                            </div>
                        </form>

                        <script>
                            const form = document.getElementById("data");

                            form.addEventListener('submit', function(e) {
                                e.preventDefault();

                                const register = new FormData(form);

                                fetch('http://localhost:8080/kesehatan', {
                                    method : "POST",
                                    body : register,
                                })
                                .then(res => res.json())
                                .then(data => console.log(data))
                                .catch(err => console.log(err));

                                form.reset();
                            })
                        </script>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      
</body>
</html>