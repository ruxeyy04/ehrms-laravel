/* ====== Chart ====== */

(function ($) {
    "use strict";

    function profitChart() {
        var options = {
            chart: {
                height: 210,
                type: 'bar',
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
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: 25
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                show: !0,
                width: 3,
                colors: ["transparent"]
            },
            series: [{
                name: "Cost",
                data: [11, 19, 16, 24, 21, 29, 21]
            }, {
                name: "Profit",
                data: [12, 14, 11, 29, 14, 36, 14]
            }],
            zoom: {
                enabled: !1
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
            colors: ["#5f6af5", "#50d1f8"],
            xaxis: {
                categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
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
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (e) {
                        return "$" + e + "k"
                    }
                }
            }
        };
        var profitChart = new ApexCharts(document.querySelector("#profitChart"), options);
        profitChart.render();
    }
    function newrevenueChart() {
        var options = {
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
                    data: [8, 16, 17, 10, 16, 17, 7, 18, 14, 19, 20],
                }, {
                    name: 'Orders',
                    data: [8, 13, 15, 10, 13, 15, 8, 16, 14, 17, 18],
                }, {
                    name: 'Expence',
                    data: [7, 11, 12, 9, 9, 12, 9, 12, 14, 12, 14],
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
            colors: ["#5f6af5", "#50d1f8", "#20b8a4"],
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
        var newrevenueChart = new ApexCharts(document.querySelector("#newrevenueChart"), options);
        newrevenueChart.render();
    }
    function newcampaignsChart() {
        var options = {
            series: [{
                name: 'Social',
                data: [80, 50, 60, 40, 100, 50],
            }, {
                name: 'Referral',
                data: [40, 100, 50, 80, 50, 90],
            }, {
                name: 'Organic',
                data: [40, 50, 20, 60, 50, 30],
            }
            ],
            chart: {
                height: 300,
                type: 'radar',
                toolbar: {
                    show: false,
                },
            },
            colors: ["#5f6af5", "#ff4f7f", "#20b8a4"],
            title: {
                text: undefined,
                align: 'left',
                margin: 10,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize: '14px',
                    fontWeight: 'bold',
                    fontFamily: undefined,
                    color: '#263238'
                },
            },
            legend: {
                show: false,
            },
            xaxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June']
            }
        };
        var newcampaignsChart = new ApexCharts(document.querySelector("#newcampaignsChart"), options);
        newcampaignsChart.render();
    }

    jQuery(window).on('load', function () {
        newrevenueChart();
        profitChart();
        newcampaignsChart();
    });

})(jQuery);