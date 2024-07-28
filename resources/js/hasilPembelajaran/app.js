if (window.location.pathname === "/dashboard/data-hasil-pembelajaran") {
    import("./average")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor average");
        });
}

if (
    window.location.pathname ===
    "/dashboard/data-hasil-pembelajaran/create-hasil-pembelajaran"
) {
    import("./getMataKuliah")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor getMataKuliah");
        });
}
