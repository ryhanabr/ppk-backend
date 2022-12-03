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
    <link rel="stylesheet" href="kecantikan_update.css">
</head>
<body style="background-image: url('https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1280,h_720/w_79,x_14,y_14,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/qapzoql1vsagtvblt1vl/NailandBeautyTreatmentatSeashellBeautyinJakarta.webp') ; background-size: 121%;">
    
    <section class="login h-100" style="margin: 30px 0;">
        <div class="login-left w-50 h-100 m-auto">
            <div class="row justify-content-center align-items-center h-100 bg-light">
                <div class="col-10">
                    <div class="header">
                        <h1>Update Data Perawatan Kecantikan</h1>
                        <p>Serahkan urusan kecantikan Anda kepada kami.</p>
                    </div>
                    <div id="x"></div>
        
                    <div class="login-form">
                        <form id="data">

                            <input type="hidden" name="id" value="">
                            
                            <div class="mb-3">
                              <label for="nama_pasien" class="form-label">Nama Pasien</label>
                              <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama pasien perawatan kecantikan">
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
                              <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur pasien" min="5">
                            </div>

                            <!-- <div class="mb-3">
                                <label for="jenis_perawatan" class="form-label">Jenis Perawatan</label><br>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="m" value="Mikrodermabrasi" id="M">
                                    <label class="form-check-label" for="M">Mikrodermabrasi</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="a" value="Acne treatment" id="A">
                                    <label class="form-check-label" for="A">Acne treatment</label>
                                    
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="l" value="Laser resurfacing" id="L">
                                    <label class="form-check-label" for="L">Laser resurfacing</label>
                                </div>
                            </div> -->

                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal Perawatan</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div>

                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="keluhan">Tinggalkan Catatan</label>
                                    <textarea class="form-control" id="keluhan" name="catatan" rows="3"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="username" class="form-control" value="user1">
                            
                            <button class="signin" type="submit">Simpan Pembaruan</button>
                            <!-- <button class="signin-google">Sign In With Google</button> -->

                            <div class="text-center mb-4">
                                <span class="d-inline">Selesai update data perawatan? <a href="kelola_kecantikan.html" class="d-inline text-decoration-none">Kembali</a></span>
                            </div>

            
                        </form>

                        <script>
                        const form1 = document.getElementById("data");
                        <?php $id = $_GET["id"];?>
                        let id = <?php echo $id?>

                        fetch("http://localhost:8080/kecantikan/"+id)
                        .then((response)=>response.json())
                        .then((json)=> {
                            data1 = json;
                            let li = "";
                            form1.id.value = id;
                            form1.nama_pasien.value = data1.nama_pasien;
                            form1.jk.value = data1.jk;
                            form1.umur.value = data1.umur;
                            form1.tanggal.value = data1.tanggal;
                            form1.catatan.value = data1.catatan;
                        });
                         
                        </script>


                        <script>
                            const form = document.getElementById("data");

                            form.addEventListener('submit', function(e) {
                                let url = "http://localhost:8080/kecantikan/"+id;
                                let update = {
                                    nama_pasien: form.nama_pasien.value,
                                    jk: form.jk.value,
                                    umur: form.umur.value,
                                    tanggal: form.tanggal.value,
                                    catatan: form.catatan.value
                                }

                                let option = {
                                    method: "PUT",
                                    body: JSON.stringify(update)
                                }
                                
                                fetch(url, option)
                                .then(() => console.log("Berhasil"));
                                window.location.reload();

                                const x = document.getElementById("x");
                                x.innerHTML = '<div class="alert alert-primary" role="alert">Data berhasil diupdate</div>';
                                return false;
                            });

                            // form.addEventListener('submit', function(e){
                            //     window.location.reload();
                            // })
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