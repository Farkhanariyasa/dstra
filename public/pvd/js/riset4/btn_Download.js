

document.getElementById('btndownload').addEventListener('click', function(e) {
    // Convert our canvas to a data URL
    let canvasUrl = document.getElementById('tk_pie').toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "hasil-sp";

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
    createEl.download = "hasil-sp";

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
    createEl.download = "hasil-sp";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});