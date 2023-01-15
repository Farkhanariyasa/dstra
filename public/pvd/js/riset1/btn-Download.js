document.getElementById('btndownload').addEventListener('click', function(e) {
    let canvas = document.getElementById('riset1_hasil1');
    // Convert our canvas to a data URL
    let canvasUrl = canvas.toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Riset 1 Hasil 1";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload2').addEventListener('click', function(e) {
    let canvas = document.getElementById('riset1_hasil2');
    // Convert our canvas to a data URL
    let canvasUrl = canvas.toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Sankey Diagram";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});

document.getElementById('btndownload3').addEventListener('click', function(e) {
    let canvas = document.getElementById('riset1_hasil3');
    // Convert our canvas to a data URL
    let canvasUrl = canvas.toDataURL();
    // Create an anchor, and set the href value to our data URL
    const createEl = document.createElement('a');
    createEl.href = canvasUrl;

    // This is the name of our downloaded file
    createEl.download = "Sankey Diagram 2";

    // Click the download button, causing a download, and then remove it
    createEl.click();
    createEl.remove();
});