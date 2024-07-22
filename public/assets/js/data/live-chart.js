/* ====== Chart ====== */

(function ($) {
    "use strict";

    var trigoStrength = 3
    var iteration = 11

    function getRandom() {
        var i = iteration;
        return (Math.sin(i / trigoStrength) * (i / trigoStrength) + i / trigoStrength + 1) * (trigoStrength * 2)
    }

    function getRangeRandom(yrange) {
        return Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
    }

    function generateMinuteWiseTimeSeries(baseval, count, yrange) {
        var i = 0;
        var series = [];
        while (i < count) {
            var x = baseval;
            var y = ((Math.sin(i / trigoStrength) * (i / trigoStrength) + i / trigoStrength + 1) * (trigoStrength * 2))

            series.push([x, y]);
            baseval += 300000;
            i++;
        }
        return series;
    }



    function getNewData(baseval, yrange) {
        var newTime = baseval + 300000;
        return {
            x: newTime,
            y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
        }
    }

    var optionsColumn = {
        chart: {
            height: 300,
            type: 'bar',
            stacked: !0,
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 5,
                left: 5,
                blur: 3,
                color: '#000',
                opacity: 0.1
            },
            events: {
                animationEnd: function (chartCtx, opts) {
                    const newData = chartCtx.w.config.series[0].data.slice()
                    newData.shift()
                    window.setTimeout(function () {
                        chartCtx.updateOptions({
                            series: [{
                                data: newData
                            }],
                            xaxis: {
                                min: chartCtx.minX,
                                max: chartCtx.maxX
                            },
                            subtitle: {
                                text: parseInt(getRangeRandom({ min: 1, max: 20 })).toString() + '%',
                            }
                        }, false, false)
                    }, 300)
                }
            },
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 0,
        },
        series: [{
          name: 'User',
          data: generateMinuteWiseTimeSeries(new Date("12/12/2016 00:20:00").getTime(), 12, {
            min: 10,
            max: 110
          })
        }],
        subtitle: {
          text: '20%',
          floating: !0,
          align: 'right',
          offsetY: -50,
        },
        colors: ["#5f6af5"],
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: 15,
                borderRadius: 0
            }
        },
        xaxis: {
          type: 'datetime',
          range: 2700000
        },
        yaxis: {
          decimalsInFloat: 0,
          opposite: true,
          labels: {
            offsetX: -10
          }
        },
        legend: {
          show: true
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
      }
    var chartColumn = new ApexCharts(document.querySelector("#columnchart"), optionsColumn);
    chartColumn.render()

    window.setInterval(function () {

        iteration++;

        chartColumn.updateSeries([{
            data: [...chartColumn.w.config.series[0].data,
            [
                chartColumn.w.globals.maxX + 300000,
                getRandom()
            ]
            ]
        }])


    }, 3000);

})(jQuery);