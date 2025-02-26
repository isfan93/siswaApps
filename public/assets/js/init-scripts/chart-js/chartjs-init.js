(function ($) {
    "use strict";

    var labels = JSON.parse(document.getElementById("csiswa").dataset.labels);
    var values = JSON.parse(document.getElementById("nsiswa").dataset.values);
    // var labels = @json($csiswa);
    // var values = @json($nsiswa);
    //pie chart
    var ctx = document.getElementById("pieChart");
    ctx.height = 300;
    var myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [
                {
                    data: values,
                    // data: [10, 25, 20, 10],
                    backgroundColor: [
                        "rgba(0, 123, 255,0.9)",
                        "rgba(0, 123, 255,0.7)",
                        "rgba(0, 123, 255,0.5)",
                        "rgba(0,0,0,0.07)",
                    ],
                    hoverBackgroundColor: [
                        "rgba(0, 123, 255,0.9)",
                        "rgba(0, 123, 255,0.7)",
                        "rgba(0, 123, 255,0.5)",
                        "rgba(0,0,0,0.07)",
                    ],
                },
            ],
        },
        options: {
            responsive: true,
        },
    });
})(jQuery);
