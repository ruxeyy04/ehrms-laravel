/* ====== Chart ====== */

(function ($) {
    "use strict";
    function userNumbers() {
        var options = {
            chart: {
                type: "bar",
                height: 50,
                stacked: !0,
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
            colors: ["#5f6af5", "rgba(95, 105, 245, 0.5)"],
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
                width: 2
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
            colors: ["#5f6af5"]
        };
        var revenueNumbers = new ApexCharts(document.querySelector("#revenueNumbers"), options);
        revenueNumbers.render();
    }
    function expensesNumbers() {
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
                data: [850, 1920, 1362, 3954, 2485, 4956, 7152, 1254, 3568, 2365, 4785, 6856]
            }],
            stroke: {
                curve: "smooth",
                width: 2
            },
            colors: ["#ff4f7f"],
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
    function overviewChart() {
        var options = {
            series: [{
                name: 'Events',
                type: 'bar',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
            }, {
                name: 'Total Employees',
                type: 'line',
                data: [44.64, 55.48, 45.15, 67.62, 52.57, 44.38, 41.85, 41.44, 56.56, 27.84, 43.78]
            }, {
                name: 'New Employees',
                type: 'line',
                data: [30.55, 24.67, 36.85, 37.08, 42.85, 38.85, 46.64, 45.42, 49.89, 36.56, 38.49]
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
                    left: 5,
                    blur: 3,
                    color: '#000',
                    opacity: 0.1
                },
                toolbar: {
                    show: !1
                }
            },
            stroke: {
                width: [2, 2, 2],
                curve: 'smooth'
            },
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
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
                        return void 0 !== e ? "$" + e.toFixed(2) + "k" : e
                    }
                }, {
                    formatter: function (e) {
                        return void 0 !== e ? "$" + e.toFixed(2) + "k" : e
                    }
                }]
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
        var overviewChart = new ApexCharts(document.querySelector("#overviewChart"), options);
        overviewChart.render();
    }
    function campaignsChart() {
        var options = {
            series: [96, 84, 72],
            chart: {
                height: '360px',
                type: 'radialBar',
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
            labels: ['Request', 'Appoved', 'Cancelled'],
            legend: {
                show: !0,
                horizontalAlign: "center",
                offsetX: 0,
                offsetY: -15,
                position: 'bottom',
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
            stroke: {
                lineCap: "round",
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: '250px',
                    },
                    legend: {
                        show: false
                    }
                }
            }]
        };
        var campaignsChart = new ApexCharts(document.querySelector("#campaignsChart"), options);
        campaignsChart.render();
    }
    function ageChart() {
        var options = {
            series: [0, 0, 0, 1, 0, 2, 2, 3],
            chart: {
                height: '360px',
                type: 'radialBar',
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
            colors: ['#ede14f', '#f4e569','#fbec82','#ffda00','#edbc00','#daa500','#c88a00','#b56f00'],
            labels: ['Under 25', '25-30','31-35','36-40','41-45','46-50','51-55','Over 55'],
            legend: {
                show: !0,
                horizontalAlign: "center",
                offsetX: 0,
                offsetY: -15,
                position: 'bottom',
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
            stroke: {
                lineCap: "round",
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: '250px',
                    },
                    legend: {
                        show: false
                    }
                }
            }]
        };
        var ageChart = new ApexCharts(document.querySelector("#ageChart"), options);
        ageChart.render();
    }

    jQuery(window).on('load', function () {
        orderNumbers();
        userNumbers();
        revenueNumbers();
        expensesNumbers();
        overviewChart();
        campaignsChart();
        // ageChart();
    });

})(jQuery);