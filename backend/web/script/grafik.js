    $(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Progress Pembangunan di Desa Gandu'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'prosentase'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
            name: 'Pembangunan',
            colorByPoint: true,
            data: [
                {foreach $dataPembangunan as $item}
            {
                name: '{$item->nama_pembangunan}',
                y: {$item->prosentase},
                drilldown: '{$item->nama_pembangunan}'
            },
                {/foreach}
            ]
        }],
       
    });
});