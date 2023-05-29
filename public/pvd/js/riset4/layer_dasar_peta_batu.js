function getColor(d) {
  if (d == "Batu") {
    return "#F5A300";
  } else if (d == "Junrejo") {
    return "#4F6396";
  } else if (d == "Bumiaji") {
    return "#4C395F";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.Kecamatan),
    weight: 2,
    opacity: 1,
    color: "white",
    // dashArray: "3",
    fillOpacity: 0.7,
  };
}

var geojson;
var info = L.control();
var legend = L.control({ position: "bottomright" });

function highlightFeature(e) {
  var layer = e.target;

  layer.setStyle({
    weight: 5,
    color: "#666",
    fillOpacity: 0.7,
  });

  layer.bringToFront();
  info.update(layer.feature.properties);
}

function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info.update();
}

var peta_batu_hasil_2 = L.map("peta-batu").setView(
  [-7.8328, 112.5342],
  11
);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_batu_hasil_2);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

geojson = L.geoJSON(peta_batu_ikuptik, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(peta_batu_hasil_2);

info.onAdd = function (peta_batu_hasil_2) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function (props) {
  this._div.innerHTML =
    "<h4>IKUPTIK</h4>" +
    (props
      ? "<b>Kec. " +
        props.Kecamatan +
        "</b><br />" +
        props.IKUPTIK +
        " (" +
        "<strong>" +
        props.status +
        "</strong>)"
        // " people / mi<sup>2</sup>"
      : "<strong>Kota Batu</strong> </b><br /> 46.98 (<strong>Tidak Siap</strong>)");
};

info.addTo(peta_batu_hasil_2);

legend.onAdd = function (peta_batu_hasil_2) {
  var div = L.DomUtil.create("div", "info legend"),
    grades = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    // labels = [];

  // loop through our density intervals and generate a label with a colored square for each interval
  for (var i = 0; i < grades.length; i++) {
    div.innerHTML +=
      '<i style="background:' +
      getColor(grades[i] + 1) +
      '"></i> ' +
      grades[i] +
      "<br>";
  }

  return div;
};

legend.addTo(peta_batu_hasil_2);

