<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Censo Alimenticio | Pregunta 5</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
<link href="plugins/morris/morris.css" rel="stylesheet" />

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<?php
//Llamamos al archivo conexion para tener acceso a la base de datos
include("clase/conectar.php");
?>
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">Censo</span>Alimenticio</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
            <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
			<ul class="drop_down_task dropdown-menu" style="margin-top:39px">
				<div class="top_left_pointer"></div>
				<li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
		  </ul>
			</li>
          </ul>
        </div>
      </div>
      
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
          </div>
        </div>
       
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="left_nav_slidebar">
        <?php  include("menu.php");?>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->

      <!--Barra de Indicacion-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>cuartil de pregunta 5</h1> ¿CUÁNTAS ENTRE COMIDAS / SNACKS COME AL DÍA?
        </div>
      </div>


      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

        <div class="row">
          <div class="col-md-12">

            <!--CUARTILES-->
            <div class="block-web">
              <center><h4>Cuartil</h4></center>


            <?php
                $sentencia = $conn->query("select * from encuesta;");
                $row_counti = $sentencia->rowCount();
            ?>

              <p>N° de entre comidas / snacks diarios de <b><?php echo "$row_counti";?></b> alumnos de Estadística Computacional, ciclo II - 2017.</p>

              <table class="table table-striped">

              <tr>
              <th colspan="7"><center><h6>TABLA DE FRECUENCIAS CON INTERVALOS DE N° DE ENTRE COMIDAS / SNACKS DIARIOS</h6></center></th>
              </tr>

              <tr>
              <th>Intervalo en <br> N° de Entre Comidas / Snacks</th>
              <td>0</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <th>Total</th>
              </tr>

              <tr>
              <th>fi</th>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where snack=0;");
                $row_count1 = $sentencia->rowCount();
                echo "$row_count1";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where snack=1;");
                $row_count2 = $sentencia->rowCount();
                echo "$row_count2";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where snack=2;");
                $row_count3 = $sentencia->rowCount();
                echo "$row_count3";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where snack=3;");
                $row_count4 = $sentencia->rowCount();
                echo "$row_count4";
                ?>
              </td>
              <td>
                <?php
               $sentencia = $conn->query("select * from encuesta where snack=4;");
                $row_count5 = $sentencia->rowCount();
                echo "$row_count5";
                ?>
              </td>
              <th>
                <?php
                $sentencia = $conn->query("select * from encuesta;");
                $row_count = $sentencia->rowCount();
                echo "$row_count";
                ?>
              </th>
              </tr>

              <tr>
              <th>Fi</th>
              <td>
                <?php
                echo "$row_count1";
                ?>
              </td>
              <td>
                <?php
                $res2 = $row_count1 + $row_count2;
                echo "$res2";
                ?>
              </td>
              <td>
                <?php
                $res3 = $row_count1 + $row_count2 + $row_count3;
                echo "$res3";
                ?>
              </td>
              <td>
                <?php
                $res4 = $row_count1 + $row_count2 + $row_count3 + $row_count4;
                echo "$res4";
                ?>
              </td>
              <td>
                <?php
                $res5 = $row_count1 + $row_count2 + $row_count3 + $row_count4 + $row_count5;
                echo "$res5";
                ?>
              </td>
              <th>
              </th>
              </tr>

              </table>


            <?php
                $sentencia = $conn->query("select * from encuesta;");
                $row_counti = $sentencia->rowCount();
            ?>

              <?php
              $cuartil1 = (1*$row_count)/4;
              $cuartil2 = (2*$row_count)/4;
              $cuartil3 = (3*$row_count)/4;
              $amplitud = 1;?>

              Cuartil 1 : (1 x <?php echo "$row_count"; ?>) / 4 = <?php echo $cuartil1; ?><br>
              Cuartil 2 : (2 x <?php echo "$row_count"; ?>) / 4 = <?php echo $cuartil2; ?><br>
              Cuartil 3 : (3 x <?php echo "$row_count"; ?>) / 4 = <?php echo $cuartil3; ?><br>

              <br>
          
              <?php
              if ($cuartil1 >= $row_count1) {
                $q1 = $row_count1;
                $l1 = 0;
                $F1 = 0;
                $f1 = $row_count1;
              }
              elseif ($cuartil1 >= $res2) {
                $q1 = $res2;
                $l1 = 1;
                $F1 = $row_count1;
                $f1 = $row_count2;
              }
              elseif ($cuartil1 >= $res3) {
                $q1 = $res3;
                $l1 = 2;
                $F1 = $res2;
                $f1 = $row_count3;
              }
              elseif ($cuartil1 >= $res4) {
                $q1 = $res4;
                $l1 = 3;
                $F1 = $res3;
                $f1 = $row_count4;
              }
              elseif ($cuartil1 >= $res5) {
                $q1 = $res5;
                $l1 = 3;
                $F1 = $res4;
                $f1 = $row_count5;
              }
              ?>

              <?php
              if ($cuartil2 >= $res5) {
                $q2 = $res5;
                $l2 = 4;
                $F2 = $res4;
                $f2 = $row_count5;
              }
              elseif ($cuartil2 >= $res4) {
                $q2 = $res4;
                $l2 = 3;
                $F2 = $res3;
                $f2 = $row_count4;
              }
              elseif ($cuartil2 >= $res3) {
                $q2 = $res3;
                $l2 = 2;
                $F2 = $res2;
                $f2 = $row_count3;
              }
              elseif ($cuartil2 >= $res2) {
                $q2 = $res2;
                $l2 = 1;
                $F2 = $row_count1;
                $f2 = $row_count2;
              }
              elseif ($cuartil2 >= $row_count1) {
                $q2 = $row_count1;
                $l2 = 0;
                $F2 = 0;
                $f2 = $row_count1;
              }
              ?>

              <?php
              if ($cuartil3 >= $res5) {
                $q3 = $res5;
                $l3 = 4;
                $F3 = $res4;
                $f3 = $row_count5;
              }
              elseif ($cuartil3 >= $res4) {
                $q3 = $res4;
                $l3 = 3;
                $F3 = $res3;
                $f3 = $row_count4;
              }
              elseif ($cuartil3 >= $res3) {
                $q3 = $res3;
                $l3 = 2;
                $F3 = $res2;
                $f3 = $row_count3;
              }
              elseif ($cuartil3 >= $res2) {
                $q3 = $res2;
                $l3 = 1;
                $F3 = $row_count1;
                $f3 = $row_count2;
              }
              elseif ($cuartil3 >= $row_count1) {
                $q3 = $row_count1;
                $l3 = 0;
                $f3 = $row_count1;
                $F3 = 0;
              }
              ?>

              El Q1 sería: <?php echo "$q1"; ?><br>
              El Q2 sería: <?php echo "$q2"; ?><br>
              El Q3 sería: <?php echo "$q3"; ?><br>
              <br>
              
              <center>
              <img src="images/cuartiles.jpg" width="25%" /><br><br>

              <b>Calculando Cuartil 1</b><br>
              Li = <?php echo $l1; ?><br>
              k•n / 4 = <?php echo $cuartil1; ?><br>
              Fi - 1 = <?php echo $F1; ?><br>
              fi = <?php echo $f1; ?><br>
              ai = <?php echo $amplitud; ?><br>
              <?php $totalq1 = ((($cuartil1 - $F1) / $f1) * $amplitud) + $l1; ?> 
              <b>Q1 : <?php echo round("$totalq1",2); ?></b><br><br>

              <b>Calculando Cuartil 2</b><br>
              Li = <?php echo $l2; ?><br>
              k•n / 4 = <?php echo $cuartil2; ?><br>
              Fi - 1 = <?php echo $F2; ?><br>
              fi = <?php echo $f2; ?><br>
              ai = <?php echo $amplitud; ?><br>
              <?php $totalq2 = ((($cuartil2 - $F2) / $f2) * $amplitud) + $l2; ?> 
              <b>Q2 : <?php echo round("$totalq2",2); ?></b><br><br>

              <b>Calculando Cuartil 3</b><br>
              Li = <?php echo $l3; ?><br>
              k•n / 4 = <?php echo $cuartil3; ?><br>
              Fi - 1 = <?php echo $F3; ?><br>
              fi = <?php echo $f3; ?><br>
              ai = <?php echo $amplitud; ?><br>
              <?php $totalq3 = ((($cuartil3 - $F3) / $f3) * $amplitud) + $l3; ?> 
              <b>Q3 : <?php echo round("$totalq3",2); ?></b><br><br>
              
              </center>

              <!--Gráfica para cuartil-->
              <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'Cuartil 1', 'Cuartil 2', 'Cuartil 3'],
                  [' ',  <?php echo "$totalq1"; ?>, <?php echo "$totalq2"; ?>, <?php echo "$totalq3"; ?>]
                ]);

                var options = {
                  title: 'Gráfica De Cuartil',
                  hAxis: {title: 'Cuartiles',  titleTextStyle: {color: '#333'}},
                  vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
            </script>
              <div id="chart_div" style="width: 100%; height: 500px;"></div>
              <a href="cdp5.php" class="btn btn-primary btn-lg" role="button"><- Regresar</a>

            </div>
      
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->


<!-- /sidebar chats -->   
<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-chart.js"></script>
<script src="js/graph.js"></script>
<script src="js/edit-graph.js"></script>
<script src="plugins/kalendar/kalendar.js" type="text/javascript"></script>
<script src="plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

<script src="plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="plugins/sparkline/jquery.customSelect.min.js" ></script> 
<script src="plugins/sparkline/sparkline-chart.js"></script> 
<script src="plugins/sparkline/easy-pie-chart.js"></script>
<script src="plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="plugins/morris/morris-script.js"></script> 





<script src="plugins/demo-slider/demo-slider.js"></script>
<script src="plugins/knob/jquery.knob.min.js"></script> 




<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/scroll/jquery.nanoscroller.js"></script>



</body>
</html>


</body>
</html>


