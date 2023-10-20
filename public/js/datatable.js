$(document).ready(function () {
    $("#tabelData").DataTable({
        columnDefs: [
            { className: "dt-center", targets: "_all" },
            // { "width": "auto", "targets": [1], "orderable":false },
            // { "width": "10%", "targets": [6] },

        ],
    });
});