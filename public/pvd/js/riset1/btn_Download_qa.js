// StartValidasi
let idbutton=''
let idinput=''
let mailRegex = /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/;

for (let i = 1; i < 39; i++) {
    document.getElementById('qa-'+[i]).addEventListener('click',(e) => {
        idbutton='qa'+[i]
        console.log("qa-"+[i]+" diklik")
        idinput=i-1
    });
  }

// FUNCTION GET VALUE WISNUS
function getvalue(){

    
    let nama =document.getElementsByClassName('nama');
    let email = document.getElementsByClassName('email');
    let instansi =document.getElementsByClassName('instansi');
    let konfirmasiButton= document.getElementById(idbutton);
    console.log(idbutton)

    if(nama[idinput].value != "" && email[idinput].value !="" && email[idinput].value.match(mailRegex) && instansi[idinput].value != ""){
        
        konfirmasiButton.disabled=false;
        konfirmasiButton.style.backgroundColor="#7382ab";
        konfirmasiButton.style.color="#fff";
        document.getElementById('erroremail').innerHTML=""
        document.getElementById('errornama').innerHTML=""
        document.getElementById('errorinstansi').innerHTML=""
        console.log('dah aman formnya')
    }else{
        if(nama[idinput].value===""){
            document.getElementById('errornama').innerHTML="Nama harus diisi"
            document.getElementById('errornama').style.color='#fe7c96'
            console.log('nama kosong')
        }else if(instansi[idinput].value ===""){
            document.getElementById('errorinstansi').innerHTML="Instansi harus diisi"
            document.getElementById('errorinstansi').style.color='#fe7c96'
            console.log('instansi kosong')
        }else if(!email[idinput].value.match(mailRegex)){
            document.getElementById('erroremail').innerHTML="Format email salah"
            document.getElementById('erroremail').style.color='#fe7c96'
            console.log('email salah')
        }else if(email[idinput].value===""){
            document.getElementById('erroremail').innerHTML="Email harus diisi"
            document.getElementById('erroremail').style.color='#fe7c96'
            console.log('email kosong')
        }
        
        konfirmasiButton.disabled=true;
        konfirmasiButton.style.backgroundColor="#8d8d8d";
    }
}

// OUTPUT 1
document.getElementById('qa1').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output1_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 1_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa2').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output1_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 1_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 2
document.getElementById('qa3').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output2_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 2_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa4').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output2_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 2_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 3
document.getElementById('qa5').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output3_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 3_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa6').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output3_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 3_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 4
document.getElementById('qa7').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output4_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 4_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa8').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output4_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 4_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});


document.getElementById('qa9').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output4_3').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 4_3";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa10').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output4_4').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 4_4";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 5
document.getElementById('qa11').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output5_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 5_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa12').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output4_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 5_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 6
document.getElementById('qa13').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa14').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa15').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_3').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_3";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa16').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_4').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_4";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa17').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_5').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_5";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa18').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_6').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_6";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa19').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_7').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_7";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa20').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_8').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_8";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa21').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_9').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_9";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa22').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_10').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_10";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa23').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_11').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_11";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa24').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_12').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_12";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa25').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_13";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa26').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_14";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa27').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_3').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_15";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa28').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_4').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_16";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa29').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_17').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_17";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa30').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_18').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_18";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa31').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_19').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_19";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa32').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_20').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_20";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa33').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_21').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_21";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa34').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_22').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_22";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa35').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_23').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_23";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});
document.getElementById('qa36').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output6_24').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 6_24";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

// OUTPUT 7
document.getElementById('qa37').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output7_1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 7_1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('qa38').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('qa_output7_2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Quality Assurance Output 7_2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});