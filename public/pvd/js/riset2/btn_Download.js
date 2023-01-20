document.getElementById("download_pw_sankey").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("pw_sankey").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "Hasil SP Riset 2 Diagram Sankey";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});

document.getElementById("download_jk_bar").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("jk_bar").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "Hasil SP Riset 2 Grafik Batang Vertikal";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});

document.getElementById("download_barhorizontal").addEventListener("click", function (e) {
  // Convert our canvas to a data URL
  let canvasUrl = document.getElementById("bar_horizontal").toDataURL();
  // Create an anchor, and set the href value to our data URL
  const createEl = document.createElement("a");
  createEl.href = canvasUrl;

  // This is the name of our downloaded file
  createEl.download = "Hasil SP Riset 2 Grafik Batang Horizontal";

  // Click the download button, causing a download, and then remove it
  createEl.click();
  createEl.remove();
});
