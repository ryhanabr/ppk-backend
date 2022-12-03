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
    <link rel="stylesheet" href="reset_sandi.css">
</head>
<body style="background-image: url('https://www.aamc.org/sites/default/files/styles/scale_and_crop_1200_x_666/public/Article-Academic-Health-Centers-927897070.jpg?itok=v3CKK79s') ; background-size: 121%;">
    
    <section class="login h-100" style="margin: 30px 0;">
        <div class="login-left w-50 h-100 m-auto">
            <div class="row justify-content-center align-items-center h-100 bg-light">
                <div class="col-10">
                    <div class="header">
                        <h1>Reset Kata Sandi</h1>
                        <p>Silakan buat kata sandi terbaru Anda.</p>
                    </div>
        
                    <div class="login-form">
                        <form>
                            <div class="mb-3">
                              <label for="password1" class="form-label">Kata Sandi Lama</label>
                              <input type="password" class="form-control" id="password1" placeholder="Masukkan kata sandi lama Anda" aria-describedby="passHelp" name="pass_lama">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="password" placeholder="Buat kata sandi baru Anda" aria-describedby="passHelp" name="pass_baru">
                                <div id="passHelp" class="form-text">Minimal memiliki panjang 8 karakter</div>
                              </div>

                            <div class="mb-3">
                              <label for="konf_password" class="form-label">Konfirmasi Kata Sandi Baru</label>
                              <input type="password" class="form-control" id="konf_password" placeholder="Masukkan kata sandi baru yang telah dibuat" name="konf_password">
                            </div>
                            
                            <!-- <a href="#" class="text-decoration-none text-center">Forgot Password</a> -->
                            
                            <button class="signin">Reset Password</button>
                            <!-- <button class="signin-google">Sign In With Google</button> -->

                            <div class="text-center mb-4">
                                <span class="d-inline">Tidak jadi? <a href="home.html" class="d-inline text-decoration-none">Kembali ke home</a></span>
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