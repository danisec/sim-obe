if (
    window.location.pathname ===
    "/dashboard/data-mapping-cpl/create-mapping-cpl"
) {
    import("./getCpmk")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor getCpmk");
        });

    import("./calculateBobot")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor calculateBobot");
        });
}
