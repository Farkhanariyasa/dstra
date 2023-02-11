
// const buttonclicked = "btndownload3"
// const konfirmasiButton= document.getElementById(buttonclicked);
const konfirmasiButton= document.getElementById("btndownload3");
// const inputNama= document.getElementById("nama");
// const inputEmail= document.getElementById("email");
// const inputInstansi= document.getElementById("instansi");
let mailRegex = /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/;
let hoverButton =':hover{ background-color: #00ff00 }'

function getvalue(){
    let nama =document.getElementById('nama').value
    let email = document.getElementById('email').value
    let instansi =document.getElementById('instansi').value
  

    if(nama != "" && email !="" && email.match(mailRegex) && instansi != ""){
        console.log(email);
        konfirmasiButton.disabled=false;
        konfirmasiButton.style.backgroundColor="#7382ab";
        konfirmasiButton.style.color="#fff";
        // konfirmasiButton.style.cssText=hoverButton;
        document.getElementById('erroremail').innerHTML=""
        document.getElementById('errornama').innerHTML=""
        document.getElementById('errorinstansi').innerHTML=""
    }else{
        if(nama===""){
            document.getElementById('errornama').innerHTML="Nama harus diisi"
            document.getElementById('errornama').style.color='#fe7c96'
        }else if(instansi ===""){
            document.getElementById('errorinstansi').innerHTML="Instansi harus diisi"
            document.getElementById('errorinstansi').style.color='#fe7c96'
        }else{
            document.getElementById('erroremail').innerHTML="Format email salah"
            document.getElementById('erroremail').style.color='#fe7c96'
        }
        console.log(instansi);
        konfirmasiButton.disabled=true;
        konfirmasiButton.style.backgroundColor="#8d8d8d";
    }
}




// inputNama.addEventListener("keyup", (e) =>{
//     const value = e.currentTarget.value;
//     if(value!=""){
//         inputEmail.addEventListener("keyup", (event) =>{
//             const valueemail= event.currentTarget.value;
//             inputInstansi.addEventListener("keyup", (eventins) =>{
//                 const valueinstansi=eventins.currentTarget.value;
//                 if(valueemail != "" && valueinstansi !="" && valueemail.match(mailRegex)){
//                     console.log(inputEmail);
//                     konfirmasiButton.disabled=false;
//                     konfirmasiButton.style.backgroundColor="#7382ab";
//                 }else{
//                     console.log(inputInstansi);
//                     konfirmasiButton.disabled=true;
//                     konfirmasiButton.style.backgroundColor="#8d8d8d";
//                 }
//             })
//         })
//     }else{
//         konfirmasiButton.disabled=true;
//         inputEmail.addEventListener("keyup", (event) =>{
//             const valueemail= event.currentTarget.value;
//             inputInstansi.addEventListener("keyup", (eventins) =>{
//                 const valueinstansi=eventins.currentTarget.value;
//                 if(valueemail != "" && valueinstansi !="" && valueemail.match(mailRegex)){
//                     console.log(inputEmail);
//                     konfirmasiButton.disabled=false;
//                     konfirmasiButton.style.backgroundColor="#7382ab";
//                 }else{
//                     console.log(inputInstansi);
//                     konfirmasiButton.disabled=true;
//                     konfirmasiButton.style.backgroundColor="#8d8d8d";
//                 }
//             })
//         })
//     }
    
    
// });

document.getElementById('btndownload').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('tk_pie').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-3-piechart";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload2').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('j_doughnut').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-3-doughnut";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload3').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('ji_batang').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-3-barplot";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});