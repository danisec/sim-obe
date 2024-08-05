if (window.location.pathname.includes("/dashboard/data-cpl-cpmk-scpmk/")) {
    import("./scrollOnTopTable")
        .then((module) => {})
        .catch((error) => {
            console.error("Gagal mengimpor scrollOnTopTable");
        });
}
