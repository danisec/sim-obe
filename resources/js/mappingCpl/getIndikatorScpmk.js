import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    $("#kodeMataKuliah").on("change", function () {
        const kodeMataKuliah = $(this).val();

        $.ajax({
            url:
                "/dashboard/data-mapping-cpl/create-mapping-cpl/" +
                kodeMataKuliah +
                "/getIndikatorScpmk",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $(".indikatorKodeScpmk").empty();

                let option = $("<option>", {
                    text: "Pilih Kode SCPMK",
                    value: "",
                    selected: true,
                });

                $(".indikatorKodeScpmk").append(option);

                $.each(data, function (key, value) {
                    // Mengakses array sub_capaian_pembelajaran_matakuliah
                    let subCpmkArray =
                        value.sub_capaian_pembelajaran_matakuliah;

                    // Iterasi melalui setiap sub_capaian_pembelajaran_matakuliah
                    $.each(subCpmkArray, function (subKey, subValue) {
                        let itemScpmk = subValue;

                        // Menambahkan opsi baru ke select element
                        $(".indikatorKodeScpmk").append(
                            '<option value="' +
                                itemScpmk.kode_scpmk +
                                '">' +
                                itemScpmk.kode_scpmk +
                                "</option>",
                        );
                    });
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });
});
