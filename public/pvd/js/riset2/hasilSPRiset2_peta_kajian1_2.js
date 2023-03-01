function getColor(d) {
  if (d == "Blimbing") {
    return "#F5A300";
  } else if (d == "Kedungkandang") {
    return "#4F6396";
  } else if (d == "Lowokwaru") {
    return "#4C395F";
  } else if (d == "Sukun") {
    return "#F5A300";
  } else if (d == "Klojen") { 
    return "#B45C75";
  }
}

function style(feature) {
  return {
    fillColor: getColor(feature.properties.NAME_3),
    weight: 2,
    opacity: 1,
    color: "white",
    // dashArray: "3",
    fillOpacity: 0.7,
  };
}

var geojson;
var info = L.control();

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

var peta_malang_hasil2 = L.map("peta_malang_hasil2").setView(
  [-7.9797, 112.6304],
  12.4
);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_malang_hasil2);

function onEachFeature(feature, layer) {
  layer.on({
    mouseover: highlightFeature,
    mouseout: resetHighlight,
  });
}

geojson = L.geoJSON(kec_malang, {
  style: style,
  onEachFeature: onEachFeature,
}).addTo(peta_malang_hasil2);

info.onAdd = function (peta_malang_hasil2) {
  this._div = L.DomUtil.create("div", "info"); // create a div with a class "info"
  this.update();
  return this._div;
};

info.update = function (props) {
  this._div.innerHTML =
    "<h4>US Population Density</h4>" +
    (props
      ? "<b>" +
        props.NAME_3 +
        "</b><br />" +
        props.perjalanan
        // " people / mi<sup>2</sup>"
      : "Kecamatan");
};

info.addTo(peta_malang_hasil2);

