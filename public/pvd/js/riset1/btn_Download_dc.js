// StartValidasi
let idbutton = "";
let idinput = "";
let mailRegex =
  /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

for (let i = 1; i < 11; i++) {
  document.getElementById("dc-" + [i]).addEventListener("click", (e) => {
    idbutton = "dc" + [i];
    console.log("dc-" + [i] + " diklik");
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

document.getElementById("dc1").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("dc_output9").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "Grafik Perbandingan Rata-rata Haversine";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});

document.getElementById("dc2").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output1").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Visualisasi Hasil Algoritma Haversine";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dc3").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output5").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Grafik Perbandingan Rata-rata No StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dc4").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output2").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Visualisasi Hasil Algoritma H3Geo No StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dc5").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output4").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Grafik Perbandingan Rata-rata with StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dc6").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output3").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Visualisasi Hasil Algoritma with StayPoint";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
  });
  
  document.getElementById("dc7").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("dc_output11").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "Grafik Perbandingan Rata-rata DTW";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("dc8").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("dc_output7").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "Visualisasi Hasil Algoritma DTW";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("dc9").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("dc_output6").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "Visualisasi Hasil Algoritma Frechet";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });
  
  document.getElementById("dc10").addEventListener("click", function (e) {
      // Convert our canvas to a data URL
      let canvasUrl = document.getElementById("dc_output10").toDataURL();
      // Create an anchor, and set the href value to our data URL
      const createEl = document.createElement("a");
      createEl.href = canvasUrl;
    
      // This is the name of our downloaded file
      createEl.download = "Grafik Perbandingan Rata-rata Algoritma Frechet";
    
      // Click the download button, causing a download, and then remove it
      createEl.click();
      createEl.remove();
  });