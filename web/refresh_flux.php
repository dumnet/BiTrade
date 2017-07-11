
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Flux DataBase
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Spot 1 Btc = €</th>
                            <th>Jump</th>
                            <th>My Btc to €</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                                  include_once 'Db.php';


                                  $query= "SELECT * FROM flux ORDER BY id DESC LIMIT 10";
                                  $result = $conn->query($query);
                                  foreach ($result as $key => $value) {
                                    $spot = $value['spot'];
                                    $My_Btc_to_Euro = $value['My_Btc_to_Euro'];
                                    $jump_spot = $value['jump_spot'];
                                    $date = $value['date_time'];

                                    if ($jump_spot < 0) {
                                      $color = "danger";
                                    }elseif ($jump_spot > 0) {
                                      $color = "success";
                                    }
                                    ?>
                                    <tr class="<?php echo $color; ?>">
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $spot; ?></td>
                                        <td><?php echo $jump_spot; ?></td>
                                        <td><?php echo $My_Btc_to_Euro; ?></td>
                                    </tr>
                      <?
                          }

                      ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
                <div class="well">
                    <h4>CoinBase Chart</h4>

                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="http://coinbase.com/">View Coinbase WebSite</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
