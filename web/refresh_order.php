
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Order List
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


                                  $query= "SELECT * FROM flux ORDER BY id DESC LIMIT 100";
                                  $result = $conn->query($query);
                                  foreach ($result as $key => $value) {
                                    $spot = $value['spot'];
                                    $My_Btc_to_Euro = $value['My_Btc_to_Euro'];
                                    $jump_spot = $value['jump_spot'];
                                    $date = $value['date_time'];

                                    if ($jump_spot < 0) {
                                      $color = "danger";
                                    }elseif ($jump_spot) {
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
                    <h4>DataTables Usage Information</h4>
                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="http://coinbase.com/">View Coinbase WebSite</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
