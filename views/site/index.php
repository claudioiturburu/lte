<?php


use dosamigos\chartjs\ChartJs;
use yii\base\Widget;

/* @var $this yii\web\View */

$this->title = 'Tablero Principal';
?>
<div class="site-index">

    <div class="body-content">

        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <h2>$ 450.000<sup style="font-size: 10px"></sup></h2>

              <p>Puerto Madryn</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>70<sup style="font-size: 20px">%</sup></h3>
              <h2>$ 500.000<sup style="font-size: 10px"></sup></h2>

              <p>Viedma</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>22<sup style="font-size: 20px">%</sup></h3>
              <h2>$ 500.000<sup style="font-size: 10px"></sup></h2>

              <p>Choele Choel</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>40<sup style="font-size: 20px">%</sup></h3>
              <h2>$ 600.000<sup style="font-size: 10px"></sup></h2>

              <p>Bahía Blanca</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Detalle <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div> <!-- fin boxs -->
      
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Comparativo últimos 2 meses</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
		
		<?= ChartJs::widget([
    'type' => 'bar',
    'options' => [
        'height' => 200,
        'width' => 400
    ],
    'data' => [
        'labels' => ["Agosto","Septiembre"],
        'datasets' => [
            [
                'label' => "Puerto Madryn",
                'backgroundColor' => "#00C0EF",
                'borderColor' => "rgba(179,181,198,1)",
                'pointBackgroundColor' => "rgba(179,181,198,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(179,181,198,1)",
                'data' => [60,53]
            ],
            [
                'label' => "Viedma",
                'backgroundColor' => "#00A65A",
                'borderColor' => "rgba(255,99,132,1)",
                'pointBackgroundColor' => "rgba(255,99,132,1)",
                'pointBorderColor' => "#fff",
                'pointHoverBackgroundColor' => "#fff",
                'pointHoverBorderColor' => "rgba(255,99,132,1)",
                'data' => [105,70]
            ],
        		[
        				'label' => "Choele Choel",
        				'backgroundColor' => "#F39C12",
        				'borderColor' => "rgba(179,181,198,1)",
        				'pointBackgroundColor' => "rgba(179,181,198,1)",
        				'pointBorderColor' => "#fff",
        				'pointHoverBackgroundColor' => "#fff",
        				'pointHoverBorderColor' => "rgba(179,181,198,1)",
        				'data' => [60,22]
        		],
        		[
        				'label' => "Bahía Blanca",
        				'backgroundColor' => "#DD4B39",
        				'borderColor' => "rgba(255,99,132,1)",
        				'pointBackgroundColor' => "rgba(255,99,132,1)",
        				'pointBorderColor' => "#fff",
        				'pointHoverBackgroundColor' => "#fff",
        				'pointHoverBorderColor' => "rgba(255,99,132,1)",
        				'data' => [90,40]
        		]
        ]
    ]
]);
?>

</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
    </div>
</div>


