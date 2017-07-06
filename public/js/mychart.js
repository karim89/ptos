var chart = new Chartist.Line('.ct-chart', {
  labels: ['290', '015', '112', '482', '045', '360', '193', '253', '415', '312', '040', '911'],
  // Naming the series with the series object array notation
  series: [{
    name: 'series-1',
    data: [80, 60, 50, 60, 70, 60, 70, 40, 50, 60, 70, 60]
  }, {
    name: 'series-2',
    data: [70, 80, 70, 50, 60, 70, 65, 60, 40, 70, 60, 70]
  }, {
    name: 'series-3',
    data: [, , , , , , , , , 70, 60, ]
  }]
}, {

  fullWidth: true,
  axisY: {
    type: Chartist.FixedScaleAxis,
    ticks: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
    low: 0,
    high: 100,
    labelInterpolationFnc: function(value) {
      return value + ' %'
    },   
  },

  // Within the series options you can use the series names
  // to specify configuration that will only be used for the
  // specific series.
  series: {
    'series-1': {
      lineSmooth: false,
    },
    'series-2': {
      lineSmooth: false,
    },
    'series-3': {
      lineSmooth: false,
    }
  },
  plugins: [
    Chartist.plugins.ctAxisTitle({
        axisX: {
            axisTitle: 'Lab Code',
            axisClass: 'ct-axis-x',
            offset: {
                x: 0,
                y: 35
            },
            textAnchor: 'middle'
        }
    })
  ]
  
}, [
  // You can even use responsive configuration overrides to
  // customize your series configuration even further!
  ['screen and (max-width: 320px)', {
    series: {
      'series-1': {
        lineSmooth: Chartist.Interpolation.none()
      },
      'series-2': {
        lineSmooth: Chartist.Interpolation.none(),
        showArea: false
      },
      'series-3': {
        lineSmooth: Chartist.Interpolation.none(),
        showPoint: true
      }
    }
  }],


]);