import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    $("#kodeMataKuliah").on("change", function () {
        const kodeMataKuliah = $(this).val();

        $.ajax({
            url:
                "/dashboard/data-hasil-pembelajaran/create-hasil-pembelajaran/" +
                kodeMataKuliah +
                "/getMataKuliah",
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

                $.each(data, function (key, value) {
                    $("#namaMataKuliah").append(
                        '<option value="' +
                            value.nama_mata_kuliah +
                            '">' +
                            value.nama_mata_kuliah +
                            "</option>",
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });
});
