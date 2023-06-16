function getColor(d) {
  if (d == "Pujon" || d == "Poncokusumo" || d == "Bantur") {
    return "#B35C74";
  } else {
    return "#506396";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.kecamatan),
    weight: 1,
    opacity: 1,
    color: "white",
    fillOpacity: 0.8,
  };
}

var geojson;
var info = L.control();
var legend = L.control({ position: "bottomright" });

function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 3,
    color: "#4b395f",
    fillOpacity: 0.9,
  });

  layer.bringToFront();
  info.update(layer.feature.properties);
}

function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info.update();
}

var peta_malang_isw = L.map("chart_isw", {
  maxBounds: [
    [-7.8, 112.3],
    [-8.4, 113],
  ],
  maxBoundsViscosity: 1,
  center: [-8.1, 112.65],
  zoom: 10.2,
  zoomSnap: 0.01, // enables fractional zooms
});

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  minZoom: 10,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_malang_isw);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

geojson = L.geoJSON(peta_malang, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(peta_malang_isw);

info.onAdd = function (peta_malang_isw) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function () {
  this._div.innerHTML = "<h4>ISW</h4>" + "Kabupaten Malang<br/> <h3>60.34</h3>";
};

info.addTo(peta_malang_isw);

legend.onAdd = function (peta_malang_isw) {
  var div = L.DomUtil.create("div", "info legend");
  grades = [0, 41.53, 79.14, 100];
  labels = ["Kurang", "Sedang", "Baik"];

  // loop through our density intervals and generate a label with a colored square for each interval
  for (var i = 0; i < grades.length - 1; i++) {
    div.innerHTML +=
      // '<i style="background:' +
      // getColor(grades[i] + 1) +
      // '"></i> ' +
      grades[i] +
      " &le; ISW &lt; " +
      grades[i + 1] +
      " (" +
      labels[i] +
      ")" +
      "<br>";
  }

  return div;
};

legend.addTo(peta_malang_isw);
