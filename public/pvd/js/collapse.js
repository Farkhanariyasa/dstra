// jika tekan Tampilkan Semua
function ubahKelas1(id){
    if(id=="latarBelakangAtas"){
        document.getElementById("latarBelakangAtas").innerHTML = "";
    }

    if(id=="metodologiAtas"){
        document.getElementById("metodologiAtas").innerHTML = "";
    }
}

// jika tekan Tampilkan Sebagian
function ubahKelas2(id){
    if(id=="latarBelakangBawah"){
        document.getElementById("latarBelakangAtas").innerHTML = "[<strong><i>Tampilkan Semua</i></strong>]";
        document.getElementById("tombol").scrollIntoView();
    }

    if(id=="metodologiBawah"){
        document.getElementById("metodologiAtas").innerHTML = "[<strong><i>Tampilkan Semua</i></strong>]";
        document.getElementById("goToMetodologi").scrollIntoView();
    }
}