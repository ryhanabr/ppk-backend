
const x = document.getElementById("x");

form.addEventListener('submit',function() {
	var pesanError = "";
	pesanError += '<div class="alert alert-danger" role="alert">'+nama(form.nama_lengkap.value)+'</div>';
    pesanError += '<div class="alert alert-danger" role="alert">'+username(form.username.value)+'</div>';
    pesanError += '<div class="alert alert-danger" role="alert">'+cekEmail(form.email.value)+'</div>';
    pesanError += '<div class="alert alert-danger" role="alert">'+telp(form.telp.value)+'</div>';
    pesanError += '<div class="alert alert-danger" role="alert">'+pass(form.pass.value)+'</div>';
    pesanError += '<div class="alert alert-danger" role="alert">'+konf(form.pass.value)+'</div>';

	if(pesanError=="") return true;
	else {
		x.innerHTML = pesanError;
	    return false;
	}
});

function nama(argument) {
    if(/[^a-zA-Z  ]/.test(argument))
		return "Nama tidak boleh diisi selain huruf";	
	else return "";
}

function cekUsername(username) {
    let result = 1;
    fetch('http://localhost:8080/auth')
    .then((response)=> response.json())
    .then((json)=> {
        cek = json.auth;
        for (let i = 0; i< cek.length; i++) {
          if(cek[i].username.localeCompare(username)===0) {
            result = 0;
          }
        }
    });
    return result;
}

function username(argument) {
	if(/[^a-z0-9]/.test(argument))
	 	return "Username harus berisi huruf kecil atau angka <br/>";
    else if(cekUsername(argument)===0) 
        return "Username sudah terpakai"
	else return "";
}

function cekEmail(email) {
    var result = 1;
    fetch('http://localhost:8080/auth')
    .then((response)=> response.json())
    .then((json)=> {
        cek = json.auth;
        for (let i = 0; i< cek.length; i++) {
          if(cek[i].email.localeCompare(email)===0) {
            result = 0;
            break;
          }
        }
    });
    if(result===0) return "Email sudah digunakan";
    else return "";
}

function telp(argument) {
    if(/[^0-9]/.test(argument))
		return "Nomor telepon tidak valid";	
	else return "";
}

function pass(argument) {
	if(argument.length < 8)
		return "Password minimal harus 8 karakter <br/>";
	else return "";
}

function konf(argument) {
	if (form.konf.value!=argument)
		return "Password tidak match <br/>";
	else return "";
}



