/* ====== Chart ====== */

(function ($) {
    "use strict";

    function userNumbers() {
        var options = {
            chart: {
                type: "bar",
                height: 50,
                stacked: !1,
                sparkline: {
                    enabled: !0
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.07
                }
            },
            stroke: {
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Organic",
                data: [1070, 2250, 1565, 4560, 2850, 5658, 7854, 1565, 4560, 2850, 5658, 7854]
            }, {
                name: "Referal",
                data: [950, 2100, 1265, 4160, 2350, 5258, 7354, 1265, 4160, 2350, 5358, 7554]
            }],
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: 30,
                    borderRadius: 0
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                },
                labels: {
                    show: !1
                }
            },
            yaxis: {
                labels: {
                    show: !1
                }
            },
            colors: ["#5f6af5", "#50d1f8"],
        };
        var userNumbers = new ApexCharts(document.querySelector("#userNumbers"), options);
        userNumbers.render();
    }
    function orderNumbers() {
        var options = {
            chart: {
                type: "line",
                height: 50,
                sparkline: {
                    enabled: !0
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            series: [{
                data: [1362, 3954, 7152, 4254, 3485, 4956, 3568, 2365, 1050, 1920, 4785, 6856]
            }],
            stroke: {
                curve: "smooth",
                width: 3
            },
            colors: ["#5f6af5"],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                }
            },
            tooltip: {
                fixed: {
                    enabled: !1
                },
                y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }
            },
        };

        var orderNumbers = new ApexCharts(document.querySelector("#orderNumbers"), options);
        orderNumbers.render();
    }
    function revenueNumbers() {
        var options = {
            series: [{
                data: [1070, 2250, 1565, 4560, 2850, 5658, 7854, 1565, 4560, 2850, 5658, 7854]
            }],
            chart: {
                type: "bar",
                height: 50,
                sparkline: {
                    enabled: !0
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: 25,
                    borderRadius: 0
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                }
            },
            tooltip: {
                fixed: {
                    enabled: !1
                },
                y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }
            },
            colors: ["#ff4f7f"]
        };
        var revenueNumbers = new ApexCharts(document.querySelector("#revenueNumbers"), options);
        revenueNumbers.render();
    }
    function expensesNumbers() {
        var options = {
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: !0
                },
                dropShadow: {
                    enabled: true,
                    enabledOnSeries: undefined,
                    top: 5,
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                }
            },
            series: [{
                data: [850, 1920, 1362, 3954, 2485, 4956, 7152, 1254, 3568, 2365, 4785, 6856]
            }],
            stroke: {
                curve: "smooth",
                width: 3
            },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .3,
                    opacityTo: .04,
                    stops: [50, 100, 100, 100]
                }
            },
            colors: ["#2bbb93"],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                }
            },
            tooltip: {
                fixed: {
                    enabled: !1
                },
                y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }
            },
        };

        var expensesNumbers = new ApexCharts(document.querySelector("#expensesNumbers"), options);
        expensesNumbers.render();
    }
    function visitOverviewChart() {
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
                dashArray: [0, 0, 2]
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
                }
            },
            series: [{
                name: 'Users',
                data: [10, 13, 15, 12, 13, 15, 13, 16, 14, 17, 18],
            }, {
                name: 'New Users',
                data: [7, 11, 12, 10, 9, 12, 9, 12, 11, 12, 14],
            }, {
                name: 'Page Views',
                data: [14, 16, 17, 15, 16, 17, 16, 18, 17, 19, 20],
            }],
            colors: ["#5f6af5", "#20b8a4", "#ff4f7f"],
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
                        return e + "M"
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
                        height: '300px',
                    },
                    yaxis: {
                        show: false,
                    },
                }
            }]
        };
        var visitOverviewChart = new ApexCharts(document.querySelector("#visitOverviewChart"), options);
        visitOverviewChart.render();
    }
    function deviceChart() {
        var options = {
            series: [60, 22, 18],
            labels: ['Desktop', 'Phone', 'Tablet'],
            chart: {
                height: 300,
                type: 'pie',
            },
            plotOptions: {
                radialBar: {
                    offsetY: 0,
                    startAngle: 0,
                    endAngle: 360,
                    hollow: {
                        margin: 0,
                        padding: 0,
                        size: '60%',
                        background: 'transparent',
                        image: undefined,
                    },
                    dataLabels: {
                        name: {
                            show: true,
                        },
                        value: {
                            show: true,
                        }
                    }
                }
            },
            colors: ['#5f6af5', '#ff4f7f', '#2bbb93'],
            legend: {
                show: false,
                itemMargin: {
                    horizontal: 0,
                    vertical: 0
                }
            },
            responsive: [{
                breakpoint: 1299,
                options: {
                    legend: {
                        show: false
                    },
                    chart: {
                        height: 250,
                    },
                },
            }]
        };
        var chart = new ApexCharts(document.querySelector("#deviceChart"), options);
        chart.render();
    }
    function visitCountry() {
        var options = {
            series: [{
                name: 'Refferel',
                data: [446, 554, 410, 640, 228, 430, 215]
            }, {
                name: 'Organic',
                data: [535, 324, 338, 528, 137, 446, 324]
            }],
            chart: {
                type: 'bar',
                height: 430,
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    dataLabels: {
                        position: 'top',
                    },
                }
            },
            colors: ["#5f6af5", "#50d1f8"],
            dataLabels: {
                enabled: true,
                offsetX: -6,
                style: {
                    fontSize: '12px',
                    colors: ['#fff']
                }
            },
            stroke: {
                show: false,
                width: 0,
                colors: ['#fff']
            },
            tooltip: {
                shared: true,
                intersect: false
            },
            xaxis: {
                categories: ['India', 'USA', 'UK', 'Australia', 'France', 'Japan', 'Italy'],
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
            responsive: [{
                breakpoint: 480,
                options: {
                    yaxis: {
                        show: false,
                    },
                }
            }]
        };
        var chart = new ApexCharts(document.querySelector("#visitCountry"), options);
        chart.render();
    }
    jQuery(window).on('load', function () {
        orderNumbers();
        userNumbers();
        revenueNumbers();
        expensesNumbers();
        visitOverviewChart();
        deviceChart();
        visitCountry();
    });

})(jQuery);