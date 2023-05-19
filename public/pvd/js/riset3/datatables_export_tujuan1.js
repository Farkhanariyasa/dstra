$(document).ready(function() {
  var table1 = $('#table1').DataTable({
    paging: false,
    ordering: false,
    info: false,
    "bFilter": false,
    language: {
      buttons: {
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copySuccess: {
          1: "1 baris disalin ke papan klip",
          _: "%d baris disalin ke papan klip",
        },
        copyTitle: "Salin ke Papan klip",
        csv: "CSV",
        excel: "Excel",
        pageLength: {
          1: "Tampilkan 1 baris",
          "-1": "Tampilkan semua baris",
          _: "Tampilkan %d baris",
        },
        pdf: "PDF",
        print: "Cetak",
      },
    },
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  var table2 = $('#table2').DataTable({
    paging: false,
    ordering: false,
    info: false,
    "bFilter": false,
    language: {
      buttons: {
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copySuccess: {
          1: "1 baris disalin ke papan klip",
          _: "%d baris disalin ke papan klip",
        },
        copyTitle: "Salin ke Papan klip",
        csv: "CSV",
        excel: "Excel",
        pageLength: {
          1: "Tampilkan 1 baris",
          "-1": "Tampilkan semua baris",
          _: "Tampilkan %d baris",
        },
        pdf: "PDF",
        print: "Cetak",
      },
    },
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  var table3 = $('#table3').DataTable({
    paging: false,
    ordering: false,
    info: false,
    "bFilter": false,
    language: {
      buttons: {
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copySuccess: {
          1: "1 baris disalin ke papan klip",
          _: "%d baris disalin ke papan klip",
        },
        copyTitle: "Salin ke Papan klip",
        csv: "CSV",
        excel: "Excel",
        pageLength: {
          1: "Tampilkan 1 baris",
          "-1": "Tampilkan semua baris",
          _: "Tampilkan %d baris",
        },
        pdf: "PDF",
        print: "Cetak",
      },
    },
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  var table4 = $('#table4').DataTable({
    paging: false,
    ordering: false,
    info: false,
    "bFilter": false,
    language: {
      buttons: {
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copySuccess: {
          1: "1 baris disalin ke papan klip",
          _: "%d baris disalin ke papan klip",
        },
        copyTitle: "Salin ke Papan klip",
        csv: "CSV",
        excel: "Excel",
        pageLength: {
          1: "Tampilkan 1 baris",
          "-1": "Tampilkan semua baris",
          _: "Tampilkan %d baris",
        },
        pdf: "PDF",
        print: "Cetak",
      },
    },
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  var table5 = $('#table5').DataTable({
    paging: false,
    ordering: false,
    info: false,
    "bFilter": false,
    language: {
      buttons: {
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copySuccess: {
          1: "1 baris disalin ke papan klip",
          _: "%d baris disalin ke papan klip",
        },
        copyTitle: "Salin ke Papan klip",
        csv: "CSV",
        excel: "Excel",
        pageLength: {
          1: "Tampilkan 1 baris",
          "-1": "Tampilkan semua baris",
          _: "Tampilkan %d baris",
        },
        pdf: "PDF",
        print: "Cetak",
      },
    },
    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
  });

  const baris = document.createElement("div");
  baris.classList.add("row");

  const div = document.createElement("div");
  div.classList.add("col-md-12");
  div.classList.add("col-sm-12");
  div.classList.add("my-3");
  div.appendChild(baris);
  const element = document.querySelector("#table1_wrapper");
  element.insertBefore(div, element.childNodes[1]);
  table1.buttons().container().appendTo("#table1_wrapper .col-md-12:eq(0)");

  const div2 = document.createElement("div");
  div2.classList.add("col-md-12");
  div2.classList.add("col-sm-12");
  div2.classList.add("my-3");
  div2.appendChild(baris);
  // const element2 = document.querySelector("#table2_wrapper");
  // element.insertBefore(div2, element2.childNodes[1]);
  // table2.buttons().container().appendTo("#table2_wrapper .col-md-12:eq(0)");

  const div3 = document.createElement("div");
  div3.classList.add("col-md-12");
  div3.classList.add("col-sm-12");
  div3.classList.add("my-3");
  div3.appendChild(baris);
  const element3 = document.querySelector("#table3_wrapper");
  element3.insertBefore(div3, element3.childNodes[1]);
  table3.buttons().container().appendTo("#table3_wrapper .col-md-12:eq(0)");

  const div4 = document.createElement("div");
  div4.classList.add("col-md-12");
  div4.classList.add("col-sm-12");
  div4.classList.add("my-3");
  div4.appendChild(baris);
  const element4 = document.querySelector("#table4_wrapper");
  element4.insertBefore(div4, element4.childNodes[1]);
  table4.buttons().container().appendTo("#table4_wrapper .col-md-12:eq(0)");

  const div5 = document.createElement("div");
  div5.classList.add("col-md-12");
  div5.classList.add("col-sm-12");
  div5.classList.add("my-3");
  div5.appendChild(baris);
  const element5 = document.querySelector("#table5_wrapper");
  element5.insertBefore(div5, element5.childNodes[1]);
  table5.buttons().container().appendTo("#table5_wrapper .col-md-12:eq(0)");

  

});