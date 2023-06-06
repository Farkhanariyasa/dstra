$(document).ready(function() {
    // Menampilkan selected value saat halaman pertama kali dimuat
    var selectedValue = $("#name").val();
    console.log(selectedValue);
  
    // Mengubah tampilan berdasarkan selected value
    $(".datatujuan").hide();
    $("#" + selectedValue).fadeIn(700);
  
    // Event handler saat pilihan diubah
    $("#name").on('change', function() {
      $(".datatujuan").hide();
      $("#" + $(this).val()).fadeIn(700);
    });
  });