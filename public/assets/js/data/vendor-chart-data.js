/* ====== Chart ====== */

(function ($) {
    "use strict";

    function vendorChart() {
        var options = {
            chart: {
                height: 350,
                type: 'line',
                stacked: false,
                foreColor: '#373d3f',
                sparkline: {
                    enabled: !1
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                },
                toolbar: {
                    show: !1
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                width: [2, 2, 2],
                curve: "smooth",
            },
            series: [
                {
                    name: 'Revenue',
                    data: [14, 16, 17, 15, 30, 15, 16, 25, 17, 19, 20],
                }, {
                    name: 'Orders',
                    data: [10, 13, 15, 12, 20, 14, 15, 18, 14, 17, 18],
                }, {
                    name: 'Return',
                    data: [2, 3, 1, 1, 3, 2, 2, 3, 4, 1, 5],
                },
            ],
            fill: {
                opacity: [1, 1, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [50, 100, 100, 100]
                }
            },
            colors: ["#5f6af5", "#ff4f7f", "#20b8a4"],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisTicks: {
                    show: !1
                },
                axisBorder: {
                    show: !1
                }
            },
            yaxis: {
                labels: {
                    formatter: function (e) {
                        return e + "k"
                    },
                    offsetX: -15
                }
            },
            legend: {
                show: !0,
                horizontalAlign: "center",
                offsetX: 0,
                offsetY: -5,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                itemMargin: {
                    horizontal: 10,
                    vertical: 0
                }
            },
            grid: {
                show: !1,
                xaxis: {
                    lines: {
                        show: !1
                    }
                },
                yaxis: {
                    lines: {
                        show: !1
                    }
                },
                padding: {
                    top: 0,
                    right: -2,
                    bottom: 15,
                    left: 0
                },
            },
        };
        var vendorChart = new ApexCharts(document.querySelector("#vendorChart"), options);
        vendorChart.render();
    }

    jQuery(window).on('load', function () {
        vendorChart();
    });

})(jQuery);