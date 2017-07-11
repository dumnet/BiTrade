
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
