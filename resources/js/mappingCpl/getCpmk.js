import jQuery from "jquery";
window.$ = jQuery;

$(document).ready(function () {
    $("#kodeCpl").on("change", function () {
        const kodeCpl = $(this).val();

        $.ajax({
            url:
                "/dashboard/data-mapping-cpl/create-mapping-cpl/" +
                kodeCpl +
                "/getCpmk",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $("#kodeCpmk").empty();

                let option = $("<option>", {
                    text: "Pilih Kode CPL",
                    selected: true,
                    hidden: true,
                    disabled: true,
                });

                $("#kodeCpmk").append(option);

                $.each(data, function (key, value) {
                    $.each(
                        value.capaian_pembelajaran_matakuliah,
                        function (index, cpmk) {
                            $("#kodeCpmk").append(
                                '<option value="' +
                                    cpmk.kode_cpmk +
                                    '">' +
                                    cpmk.kode_cpmk +
                                    "</option>",
                            );
                        },
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });

    // Get SCPMK
    $("#kodeCpmk").on("change", function () {
        const kodeCpmk = $(this).val();

        $.ajax({
            url:
                "/dashboard/data-mapping-cpl/create-mapping-cpl/" +
                kodeCpmk +
                "/getScpmk",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $("#kodeScpmk").empty();

                let option = $("<option>", {
                    text: "Pilih Kode SCPMK",
                    selected: true,
                    hidden: true,
                    disabled: true,
                });

                $("#kodeScpmk").append(option);

                $.each(data, function (key, value) {
                    $.each(
                        value.sub_capaian_pembelajaran_matakuliah,
                        function (index, scpmk) {
                            $("#kodeScpmk").append(
                                '<option value="' +
                                    scpmk.kode_scpmk +
                                    '">' +
                                    scpmk.kode_scpmk +
                                    "</option>",
                            );
                        },
                    );
                });
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });
});
