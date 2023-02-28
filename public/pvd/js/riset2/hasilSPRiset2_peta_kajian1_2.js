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

var peta_malang_hasil2 = L.map("peta_malang_hasil2").setView(
  [-7.9797, 112.6304],
  12.4
);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(peta_malang_hasil2);

L.geoJSON(kec_malang, {style : style}).addTo(peta_malang_hasil2);
