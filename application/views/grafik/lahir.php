

       <!-- Begin Page Content -->
       <div class="container">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

        <h4 class="text-center">Grafik Data Statistik Penduduk Desa Detusoko Barat</h4>
          <div class="row">
            <div class="col-md-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Grafik Data Statistik Jumlah Kelahiran Penduduk Per-Tahun</h6>
                </div>
                <div class="card-body col-md-12">
         

<script src="<?= base_url('assets/chart');?>/code/highcharts.js"></script>
<script src="<?= base_url('assets/chart');?>/code/modules/data.js"></script>
<script src="<?= base_url('assets/chart');?>/code/modules/drilldown.js"></script>
<script src="<?= base_url('assets/chart');?>/code/modules/exporting.js"></script>
<script src="<?= base_url('assets/chart');?>/code/modules/export-data.js"></script>
<script src="<?= base_url('assets/chart');?>/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>



		<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Data Statistik'
    },
    subtitle: {
        text: 'Grafik'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Jumlah Data'
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
                format: '{point.y} Orang'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [

                <?php foreach($status as $sm): ?>

                {
                    name: "<?= $sm['tahun'] ?>",
                    y: <?= $sm['total'] ?>,
                    drilldown: "<?= $sm['tahun'] ?>"
                },

                <?php endforeach ?>
               
            ]
        }
    ],
});
		</script>

                </div>
            </div>
            </div>
          </div>
          </div>
          

</div>


