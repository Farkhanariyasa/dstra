// StartValidasi
let idbutton = "";
let idinput = "";
let mailRegex =
  /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

for (let i = 1; i < 7; i++) {
  document.getElementById("dasbor-" + [i]).addEventListener("click", (e) => {
    idbutton = "dasbor" + [i];
    console.log("dasbor-" + [i] + " diklik");
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

document.getElementById("dasbor1").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("qa_output1_1").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "Quality Assurance Output 1_1";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});

document.getElementById("dasbor2").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("qa_output1_2").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 1_2";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dasbor3").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("dc_output8").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Perbandingan Kombinasi Algoritma Berdasarkan F1Score [DC]";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dasbor4").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("fg_dasbor").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Perbandingan Kombinasi Algoritma Berdasarkan F1Score [FG]";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dasbor5").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("wisnus_output1").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Wisnus Output 1";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById("dasbor6").addEventListener("click", function (e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById("wisnus_output2").toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement("a");
    createEl.href = canvasUrl;
  
    // This is the name of our downloaded file
    createEl.download = "Wisnus Output 2";
  
    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
  });
  
