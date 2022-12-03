<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login : Poliklinik Statistika</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="index.css">
  </head>
  <body>

    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            
            
        </div>
        <div class="login-right w-50 h-100">
            <div class="row justify-content-center align-items-center h-100 bg-light">
                <div class="col-6">
                    <div class="header">
                        <h1>Selamat Datang</h1>
                        <p>Poliklinik Statistika siap melayani keluhan kesehatan Anda.</p>
                    </div>
        
                    <div class="login-form">
                        <form action="login_action.php">
                            
                            <div class="mb-3">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username Anda">
                            </div>
                            
                            <div class="mb-3">
                              <label for="password" class="form-label">Kata Sandi</label>
                              <input type="password" class="form-control" id="password" name="pass" placeholder="Masukkan kata sandi Anda">
                            </div>
                            
                            <!-- <a href="#" class="text-decoration-none text-center">Forgot Password</a> -->
                            
                            <button class="signin">Masuk</button>
                            <!-- <button class="signin-google">Sign In With Google</button> -->

                            <div class="text-center">
                                <span class="d-inline">Belum punya akun? <a href="daftar_akun.html" class="d-inline text-decoration-none">Daftar di sini!</a></span>
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