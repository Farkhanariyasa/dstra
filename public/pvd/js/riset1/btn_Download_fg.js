// StartValidasi
let idbutton = "";
let idinput = "";
let mailRegex =
  /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

for (let i = 1; i < 11; i++) {
  document.getElementById("fg-" + [i]).addEventListener("click", (e) => {
    idbutton = "fg" + [i];
    console.log("fg-" + [i] + " diklik");
    idinput = i - 1;
  });
}

// FUNCTION GET VALUE WISNUS
function getvalue() {
  let nama = document.getElementsByClassName("nama");
  let email = document.getElementsByClassName("email");
  let instansi = document.getElementsByClassName("instansi");
  let konfirmasiButton = document.getElementById(idbutton);
  console.log(idbutton);

  if (
    nama[idinput].value != "" &&
    email[idinput].value != "" &&
    email[idinput].value.match(mailRegex) &&
    instansi[idinput].value != ""
  ) {
    konfirmasiButton.disabled = false;
    konfirmasiButton.style.backgroundColor = "#7382ab";
    konfirmasiButton.style.color = "#fff";
    document.getElementById("erroremail").innerHTML = "";
    document.getElementById("errornama").innerHTML = "";
    document.getElementById("errorinstansi").innerHTML = "";
    console.log("dah aman formnya");
  } else {
    if (nama[idinput].value === "") {
      document.getElementById("errornama").innerHTML = "Nama harus diisi";
      document.getElementById("errornama").style.color = "#fe7c96";
      console.log("nama kosong");
    } else if (instansi[idinput].value === "") {
      document.getElementById("errorinstansi").innerHTML =
        "Instansi harus diisi";
      document.getElementById("errorinstansi").style.color = "#fe7c96";
      console.log("instansi kosong");
    } else if (!email[idinput].value.match(mailRegex)) {
      document.getElementById("erroremail").innerHTML = "Format email salah";
      document.getElementById("erroremail").style.color = "#fe7c96";
      console.log("email salah");
    } else if (email[idinput].value === "") {
      document.getElementById("erroremail").innerHTML = "Email harus diisi";
      document.getElementById("erroremail").style.color = "#fe7c96";
      console.log("email kosong");
    }

    konfirmasiButton.disabled = true;
    konfirmasiButton.style.backgroundColor = "#8d8d8d";
  }
}

document.getElementById("fg1").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("fg_output3").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "[FG] Grafik Perbandingan Rata-rata Haversine";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});

document.getElementById("fg2").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_output7").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "[FG] Visualisasi Hasil Algoritma Haversine";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("fg3").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_output9").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "[FG] Grafik Perbandingan Rata-rata No StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("fg4").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_output10").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "[FG] Visualisasi Hasil Algoritma H3Geo No StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("fg5").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_output4").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "[FG] Grafik Perbandingan Rata-rata with StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("fg6").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_output8").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "[FG] Visualisasi Hasil Algoritma with StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
  });
  
  document.getElementById("fg7").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("fg_output1").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "[FG] Grafik Perbandingan Rata-rata DTW";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("fg8").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("fg_output6").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "[FG] Visualisasi Hasil Algoritma DTW";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("fg9").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("fg_output2").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "[FG] Visualisasi Hasil Algoritma Frechet";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("fg10").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("fg_output5").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "[FG] Grafik Perbandingan Rata-rata Algoritma Frechet";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });