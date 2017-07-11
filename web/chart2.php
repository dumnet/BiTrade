<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">MarketPlace</h2>
    </div>
  </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>

  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme",
      title:{
        text: "Spot of 1 Btc"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "Y-M-D, H:m:s",
        interval:2,
        gridThickness: 2,
        intervalType: "h",

      },
      axisY:{
        includeZero: false

      },
      data: [
      {
        type: "line",
        //lineThickness: 3,
        dataPoints: [
          <?php
                      include_once 'Db.php';


                      $query= "SELECT * FROM flux ORDER BY id DESC LIMIT 200";
                      $result = $conn->query($query);
                      foreach ($result as $key => $value) {
                        $id = $value['id'];
                        $spot = $value['spot'];
                        $jump_spot = $value['jump_spot'];
                        $date = $value['date_time'];

                        if ($jump_spot < -10) {
                          // $info = 'indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"';

                        }elseif ($jump_spot > 10) {
                          // $info = 'indexLabel: "highest",markerColor: "green", markerType: "triangle"';
                        }
                        $dater = date("y, m-1, d, H, i, s", strtotime($date))
                        ?>
                        { x: new Date( Date.UTC(<?php echo $dater; ?>)), y: <?php echo $spot; ?>, <?php echo $info; ?> },
          <?
              }

          ?>
        // { x: new Date(2012, 00, 1), y: 2450 },
        // { x: new Date(2012, 01, 1), y: 2414},
        // { x: new Date(2012, 02, 1), y: 2520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        // { x: new Date(2012, 03, 1), y: 2460 },
        // { x: new Date(2012, 04, 1), y: 2450 },
        // { x: new Date(2012, 05, 1), y: 2500 },
        // { x: new Date(2012, 06, 1), y: 2480 },
        // { x: new Date(2012, 07, 1), y: 2480 },
        // { x: new Date(2012, 08, 1), y: 2410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        // { x: new Date(2012, 09, 1), y: 2500 },
        // { x: new Date(2012, 10, 1), y: 2480 },
        // { x: new Date(2012, 11, 1), y: 2510 }

        ]
      }


      ]
    });

chart.render();
}
</script>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
<?php //echo $dater; ?>
