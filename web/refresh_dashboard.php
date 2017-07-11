<?php
            include_once 'Db.php';

            $query= "SELECT * FROM account ORDER BY id=1";
            $result = $conn->query($query);
            foreach ($result as $key => $value) {
              $btc = $value['My_Btc'];
              $euro_start = $value['My_Btc_to_Euro'];
              }

            $query= "SELECT * FROM flux ORDER BY id DESC LIMIT 1";
            $result = $conn->query($query);
            foreach ($result as $key => $value) {
              $spot = $value['spot'];
              $My_Btc_to_Euro = $value['My_Btc_to_Euro'];
              $jump_spot = $value['jump_spot'];
              }
              if ($jump_spot < 0) {
                $color = "red";
                $icon = "level-down";
              }elseif ($jump_spot > 0) {
                $color = "green";
                $icon = "level-up";
              }
?>

<div class="row">
  <h3>Account</h3>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-bitcoin fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $btc; ?></div>
                        <div>BitCoin</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-euro fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $euro_start; ?> €</div>
                            <div>When Starting</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
      <h3>Market</h3>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $spot; ?> €</div>
                        <div>1 Btc</div>
                    </div>
                </div>
            </div>
            <a target="_blank" href="http://coinbase.com">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-<?php echo $color; ?>">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-<?php echo $icon; ?> fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jump_spot; ?> €</div>
                        <div>Jump</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-<?php echo $color; ?>">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-<?php echo $icon; ?> fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $My_Btc_to_Euro; ?> €</div>
                        <div>My_Btc * Spot Market (<?php echo $btc; ?>*<?php echo $spot; ?>)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
