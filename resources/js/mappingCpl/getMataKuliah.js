import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    $("#kodeMataKuliah").on("change", function () {
        const kodeMataKuliah = $(this).val();

        $.ajax({
            url:
                "/dashboard/data-mapping-cpl/create-mapping-cpl/" +
                kodeMataKuliah +
                "/getNamaMataKuliah",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $("#namaMataKuliah").empty();

                let option = $("<option>", {
                    text: "Pilih Nama Mata Kuliah",
                    selected: true,
                    hidden: true,
                    disabled: true,
                });

                $("#namaMataKuliah").append(option);

                if (data.nama_mata_kuliah) {
                    let option = $("<option>", {
                        value: data.nama_mata_kuliah,
                        text: data.nama_mata_kuliah,
                    });

                    $("#namaMataKuliah").append(option);
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });
});
