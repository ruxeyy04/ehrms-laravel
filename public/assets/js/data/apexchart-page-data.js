/* ====== Chart ====== */

(function ($) {
    "use strict";

    function mixChart() {
        var options = {
            series: [{
                name: 'Orders',
                type: 'bar',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
            }, {
                name: 'Revenue',
                type: 'line',
                data: [44.64, 55.48, 45.15, 67.62, 52.57, 44.38, 41.85, 41.44, 56.56, 27.84, 43.78]
            }, {
                name: 'Expence',
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
            }
        };
        var mixChart = new ApexCharts(document.querySelector("#mixChart"), options);
        mixChart.render();
    }
    function allmixChart() {
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
            }
        };
        var allmixChart = new ApexCharts(document.querySelector("#allmixChart"), options);
        allmixChart.render();
    }
    function lineChartSimple() {
        var options = {
            chart: {
                type: "line",
                height: 365,
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
            series: [{
                data: [22, 15, 23, 42, 31, 12, 23]
            }],
            stroke: {
                width: 2
            },
            colors: ["#2bbb93"],
            xaxis: {
                categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
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
        var lineChartSimple = new ApexCharts(document.querySelector("#lineChartSimple"), options);
        lineChartSimple.render();
    }
    function lineChart() {
        var options = {
            series: [{
                name: 'Orders',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
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
                width: [2],
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
                opacity: [1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [50, 100, 100, 100]
                }
            },
            colors: ["#5f6af5"],
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
                }]
            }
        };
        var lineChart = new ApexCharts(document.querySelector("#lineChart"), options);
        lineChart.render();
    }
    function doublelineChart() {
        var options = {
            series: [{
                name: 'Orders',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
            }, {
                name: 'Revenue',
                data: [44.64, 55.48, 45.15, 67.62, 52.57, 44.38, 41.85, 41.44, 56.56, 27.84, 43.78]
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
                width: [2, 2],
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
            colors: ["#5f6af5", "#50d1f8"],
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
                }]
            }
        };
        var doublelineChart = new ApexCharts(document.querySelector("#doublelineChart"), options);
        doublelineChart.render();
    }
    function dottedlineChart() {
        var options = {
            series: [{
                name: 'Orders',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
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
                width: [2],
                curve: "smooth",
                dashArray: [2]
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
            colors: ["#5f6af5"],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisTicks: {
                    show: !1
                },
                axisBorder: {
                    show: !1
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
                }]
            }
        };
        var dottedlineChart = new ApexCharts(document.querySelector("#dottedlineChart"), options);
        dottedlineChart.render();
    }
    function areaChartSimple() {
        var options = {
            chart: {
                type: "area",
                height: 365,
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
            series: [{
                data: [22, 15, 23, 42, 31, 12, 23]
            }],
            stroke: {
                width: 2,
                curve: 'straight'
            },
            colors: ["#2bbb93"],
            xaxis: {
                categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
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
        var areaChartSimple = new ApexCharts(document.querySelector("#areaChartSimple"), options);
        areaChartSimple.render();
    }
    function areaChart() {
        var options = {
            series: [{
                name: 'Orders',
                data: [23, 12, 23, 22, 15, 42, 31, 27, 45, 28, 37]
            }],
            chart: {
                height: 365,
                type: 'area',
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
                width: [2],
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
                opacity: [1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [50, 100, 100, 100]
                }
            },
            colors: ["#5f6af5"],
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
                }]
            }
        };
        var areaChart = new ApexCharts(document.querySelector("#areaChart"), options);
        areaChart.render();
    }
    function simpleBarChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
            markers: {
                size: 4,
                hover: {
                    size: 6
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                axisBorder: {
                    show: !0
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
                }
            },
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#ff4f7f", "rgba(255, 79, 126, 0.5)"],
        };
        var simpleBarChart = new ApexCharts(document.querySelector("#simpleBarChart"), options);
        simpleBarChart.render();
    }
    function verticalBarChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Organic",
                data: [1070, 2250, 1565, 4560, 2850, 5658]
            }, {
                name: "Referal",
                data: [950, 2100, 1265, 4160, 2350, 5258]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#50d1f8", "rgba(80, 209, 248, 0.5)"],
        };
        var verticalBarChart = new ApexCharts(document.querySelector("#verticalBarChart"), options);
        verticalBarChart.render();
    }

    function verticalSimpleBarChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Organic",
                data: [1070, 2250, 1565, 4560, 2850, 5658]
            }, {
                name: "Referal",
                data: [950, 2100, 1265, 4160, 2350, 5258]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#616673", "#2b313d"],
        };
        var verticalSimpleBarChart = new ApexCharts(document.querySelector("#verticalSimpleBarChart"), options);
        verticalSimpleBarChart.render();
    }
    function candleChart() {
        var options = {
            series: [{
                data: [{
                    x: new Date(1538778600000),
                    y: [6629.81, 6650.5, 6623.04, 6633.33]
                },
                {
                    x: new Date(1538780400000),
                    y: [6632.01, 6643.59, 6620, 6630.11]
                },
                {
                    x: new Date(1538782200000),
                    y: [6630.71, 6648.95, 6623.34, 6635.65]
                },
                {
                    x: new Date(1538784000000),
                    y: [6635.65, 6651, 6629.67, 6638.24]
                },
                {
                    x: new Date(1538785800000),
                    y: [6638.24, 6640, 6620, 6624.47]
                },
                {
                    x: new Date(1538787600000),
                    y: [6624.53, 6636.03, 6621.68, 6624.31]
                },
                {
                    x: new Date(1538789400000),
                    y: [6624.61, 6632.2, 6617, 6626.02]
                },
                {
                    x: new Date(1538791200000),
                    y: [6627, 6627.62, 6584.22, 6603.02]
                },
                {
                    x: new Date(1538793000000),
                    y: [6605, 6608.03, 6598.95, 6604.01]
                },
                {
                    x: new Date(1538794800000),
                    y: [6604.5, 6614.4, 6602.26, 6608.02]
                },
                {
                    x: new Date(1538796600000),
                    y: [6608.02, 6610.68, 6601.99, 6608.91]
                },
                {
                    x: new Date(1538798400000),
                    y: [6608.91, 6618.99, 6608.01, 6612]
                },
                {
                    x: new Date(1538800200000),
                    y: [6612, 6615.13, 6605.09, 6612]
                },
                {
                    x: new Date(1538802000000),
                    y: [6612, 6624.12, 6608.43, 6622.95]
                },
                {
                    x: new Date(1538803800000),
                    y: [6623.91, 6623.91, 6615, 6615.67]
                },
                {
                    x: new Date(1538805600000),
                    y: [6618.69, 6618.74, 6610, 6610.4]
                },
                {
                    x: new Date(1538807400000),
                    y: [6611, 6622.78, 6610.4, 6614.9]
                },
                {
                    x: new Date(1538809200000),
                    y: [6614.9, 6626.2, 6613.33, 6623.45]
                },
                {
                    x: new Date(1538811000000),
                    y: [6623.48, 6627, 6618.38, 6620.35]
                },
                {
                    x: new Date(1538812800000),
                    y: [6619.43, 6620.35, 6610.05, 6615.53]
                },
                {
                    x: new Date(1538814600000),
                    y: [6615.53, 6617.93, 6610, 6615.19]
                },
                {
                    x: new Date(1538816400000),
                    y: [6615.19, 6621.6, 6608.2, 6620]
                },
                {
                    x: new Date(1538818200000),
                    y: [6619.54, 6625.17, 6614.15, 6620]
                },
                {
                    x: new Date(1538820000000),
                    y: [6620.33, 6634.15, 6617.24, 6624.61]
                },
                {
                    x: new Date(1538821800000),
                    y: [6625.95, 6626, 6611.66, 6617.58]
                },
                {
                    x: new Date(1538823600000),
                    y: [6619, 6625.97, 6595.27, 6598.86]
                },
                {
                    x: new Date(1538825400000),
                    y: [6598.86, 6598.88, 6570, 6587.16]
                },
                {
                    x: new Date(1538827200000),
                    y: [6588.86, 6600, 6580, 6593.4]
                },
                {
                    x: new Date(1538829000000),
                    y: [6593.99, 6598.89, 6585, 6587.81]
                },
                {
                    x: new Date(1538830800000),
                    y: [6587.81, 6592.73, 6567.14, 6578]
                },
                {
                    x: new Date(1538832600000),
                    y: [6578.35, 6581.72, 6567.39, 6579]
                },
                {
                    x: new Date(1538834400000),
                    y: [6579.38, 6580.92, 6566.77, 6575.96]
                },
                {
                    x: new Date(1538836200000),
                    y: [6575.96, 6589, 6571.77, 6588.92]
                },
                {
                    x: new Date(1538838000000),
                    y: [6588.92, 6594, 6577.55, 6589.22]
                },
                {
                    x: new Date(1538839800000),
                    y: [6589.3, 6598.89, 6589.1, 6596.08]
                },
                {
                    x: new Date(1538841600000),
                    y: [6597.5, 6600, 6588.39, 6596.25]
                },
                {
                    x: new Date(1538843400000),
                    y: [6598.03, 6600, 6588.73, 6595.97]
                },
                {
                    x: new Date(1538845200000),
                    y: [6595.97, 6602.01, 6588.17, 6602]
                },
                {
                    x: new Date(1538847000000),
                    y: [6602, 6607, 6596.51, 6599.95]
                },
                {
                    x: new Date(1538848800000),
                    y: [6600.63, 6601.21, 6590.39, 6591.02]
                },
                {
                    x: new Date(1538850600000),
                    y: [6591.02, 6603.08, 6591, 6591]
                },
                {
                    x: new Date(1538852400000),
                    y: [6591, 6601.32, 6585, 6592]
                },
                {
                    x: new Date(1538854200000),
                    y: [6593.13, 6596.01, 6590, 6593.34]
                },
                {
                    x: new Date(1538856000000),
                    y: [6593.34, 6604.76, 6582.63, 6593.86]
                },
                {
                    x: new Date(1538857800000),
                    y: [6593.86, 6604.28, 6586.57, 6600.01]
                },
                {
                    x: new Date(1538859600000),
                    y: [6601.81, 6603.21, 6592.78, 6596.25]
                },
                {
                    x: new Date(1538861400000),
                    y: [6596.25, 6604.2, 6590, 6602.99]
                },
                {
                    x: new Date(1538863200000),
                    y: [6602.99, 6606, 6584.99, 6587.81]
                },
                {
                    x: new Date(1538865000000),
                    y: [6587.81, 6595, 6583.27, 6591.96]
                },
                {
                    x: new Date(1538866800000),
                    y: [6591.97, 6596.07, 6585, 6588.39]
                },
                {
                    x: new Date(1538868600000),
                    y: [6587.6, 6598.21, 6587.6, 6594.27]
                },
                {
                    x: new Date(1538870400000),
                    y: [6596.44, 6601, 6590, 6596.55]
                },
                {
                    x: new Date(1538872200000),
                    y: [6598.91, 6605, 6596.61, 6600.02]
                },
                {
                    x: new Date(1538874000000),
                    y: [6600.55, 6605, 6589.14, 6593.01]
                },
                {
                    x: new Date(1538875800000),
                    y: [6593.15, 6605, 6592, 6603.06]
                },
                {
                    x: new Date(1538877600000),
                    y: [6603.07, 6604.5, 6599.09, 6603.89]
                },
                {
                    x: new Date(1538879400000),
                    y: [6604.44, 6604.44, 6600, 6603.5]
                },
                {
                    x: new Date(1538881200000),
                    y: [6603.5, 6603.99, 6597.5, 6603.86]
                },
                {
                    x: new Date(1538883000000),
                    y: [6603.85, 6605, 6600, 6604.07]
                },
                {
                    x: new Date(1538884800000),
                    y: [6604.98, 6606, 6604.07, 6606]
                },
                ]
            }],
            chart: {
                type: 'candlestick',
                height: 350,
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                candlestick: {
                    colors: {
                        upward: '#2bbb93',
                        downward: '#ff4f7f'
                    }
                }
            },
            xaxis: {
                type: 'datetime'
            },
            yaxis: {
                tooltip: {
                    enabled: true
                }
            }
        };
        var candleChart = new ApexCharts(document.querySelector("#candleChart"), options);
        candleChart.render();
    }
    function boxPlotChart() {
        var options = {
            series: [
                {
                    type: 'boxPlot',
                    data: [
                        {
                            x: 'Jan 2015',
                            y: [54, 66, 69, 75, 88]
                        },
                        {
                            x: 'Jan 2016',
                            y: [43, 65, 69, 76, 81]
                        },
                        {
                            x: 'Jan 2017',
                            y: [31, 39, 45, 51, 59]
                        },
                        {
                            x: 'Jan 2018',
                            y: [39, 46, 55, 65, 71]
                        },
                        {
                            x: 'Jan 2019',
                            y: [29, 31, 35, 39, 44]
                        },
                        {
                            x: 'Jan 2020',
                            y: [41, 49, 58, 61, 67]
                        },
                        {
                            x: 'Jan 2021',
                            y: [54, 59, 66, 71, 88]
                        }
                    ]
                }
            ],
            chart: {
                type: 'boxPlot',
                height: 350,
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                boxPlot: {
                    colors: {
                        upper: '#2bbb93',
                        lower: '#5f6af5'
                    }
                }
            }
        };


        var boxPlotChart = new ApexCharts(document.querySelector("#boxPlotChart"), options);
        boxPlotChart.render();
    }
    function pieChart() {
        var options = {
            series: [96, 84, 72],
            chart: {
                height: 280,
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
            labels: ['Reached', 'Expence', 'Deals'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var pieChart = new ApexCharts(document.querySelector("#pieChart"), options);
        pieChart.render();
    }
    function radialChart() {
        var options = {
            series: [96, 84, 72],
            chart: {
                height: 300,
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
            labels: ['Reached', 'Expence', 'Deals'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var radialChart = new ApexCharts(document.querySelector("#radialChart"), options);
        radialChart.render();
    }
    function radialChart1() {
        var options = {
            series: [96, 84, 72],
            chart: {
                height: 300,
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
            labels: ['Reached', 'Expence', 'Deals'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var radialChart1 = new ApexCharts(document.querySelector("#radialChart1"), options);
        radialChart1.render();
    }
    function donutChart() {
        var options = {
            series: [6, 1],
            chart: {
                height: 280,
                type: 'donut',
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
            colors: ['#5f6af5', '#ff4f7f'],
            labels: ['Master Teacher - Remaining', 'Master Teacher - Observed'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var donutChart = new ApexCharts(document.querySelector("#donutChart"), options);
        donutChart.render();
    }
    function donutChart1() {
        var options = {
            series: [63, 5],
            chart: {
                height: 280,
                type: 'donut',
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
            colors: ['#5f6af5', '#ff4f7f'],
            labels: ['Teachers-Remaining', 'Teachers Observed'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var donutChart1 = new ApexCharts(document.querySelector("#donutChart1"), options);
        donutChart1.render();
    }

    function verticalBarChart1() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Score",
                data: [5, 0, 0, 0, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Science", "Mathematics", "Filipino", "Aral-Pan", "TLE/EPP","MAPEH/MSEP","VALED/ESP"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#50d1f8", "rgba(80, 209, 248, 0.5)"],
        };
        var verticalBarChart = new ApexCharts(document.querySelector("#verticalBarChart1"), options);
        verticalBarChart.render();
    }

    function verticalBarChart2() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Score",
                data: [0, 0, 0, 1, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Science", "Mathematics", "Filipino", "Aral-Pan", "TLE/EPP","MAPEH/MSEP","VALED/ESP"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#50d1f8", "rgba(80, 209, 248, 0.5)"],
        };
        var verticalBarChart = new ApexCharts(document.querySelector("#verticalBarChart2"), options);
        verticalBarChart.render();
    }
    
    function positionChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Total",
                data: [3, 1, 0, 3, 1, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["Teacher I", "Teacher II", "Teacher III", "MT-I", "MT-II", "MT-III","MT-IV"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#fbec82"],
        };
        var positionChart = new ApexCharts(document.querySelector("#positionChart"), options);
        positionChart.render();
    }
    function ageChart() {
        var options = {
            series: [0, 0, 0, 1, 0, 2, 2, 3],
            chart: {
                height: 280,
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
            colors: ['#fbec82', '#f4e569', '#ede14f','#ffda00','#edbc00','#daa500','#c88a00','#b56f00'],
            labels: ['Under 25', '25-30', '31-35','36-40','41-45','46-50','51-55','Over 55'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var ageChart = new ApexCharts(document.querySelector("#ageChart"), options);
        ageChart.render();
    }
    function genderChart() {
        var options = {
            series: [1, 5],
            chart: {
                height: 280,
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
            colors: ['#1ba1e2', '#e30c4b'],
            labels: ['Male','Female'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var genderChart = new ApexCharts(document.querySelector("#genderChart"), options);
        genderChart.render();
    }
    function statusChart() {
        var options = {
            series: [1, 0, 0, 0],
            chart: {
                height: 280,
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
            colors: ['#ff0097', '#a200ff','#1ba1e2','#f09609'],
            labels: ['Regular Permanent','Provisional','Substitute','Contractual'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var statusChart = new ApexCharts(document.querySelector("#statusChart"), options);
        statusChart.render();
    }
    function degreeChart() {
        var options = {
            series: [3, 8, 0],
            chart: {
                height: 300,
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
            labels: ['Bachelor', 'Master', 'Doctorate'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var degreeChart = new ApexCharts(document.querySelector("#degreeChart"), options);
        degreeChart.render();
    }
    function teachChart() {
        var options = {
            series: [5, 0, 8],
            chart: {
                height: 300,
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
            labels: ['0-3 years', '4-10 years', 'More than 10 years'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var teachChart = new ApexCharts(document.querySelector("#teachChart"), options);
        teachChart.render();
    }
    function aosChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Total",
                data: [0, 0, 0, 0, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Filipino", "Mathematics", "General Science", "Biology", "Chemistry","Physics","Others"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#fbec82"],
        };
        var aosChart = new ApexCharts(document.querySelector("#aosChart"), options);
        aosChart.render();
    }
    function subjectChart() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Total",
                data: [0, 0, 0, 0, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Filipino", "Mathematics", "General Science", "Araling Panlipunan", "MAPEH","Values Education","Others"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#fbec82"],
        };
        var subjectChart = new ApexCharts(document.querySelector("#subjectChart"), options);
        subjectChart.render();
    }
    function gradelvlChart() {
        var options = {
            series: [1, 5],
            chart: {
                height: 280,
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
            colors: ['#183357', '#f27244','#f2b872','#f2b872'],
            labels: ['Kindergarten','Elementary','Junior High School', 'Senior High School'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var gradelvlChart = new ApexCharts(document.querySelector("#gradelvlChart"), options);
        gradelvlChart.render();
    }
    function atotalChart1() {
        var options = {
            series: [1028, 87],
            chart: {
                height: 280,
                type: 'donut',
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
            colors: ['#5f6af5', '#ff4f7f'],
            labels: ['Teacher - Remaining', 'Teacher - Observed'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var atotalChart1 = new ApexCharts(document.querySelector("#atotalChart1"), options);
        atotalChart1.render();
    }
    function atotalChart2() {
        var options = {
            series: [82, 6],
            chart: {
                height: 280,
                type: 'donut',
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
            colors: ['#5f6af5', '#ff4f7f'],
            labels: ['Master Teacher - Remaining', 'Master Teacher - Observed'],
            legend: {
                show: true,
                showForSingleSeries: false,
                showForNullSeries: true,
                showForZeroSeries: true,
                position: 'bottom',
                horizontalAlign: 'center',
                floating: false,
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial',
                fontWeight: 400,
                formatter: undefined,
                inverseOrder: false,
                width: undefined,
                height: undefined,
                tooltipHoverFormatter: undefined,
                customLegendItems: [],
                offsetX: 0,
                offsetY: 0,
                markers: {
                    width: 15,
                    height: 10,
                    radius: 6
                },
                labels: {
                    colors: undefined,
                    useSeriesColors: false
                },
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }]
        };

        var atotalChart2 = new ApexCharts(document.querySelector("#atotalChart2"), options);
        atotalChart2.render();
    }

    function subjectareaBarChart1() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Score",
                data: [12, 0, 0, 0, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Science", "Mathematics", "Filipino", "Aral-Pan", "TLE/EPP","MAPEH/MSEP","VALED/ESP"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#50d1f8", "rgba(80, 209, 248, 0.5)"],
        };
        var subjectareaBarChart1 = new ApexCharts(document.querySelector("#subjectareaBarChart1"), options);
        subjectareaBarChart1.render();
    }
    function subjectareaBarChart2() {
        var options = {
            chart: {
                type: "bar",
                height: 300,
                stacked: !0,
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
                width: 0
            },
            dataLabels: {
                enabled: !1
            },
            series: [{
                name: "Score",
                data: [0, 0, 0, 2, 0, 0, 0, 0]
            }],
            plotOptions: {
                bar: {
                    horizontal: !0,
                    columnWidth: 10,
                    borderRadius: 0
                }
            },
            markers: {
                size: 4,
                hover: {
                    size: 6
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
            xaxis: {
                categories: ["English", "Science", "Mathematics", "Filipino", "Aral-Pan", "TLE/EPP","MAPEH/MSEP","VALED/ESP"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !0
                },
                labels: {
                    show: !0
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
            yaxis: {
                labels: {
                    show: !0
                }
            },
            colors: ["#dc3545"],
        };
        var subjectareaBarChart1 = new ApexCharts(document.querySelector("#subjectareaBarChart2"), options);
        subjectareaBarChart1.render();
    }

    jQuery(window).on('load', function () {
        mixChart();
        lineChart();
        doublelineChart();
        lineChartSimple();
        dottedlineChart();
        allmixChart();
        areaChart();
        areaChartSimple();
        simpleBarChart();
        verticalBarChart();
        verticalSimpleBarChart();
        candleChart();
        boxPlotChart();
        pieChart();
        ageChart();
        statusChart();
        genderChart();
        positionChart();
        degreeChart();
        teachChart();
        aosChart();
        subjectChart();
        gradelvlChart();
        radialChart();
        radialChart1();
        donutChart();
        donutChart1();
        verticalBarChart1();
        verticalBarChart2();
        atotalChart1();
        atotalChart2();
        subjectareaBarChart1();
        subjectareaBarChart2();
    });

})(jQuery);