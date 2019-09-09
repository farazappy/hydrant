/*
Template Name: Admin Press Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
$(function () {
    "use strict";
    // ============================================================== 
    // Usage overview
    // ============================================================== 
    var chart = new Chartist.Bar('.amp-pxl', {
          labels: ['2012', '2013', '2014', '2015', '2016', '2017'],
          series: [
            [9000, 5000, 3000, 7000, 5000, 10000],
            [6000, 3000, 9000, 5000, 4000, 6000]
          ]
        }, {
          axisX: {
            // On the x-axis start means top and end means bottom
            position: 'end',
            showGrid: false
          },
          axisY: {
            // On the y-axis start means left and end means right
            position: 'start'
            , labelInterpolationFnc: function (value) {
                return (value / 1000) + 'k';
            }
          },
        high:'12000',
        low: '0',
    });

    // ============================================================== 
    // Usage overview
    // ============================================================== 
    Morris.Area({
        element: 'earning',
        data: [{
                period: '10:00',
                Usage: 50,
                Wastage: 80,
            }, {
                period: '11:00',
                Usage: 130,
                Wastage: 100,
            }, {
                period: '12:00',
                Usage: 80,
                Wastage: 60,
            }, {
                period: '13:00',
                Usage: 70,
                Wastage: 200,
            }, {
                period: '14:00',
                Usage: 180,
                Wastage: 150,
            }, {
                period: '15:00',
                Usage: 105,
                Wastage: 100,
            },
            {
                period: '16:00',
                Usage: 250,
                Wastage: 150,
            }
        ],
        xkey: 'period',
        ykeys: ['Usage', 'Wastage'],
        labels: ['Usage', 'Wastage'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors: ['#1976d2', '#26c6da', '#1976d2'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#1976d2', '#26c6da', '#1976d2'],
        resize: true,
        parseTime: false
    });

    

    // ============================================================== 
    // Download count
    // ============================================================== 
    var sparklineLogin = function () {
        $('.spark-count').sparkline([4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3, 10, 9, 12, 10, 9, 12, 4, 9], {
            type: 'bar'
            , width: '100%'
            , height: '70'
            , barWidth: '2'
            , resize: true
            , barSpacing: '6'
            , barColor: 'rgba(255, 255, 255, 0.3)'
        });
    }
    var sparkResize;
    
    sparklineLogin(); 
});        
     // ============================================================== 
    // icons
    // ==============================================================  
   var icons = new Skycons({"color": "#1976d2"}),
          list  = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;
    for(i = list.length; i--; ) {
        var weatherType = list[i],
            elements = document.getElementsByClassName( weatherType );
        for (e = elements.length; e--;){
            icons.set( elements[e], weatherType );
        }
    } 
     icons.play();
  
    