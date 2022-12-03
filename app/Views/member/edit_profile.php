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
    <link rel="stylesheet" href="edit_profile.css">
</head>
<body style="background-image: url('https://img.lovepik.com/photo/40176/4710.jpg_wh860.jpg') ; background-size: 121%;">
    
    <section class="login h-100" style="margin: 30px 0;">
        <div class="login-left w-50 h-100 m-auto">
            <div class="row justify-content-center align-items-center h-100 bg-light">
                <div class="col-10">
                    <div class="header">
                        <h1>Edit Profile</h1>
                        <p>Silakan isi dengan identitas asli Anda.</p>
                    </div>
        
                    <div class="login-form">
                        <form>
                            
                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap Anda">
                            </div>
                            
                            <div class="mb-3">
                              <label for="username" class="form-label">Username</label>
                              <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="username" placeholder="Username" aria-describedby="usernameHelp" readonly>
                              </div>
                              <div id="usernameHelp" class="form-text">Peringatan : Username tidak dapat diedit!</div>
                            </div>

                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif Anda">
                            </div>

                            <div class="mb-3">
                              <label for="alamat" class="form-label">Alamat</label>
                              <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat Anda" aria-describedby="alamatHelp">
                              <div id="alamatHelp" class="form-text">Contoh : Jalan Otto Iskandardinata 64C, Kota Jakarta Timur</div>
                            </div>

                            <div class="mb-3">
                              <label for="telp" class="form-label">No Telepon</label>
                              <input type="text" class="form-control" id="alamat" placeholder="Masukkan nomor telepon Anda" aria-describedby="telpHelp">
                              <div id="telpHelp" class="form-text">Contoh : 089123849xxx</div>
                            </div>

                            <a href="reset_sandi.html" class="text-decoration-none text-center">Reset Kata Sandi?</a>
                            
                            <button class="signin">Simpan Perubahan</button>
                            <!-- <button class="signin-google">Sign In With Google</button> -->

                            <div class="text-center mb-4">
                                <span class="d-inline">Tidak jadi mengedit? <a href="home.html" class="d-inline text-decoration-none">Kembali ke Home</a></span>
                            </div>

            
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>