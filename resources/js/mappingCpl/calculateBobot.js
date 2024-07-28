import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    // Fungsi untuk menghitung total bobot
    function calculateTotalBobot() {
        let total = 0;
        $('input[type="number"]').each(function () {
            let value = parseFloat($(this).val());
            if (!isNaN(value)) {
                total += value;
            }
        });
        $("#totalBobot").val(total + "%");
    }

    // Hitung total bobot saat nilai input berubah
    $('input[type="number"]').on("input", function () {
        calculateTotalBobot();
    });

    calculateTotalBobot();
});
