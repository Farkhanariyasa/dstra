

document.getElementById('btndownload4-doughnut').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('hasil1').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-4-doughnut-Unit Usaha TIK";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload4-boxplot').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('hasil2').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-4-boxplot-Sebaran Pendapatan Usaha";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
    
});
document.getElementById('btndownload4-scatter').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('hasil4').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-4-scatter-Umur dan Pendapatan";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload4-barplot').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('hasil5').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp-riset-4-barplot-Penggunaan TIK";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload4-heatmap').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('hasil5').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload4-peta').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('map').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});