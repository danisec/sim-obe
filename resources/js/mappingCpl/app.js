if (
    window.location.pathname ===
    "/dashboard/data-mapping-cpl/create-mapping-cpl"
) {
    import("./getMataKuliah")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor getMataKuliah");
        });

    import("./getCpmk")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor getCpmk");
        });

    import("./getIndikatorScpmk")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor getIndikatorScpmk");
        });
}

if (
    window.location.pathname ===
        "/dashboard/data-mapping-cpl/create-mapping-cpl" ||
    window.location.pathname.includes(
        "/dashboard/data-mapping-cpl/ubah-mapping-cpl/",
    )
) {
    import("./calculateBobot")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor calculateBobot");
        });
}
