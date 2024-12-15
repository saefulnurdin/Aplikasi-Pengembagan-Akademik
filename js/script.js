$(document).ready(function() {
    $("#download").on('click', function() {
        var element = $("#struk-container")[0]; // Ambil elemen yang ingin dicapture

        // Sembunyikan tombol cetak dan tombol kembali sementara
        $("#download").hide();
        $(".button2").hide(); // Tombol kembali dengan kelas .button2

        html2canvas(element, {
            backgroundColor: "white",
            onrendered: function(canvas) {
                var imageData = canvas.toDataURL("image/png");

                var link = document.createElement('a');
                link.href = imageData;
                link.download = 'struk_pendaftaran.png'; // Nama file gambar yang akan diunduh

                link.click();

                // Tampilkan tombol cetak dan tombol kembali setelah unduhan dimulai
                $("#download").show();
                $(".button2").show(); 
            }
        });
    });
});
