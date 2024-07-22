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
 
    jQuery(window).on('load', function () {
        orderNumbers();
        userNumbers();
        revenueNumbers();
        expensesNumbers();
    });

})(jQuery);