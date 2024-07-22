/* ====== Chart ====== */

(function ($) {
    "use strict";

    function overviewTeam() {
        var options = {
            series: [{
                name: 'Tickets',
                type: 'bar',
                data: [23, 12, 23, 22, 15, 35, 31]
            }, {
                name: 'Task',
                type: 'line',
                data: [22, 15, 23, 42, 31, 12, 23]
            }, {
                name: 'Project',
                type: 'line',
                data: [12, 15, 17, 30, 35, 17, 27]
            }],
            chart: {
                height: 365,
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
                    left: -3,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                },
                toolbar: {
                    show: !1
                }
            },
            stroke: {
                width: 2,
                dashArray: [0, 0, 2]
            },
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: 15,
                    borderRadius: 3
                }
            },
            colors: ["#5f6af5", "#20b8a4", "#ff4f7f"],
            xaxis: {
                categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                axisTicks: {
                    show: !1
                },
                axisBorder: {
                    show: !1
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
            tooltip: {
                shared: !0,
                y: [{
                    formatter: function (e) {
                        return void 0 !== e ? e.toFixed(0) : e
                    }
                }, {
                    formatter: function (e) {
                        return void 0 !== e ? e.toFixed(0) : e
                    }
                }, {
                    formatter: function (e) {
                        return void 0 !== e ? + e.toFixed(0) : e
                    }
                }]
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: '250px',
                    },
                    yaxis: {
                        show: false,
                    },
                }
            }]
        };
        var overviewTeam = new ApexCharts(document.querySelector("#overviewTeam"), options);
        overviewTeam.render();
    }

    jQuery(window).on('load', function () {
        overviewTeam();
    });

})(jQuery);