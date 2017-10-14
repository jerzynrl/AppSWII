<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Censo Alimenticio | Pregunta 1</title>
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
          <h1>cuartil de pregunta 1</h1> ¿Cúal es su edad?
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

            <p>Edades de <b><?php echo "$row_counti";?></b> alumnos de Estadística Computacional, Ciclo II - 2017.</p>

              <table class="table table-striped">

              <tr>
              <th colspan="11"><center><h6>TABLA DE FRECUENCIAS CON INTERVALOS DE UNIDAD DE AÑOS</h6></center></th>
              </tr>

              <tr>
              <th>Intervalo en años</th>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <th>Total</th>
              </tr>

              <tr>
              <th>fi</th>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='17';");
                $row_count1 = $sentencia->rowCount();
                echo "$row_count1";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='18';");
                $row_count2 = $sentencia->rowCount();
                echo "$row_count2";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='19';");
                $row_count3 = $sentencia->rowCount();
                echo "$row_count3";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='20';");
                $row_count4 = $sentencia->rowCount();
                echo "$row_count4";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='21';");
                $row_count5 = $sentencia->rowCount();
                echo "$row_count5";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='22';");
                $row_count6 = $sentencia->rowCount();
                echo "$row_count6";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='23';");
                $row_count7 = $sentencia->rowCount();
                echo "$row_count7";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='24';");
                $row_count8 = $sentencia->rowCount();
                echo "$row_count8";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where edad='25';");
                $row_count9 = $sentencia->rowCount();
                echo "$row_count9";
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
              <td>
                <?php
                $res6 = $row_count1 + $row_count2 + $row_count3 + $row_count4 + $row_count5 + $row_count6;
                echo "$res6";
                ?>
              </td>
              <td>
                <?php
                $res7 = $row_count1 + $row_count2 + $row_count3 + $row_count4 + $row_count5 + $row_count6 + $row_count7;
                echo "$res7";
                ?>
              </td>
              <td>
                <?php
                $res8 = $row_count1 + $row_count2 + $row_count3 + $row_count4 + $row_count5 + $row_count6 + $row_count7 + $row_count8;
                echo "$res8";
                ?>
              </td>
              <td>
                <?php
                $res9 = $row_count1 + $row_count2 + $row_count3 + $row_count4 + $row_count5 + $row_count6 + $row_count7 + $row_count8 + $row_count9;
                echo "$res9";
                ?>
              </td>
              <th>
              </th>
              </tr>
              </table>

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
              if($cuartil1 >= $res9) {
                $q1 = $res9;
                $l1 = 25;
                $F1 = $res8;
                $f1 = $row_count9;
              }
              elseif ($cuartil1 >= $res8) {
                $q1 = $res8;
                $l1 = 24;
                $F1 = $res7;
                $f1 = $row_count8;
              }
              elseif ($cuartil1 >= $res7) {
                $q1 = $res7;
                $l1 = 23;
                $F1 = $res6;
                $f1 = $row_count7;
              }
              elseif ($cuartil1 >= $res6) {
                $q1 = $res6;
                $l1 = 22;
                $F1 = $res5;
                $f1 = $row_count6;
              }
              elseif ($cuartil1 >= $res5) {
                $q1 = $res5;
                $l1 = 21;
                $F1 = $res4;
                $f1 = $row_count5;
              }
              elseif ($cuartil1 >= $res4) {
                $q1 = $res4;
                $l1 = 20;
                $F1 = $res3;
                $f1 = $row_count4;
              }
              elseif ($cuartil1 >= $res3) {
                $q1 = $res3;
                $l1 = 19;
                $F1 = $res2;
                $f1 = $row_count3;
              }
              elseif ($cuartil1 >= $res2) {
                $q1 = $res2;
                $l1 = 18;
                $F1 = $row_count1;
                $f1 = $row_count2;
              }
              elseif ($cuartil1 >= $row_count1) {
                $q1 = $row_count1;
                $l1 = 17;
                $f1 = $row_count1;
              }
              ?>

              <?php
              if($cuartil2 >= $res9) {
                $q2 = $res9;
                $l2 = 25;
                $F2 = $res8;
                $f2 = $row_count9;
              }
              elseif ($cuartil2 >= $res8) {
                $q2 = $res8;
                $l2 = 24;
                $F2 = $res7;
                $f2 = $row_count8;
              }
              elseif ($cuartil2 >= $res7) {
                $q2 = $res7;
                $l2 = 23;
                $F2 = $res6;
                $f2 = $row_count7;
              }
              elseif ($cuartil2 >= $res6) {
                $q2 = $res6;
                $l2 = 22;
                $F2 = $res5;
                $f2 = $row_count6;
              }
              elseif ($cuartil2 >= $res5) {
                $q2 = $res5;
                $l2 = 21;
                $F2 = $res4;
                $f2 = $row_count5;
              }
              elseif ($cuartil2 >= $res4) {
                $q2 = $res4;
                $l2 = 20;
                $F2 = $res3;
                $f2 = $row_count4;
              }
              elseif ($cuartil2 >= $res3) {
                $q2 = $res3;
                $l2 = 19;
                $F2 = $res2;
                $f2 = $row_count3;
              }
              elseif ($cuartil2 >= $res2) {
                $q2 = $res2;
                $l2 = 18;
                $F2 = $row_count1;
                $f2 = $row_count2;
              }
              elseif ($cuartil2 >= $row_count1) {
                $q2 = $row_count1;
                $l2 = 17;
                $f2 = $row_count1;
              }
              ?>

              <?php
              if($cuartil3 >= $res9) {
                $q3 = $res9;
                $l3 = 25;
                $F3 = $res8;
                $f3 = $row_count9;
              }
              elseif ($cuartil3 >= $res8) {
                $q3 = $res8;
                $l3 = 24;
                $F3 = $res7;
                $f3 = $row_count8;
              }
              elseif ($cuartil3 >= $res7) {
                $q3 = $res7;
                $l3 = 23;
                $F3 = $res6;
                $f3 = $row_count7;
              }
              elseif ($cuartil3 >= $res6) {
                $q3 = $res6;
                $l3 = 22;
                $F3 = $res5;
                $f3 = $row_count6;
              }
              elseif ($cuartil3 >= $res5) {
                $q3 = $res5;
                $l3 = 21;
                $F3 = $res4;
                $f3 = $row_count5;
              }
              elseif ($cuartil3 >= $res4) {
                $q3 = $res4;
                $l3 = 20;
                $F3 = $res3;
                $f3 = $row_count4;
              }
              elseif ($cuartil3 >= $res3) {
                $q3 = $res3;
                $l3 = 19;
                $F3 = $res2;
                $f3 = $row_count3;
              }
              elseif ($cuartil3 >= $res2) {
                $q3 = $res2;
                $l3 = 18;
                $F3 = $row_count1;
                $f3 = $row_count2;
              }
              elseif ($cuartil3 >= $row_count1) {
                $q3 = $row_count1;
                $l3 = 17;
                $f3 = $row_count1;
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
              <a href="cdp1.php" class="btn btn-primary btn-lg" role="button"><- Regresar</a>

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


