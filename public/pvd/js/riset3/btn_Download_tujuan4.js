// StartValidasi
let idbutton = "";
let idinput = "";
let mailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

// let hoverButton =':hover{ background-color: #00ff00 }'

for (let i = 1; i <= 1; i++) {
  document.getElementById("unduh-4-" + i).addEventListener("click", (e) => {
    idbutton = "btndownload4_" + i;
    console.log("4-" + i + " diklik");
    idinput = i - 1;
  });
}

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
    // konfirmasiButton.style.cssText=hoverButton;
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
      console.log("email  kosong");
    }

    konfirmasiButton.disabled = true;
    konfirmasiButton.style.backgroundColor = "#8d8d8d";
  }
}

for (let i = 1; i <= 1; i++) {
  (function (i) {
    document
      .getElementById("btndownload4_" + i)
      .addEventListener("click", function (e) {
        // Convert our canvas to a data URL
        let canvasUrl = document.getElementById("tujuan4_" + i).toDataURL();
        // Create an anchor, and set the href value to our data URL
        const createEl = document.createElement("a");
        createEl.href = canvasUrl;
        console.log("udah diklik");
        // This is the name of our downloaded file
        createEl.download = "Riset3_Tujuan4_" + i;

        // Click the download button, causing a download, and then remove it
        createEl.click();
        createEl.remove();
      });
  })(i);
}
