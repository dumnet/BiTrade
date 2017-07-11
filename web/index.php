<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/bootstrap.css.map" rel="stylesheet" type="text/css"> -->
    <!-- Ajax Script for Refresh Data -->
    <script src="script.js"></script>

  </head>
  <body>








    <div id="wrapper">

        <?php include 'navbar.html';  ?>

        <div id="page-wrapper">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>

            </div>
            <?php include 'chart2.php'; ?>
            <!-- /.row -->
          <div id="DashBoard"></div>
          <div class="row">
              <?php include 'order_list.php'; ?>
          </div>



          <div id="Flux"></div>


          <?php // include 'add.html'; ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->












    <!-- Jquery Core Js -->
    <script src="jquery.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
     <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


    <!-- Refresh  -->
    <script type="text/javascript">
      refresh_Order(document.getElementById('Order'))
    </script>


    <script type="text/javascript">
      refresh_Flux(document.getElementById('Flux'))
    </script>

    <script type="text/javascript">
      refresh_Account(document.getElementById('DashBoard'))
    </script>


    <!-- <div id="Chart"></div>
    <script type="text/javascript">
      refresh_dataFlux(document.getElementById('Chart'))
    </script> -->

  </body>
</html>
