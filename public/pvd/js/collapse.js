// jika tekan Tampilkan Semua
function ubahKelas1(id){
    if(id="latarBelakangAtas"){
        document.getElementById("latarBelakangAtas").innerHTML = "";
    }
}

// jika tekan Tampilkan Sebagian
function ubahKelas2(id){
    if(id="latarBelakangBawah"){
        document.getElementById("latarBelakangAtas").innerHTML = "[<strong><i>Tampilkan Semua</i></strong>]";
        document.getElementById("tombol").scrollIntoView();
    }
}