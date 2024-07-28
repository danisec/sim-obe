import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    let columns = [];
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

    // Key mappings for the columns
    let keys = [
        "23-MKU-CPL-01",
        "23-MKU-CPL-02",
        "23-MKU-CPL-03",
        "23-MKU-CPL-04",
    ];

    // Menyimpan rata-rata ke dalam elemen HTML dan input hidden
    keys.forEach((key, index) => {
        $(`#rata-kolom-${index + 1}`).text(averages[index]);
        $(`#input-rata-kolom-${index + 1}`).val(averages[index]);
    });

    // Mengirim data rata-rata ke server dengan AJAX
    let scoresData = {};
    keys.forEach((key, index) => {
        scoresData[key] = averages[index];
    });

    // Mengirim data rata-rata ke server dengan AJAX
    let csrfToken = $('meta[name="csrf-token"]').attr("content");

    $.ajax({
        url: "/dashboard/data-hasil-pembelajaran",
        method: "POST",
        data: {
            _token: csrfToken,
            scores: scoresData,
        },
        error: function (error) {
            console.error("Terjadi kesalahan saat menyimpan data:", error);
        },
    });
});
