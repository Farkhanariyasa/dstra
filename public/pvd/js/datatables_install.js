$(document).ready(function () {
  var table = $("#table_id").DataTable({
    language: {
      emptyTable: "Tidak ada data yang tersedia pada tabel ini",
      info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
      infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
      infoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
      infoThousands: "'",
      lengthMenu: "Tampilkan _MENU_ entri",
      loadingRecords: "Sedang memuat...",
      processing: "Sedang memproses...",
      search: "Cari:",
      zeroRecords: "Tidak ditemukan data yang sesuai",
      thousands: "'",
      paginate: {
        first: "Pertama",
        last: "Terakhir",
        next: "Selanjutnya",
        previous: "Sebelumnya",
      },
      aria: {
        sortAscending: ": aktifkan untuk mengurutkan kolom ke atas",
        sortDescending: ": aktifkan untuk mengurutkan kolom menurun",
      },
      autoFill: {
        cancel: "Batalkan",
        fill: "Isi semua sel dengan <i>%d</i>",
        fillHorizontal: "Isi sel secara horizontal",
        fillVertical: "Isi sel secara vertikal",
      },
      buttons: {
        collection:
          "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'/>",
        colvis: "Visibilitas Kolom",
        colvisRestore: "Kembalikan visibilitas",
        copy: "Salin",
        copyKeys:
          "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br><br>To membatalkan, klik pesan ini atau tekan esc.",
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
      searchBuilder: {
        add: "Tambah Kondisi",
        button: {
          0: "Cari Builder",
          _: "Cari Builder (%d)",
        },
        clearAll: "Bersihkan Semua",
        condition: "Kondisi",
        data: "Data",
        deleteTitle: "Hapus filter",
        leftTitle: "Ke Kiri",
        logicAnd: "Dan",
        logicOr: "Atau",
        rightTitle: "Ke Kanan",
        title: {
          0: "Cari Builder",
          _: "Cari Builder (%d)",
        },
        value: "Nilai",
      },
      searchPanes: {
        clearMessage: "Bersihkan Semua",
        collapse: {
          0: "SearchPanes",
          _: "SearchPanes (%d)",
        },
        count: "{total}",
        countFiltered: "{shown} ({total})",
        emptyPanes: "Tidak Ada SearchPanes",
        loadMessage: "Memuat SearchPanes",
        title: "Filter Aktif - %d",
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
  const element = document.querySelector("#table_id_wrapper");
  element.insertBefore(div, element.childNodes[1]);
  table.buttons().container().appendTo("#table_id_wrapper .col-md-12:eq(0)");
});
