import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    let columns = [];
    let keys = []; // Array untuk menyimpan kode CPL yang diambil dari elemen HTML

    // Ambil kode CPL dari elemen HTML
    $(".cpl-code").each(function () {
        keys.push($(this).val());
    });

    $("tbody tr:not(:last)").each(function () {
        let row = $(this);
        row.find("td:not(:first)").each(function (index) {
            let value = parseFloat($(this).text());
            if (!columns[index]) columns[index] = [];
            if (!isNaN(value)) columns[index].push(value);
        });
    });

    // Rata-rata per kolom
    let averages = columns.map(function (column) {
        let sum = column.reduce(function (a, b) {
            return a + b;
        }, 0);
        let average = sum / column.length;
        return isNaN(average) ? "" : average.toFixed(2);
    });

    // Menyimpan rata-rata ke dalam elemen HTML dan input hidden
    keys.forEach((key, index) => {
        $(`#rata-kolom-${index + 1}`).text(averages[index] || "");
        $(`#input-rata-kolom-${index + 1}`).val(averages[index] || "");
    });

    // Mengirim data rata-rata ke server dengan AJAX
    let scoresData = {};
    let hasValidData = false;

    keys.forEach((key, index) => {
        if (averages[index] !== "") {
            scoresData[key] = averages[index];
            hasValidData = true;
        }
    });

    if (hasValidData) {
        let csrfToken = $('meta[name="csrf-token"]').attr("content");

        $.ajax({
            url: "/dashboard/data-hasil-pembelajaran",
            method: "POST",
            data: {
                _token: csrfToken,
                scores: scoresData,
            },
            success: function (response) {
                // Handle success
            },
            error: function (error) {
                // Handle error
            },
        });
    }
});
