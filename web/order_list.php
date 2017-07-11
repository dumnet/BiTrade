<div class="panel-body">
  <legend> <h3>Order</h3> </legend>

    <form method="post" action="order.php">
      <div class="col-lg-3">
          <label>Value</label>
        <div class="form-group input-group">
            <span class="input-group-addon">€</span>
            <input class="form-control" type="text" name="value" placeholder="Value (€)">
        </div>
        <!-- <button type="submit" class="btn btn-default">Order</button> -->
      </div>
      <div class="col-lg-3">
          <label>Spot</label>
        <div class="form-group input-group">
            <span class="input-group-addon">€</span>
            <input class="form-control" type="text" name="spot" placeholder="Spot Target">
        </div>
      </div>
      <div class="col-lg-3">
          <label>Type</label>
        <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="type" id="optionsRadiosInline1" value="0" checked>Sell
            </label>
            <label class="radio-inline">
                <input type="radio" name="type" id="optionsRadiosInline2" value="1">Buy
            </label>
        </div>
      </div>
        <div class="col-lg-3">
            <label></label>
          <div class="form-group input-group">
              <input type="hidden" name="NewOrder" value="true">
              <button type="submit" class="btn btn-outline btn-success">Order</button>
          </div>

        </div>
        <!-- <input type="submit" value="Order" /> -->
    </form>
  </div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Orders List
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Spot 1 Btc = €</th>
                            <th>Value €</th>
                            <th>Sell/Buy</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                                  include_once 'Db.php';


                                  $query= "SELECT * FROM ordres ORDER BY id";
                                  $result = $conn->query($query);
                                  foreach ($result as $key => $row) {
                                    $id = $row['id'];
                                    $spot = $row['spot'];
                                    $value = $row['value'];
                                    $type = $row['type'];
                                    $date = $row['date_time'];

                                    if ($type == 0) {
                                      $type = "Sell";
                                    }elseif ($type == 1) {
                                      $type = "Buy";
                                    }
                                    ?>
                                    <tr class="<?php echo $color; ?>">
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $spot; ?>€</td>
                                        <td><?php echo $value; ?>€</td>
                                        <td><?php echo $type; ?></td>
                                        <td>
                                          <form class="form" action="order.php" method="post">
                                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                                              <input type="hidden" name="delete" value="true">
                                              <button type="submit" class="btn btn-outline btn-danger">Delete</button>
                                          </form>
                                        </td>
                                    </tr>
                      <?
                          }

                      ?>
                    </tbody>
                </table
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
