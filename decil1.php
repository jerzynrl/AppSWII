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
          <h1>decil de Pregunta 1</h1> ¿Cúal es su edad?
        </div>
      </div>


      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

        <div class="row">
          <div class="col-md-12">

            <!--CUARTILES-->
            <div class="block-web">
              <center><h4>Deciles</h4></center>

            <center>
              <img src="images/decil.jpg" width="25%" />
            </center>

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

            <!--DECIL-->
            <div class="block-web">

              <?php $d1 = (1*$row_count)/10 ?>
              <?php $d2 = (2*$row_count)/10 ?>
              <?php $d3 = (3*$row_count)/10 ?>
              <?php $d4 = (4*$row_count)/10 ?>
              <?php $d5 = (5*$row_count)/10 ?>
              <?php $d6 = (6*$row_count)/10 ?>
              <?php $d7 = (7*$row_count)/10 ?>
              <?php $d8 = (8*$row_count)/10 ?>
              <?php $d9 = (9*$row_count)/10 ?>
              <?php $diferencia = 1; ?>

              <?php

              #Calculo del Decil 1

              if ($row_count1 >= $d1) {
                $frec_de1 = $row_count1;
                $limite_decil1 = 17;
                $frec_ante_decil1 = 0;
              }
              elseif ($res2 >= $d1) {
                $frec_de1 = $row_count2;
                $limite_decil1 = 18;
                $frec_ante_decil1 = $row_count1;
              }
              elseif ($res3 >= $d1) {
                $frec_de1 = $row_count3;
                $limite_decil1 = 19;
                $frec_ante_decil1 = $res2;
              }
              elseif ($res4 >= $d1) {
                $frec_de1 = $row_count4;
                $limite_decil1 = 20;
                $frec_ante_decil1 = $res3;
              }
              elseif ($res5 >= $d1) {
                $frec_de1 = $row_count5;
                $limite_decil1 = 21;
                $frec_ante_decil1 = $res4;
              }
              elseif ($res6 >= $d1) {
                $frec_de1 = $row_count6;
                $limite_decil1 = 22;
                $frec_ante_decil1 = $res5;
              }
              elseif ($res7 >= $d1) {
                $frec_de1 = $row_count7;
                $limite_decil1 = 23;
                $frec_ante_decil1 = $res6;
              }
              elseif ($res8 >= $d1) {
                $frec_de1 = $row_count8;
                $limite_decil1 = 24;
                $frec_ante_decil1 = $res7;
              }
              elseif ($res9 >= $d1) {
                $frec_de1 = $row_count9;
                $limite_decil1 = 25;
                $frec_ante_decil1 = $res8;
              }

              #Calculo del Decil 2
              
              if ($row_count1 >= $d2) {
                $frec_de2 = $row_count1;
                $limite_decil2 = 17;
                $frec_ante_decil2 = 0;
              }
              elseif ($res2 >= $d2) {
                $frec_de2 = $row_count2;
                $limite_decil2 = 18;
                $frec_ante_decil2 = $row_count1;
              }
              elseif ($res3 >= $d2) {
                $frec_de2 = $row_count3;
                $limite_decil2 = 19;
                $frec_ante_decil2 = $res2;
              }
              elseif ($res4 >= $d2) {
                $frec_de2 = $row_count4;
                $limite_decil2 = 20;
                $frec_ante_decil2 = $res3;
              }
              elseif ($res5 >= $d2) {
                $frec_de2 = $row_count5;
                $limite_decil2 = 21;
                $frec_ante_decil2 = $res4;
              }
              elseif ($res6 >= $d2) {
                $frec_de2 = $row_count6;
                $limite_decil2 = 22;
                $frec_ante_decil2 = $res5;
              }
              elseif ($res7 >= $d2) {
                $frec_de2 = $row_count7;
                $limite_decil2 = 23;
                $frec_ante_decil2 = $res6;
              }
              elseif ($res8 >= $d2) {
                $frec_de2 = $row_count8;
                $limite_decil2 = 24;
                $frec_ante_decil2 = $res7;
              }
              elseif ($res9 >= $d2) {
                $frec_de2 = $row_count9;
                $limite_decil2 = 25;
                $frec_ante_decil2 = $res8;
              }

              #Calculo del Decil 3
              
              if ($row_count1 >= $d3) {
                $frec_de3 = $row_count1;
                $limite_decil3 = 17;
                $frec_ante_decil3 = 0;
              }
              elseif ($res2 >= $d3) {
                $frec_de3 = $row_count2;
                $limite_decil3 = 18;
                $frec_ante_decil3 = $row_count1;
              }
              elseif ($res3 >= $d3) {
                $frec_de3 = $row_count3;
                $limite_decil3 = 19;
                $frec_ante_decil3 = $res2;
              }
              elseif ($res4 >= $d3) {
                $frec_de3 = $row_count4;
                $limite_decil3 = 20;
                $frec_ante_decil3 = $res3;
              }
              elseif ($res5 >= $d3) {
                $frec_de3 = $row_count5;
                $limite_decil3 = 21;
                $frec_ante_decil3 = $res4;
              }
              elseif ($res6 >= $d3) {
                $frec_de3 = $row_count6;
                $limite_decil3 = 22;
                $frec_ante_decil3 = $res5;
              }
              elseif ($res7 >= $d3) {
                $frec_de3 = $row_count7;
                $limite_decil3 = 23;
                $frec_ante_decil3 = $res6;
              }
              elseif ($res8 >= $d3) {
                $frec_de3 = $row_count8;
                $limite_decil3 = 24;
                $frec_ante_decil3 = $res7;
              }
              elseif ($res9 >= $d3) {
                $frec_de3 = $row_count9;
                $limite_decil3 = 25;
                $frec_ante_decil3 = $res8;
              }

              #Calculo del Decil 4
              
              if ($row_count1 >= $d4) {
                $frec_de4 = $row_count1;
                $limite_decil4 = 17;
                $frec_ante_decil4 = 0;
              }
              elseif ($res2 >= $d4) {
                $frec_de4 = $row_count2;
                $limite_decil4 = 18;
                $frec_ante_decil4 = $row_count1;
              }
              elseif ($res3 >= $d4) {
                $frec_de4 = $row_count3;
                $limite_decil4 = 19;
                $frec_ante_decil4 = $res2;
              }
              elseif ($res4 >= $d4) {
                $frec_de4 = $row_count4;
                $limite_decil4 = 20;
                $frec_ante_decil4 = $res3;
              }
              elseif ($res5 >= $d4) {
                $frec_de4 = $row_count5;
                $limite_decil4 = 21;
                $frec_ante_decil4 = $res4;
              }
              elseif ($res6 >= $d4) {
                $frec_de4 = $row_count6;
                $limite_decil4 = 22;
                $frec_ante_decil4 = $res5;
              }
              elseif ($res7 >= $d4) {
                $frec_de4 = $row_count7;
                $limite_decil4 = 23;
                $frec_ante_decil4 = $res6;
              }
              elseif ($res8 >= $d4) {
                $frec_de4 = $row_count8;
                $limite_decil4 = 24;
                $frec_ante_decil4 = $res7;
              }
              elseif ($res9 >= $d4) {
                $frec_de4 = $row_count9;
                $limite_decil4 = 25;
                $frec_ante_decil4 = $res8;
              }

              #Calculo del Decil 5
              
              if ($row_count1 >= $d5) {
                $frec_de5 = $row_count1;
                $limite_decil5 = 17;
                $frec_ante_decil5 = 0;
              }
              elseif ($res2 >= $d5) {
                $frec_de5 = $row_count2;
                $limite_decil5 = 18;
                $frec_ante_decil5 = $row_count1;
              }
              elseif ($res3 >= $d5) {
                $frec_de5 = $row_count3;
                $limite_decil5 = 19;
                $frec_ante_decil5 = $res2;
              }
              elseif ($res4 >= $d5) {
                $frec_de5 = $row_count4;
                $limite_decil5 = 20;
                $frec_ante_decil5 = $res3;
              }
              elseif ($res5 >= $d5) {
                $frec_de5 = $row_count5;
                $limite_decil5 = 21;
                $frec_ante_decil5 = $res4;
              }
              elseif ($res6 >= $d5) {
                $frec_de5 = $row_count6;
                $limite_decil5 = 22;
                $frec_ante_decil5 = $res5;
              }
              elseif ($res7 >= $d5) {
                $frec_de5 = $row_count7;
                $limite_decil5 = 23;
                $frec_ante_decil5 = $res6;
              }
              elseif ($res8 >= $d5) {
                $frec_de5 = $row_count8;
                $limite_decil5 = 24;
                $frec_ante_decil5 = $res7;
              }
              elseif ($res9 >= $d5) {
                $frec_de5 = $row_count9;
                $limite_decil5 = 25;
                $frec_ante_decil5 = $res8;
              }

              #Calculo del Decil 6
              
              if ($row_count1 >= $d6) {
                $frec_de6 = $row_count1;
                $limite_decil6 = 17;
                $frec_ante_decil6 = 0;
              }
              elseif ($res2 >= $d6) {
                $frec_de6 = $row_count2;
                $limite_decil6 = 18;
                $frec_ante_decil6 = $row_count1;
              }
              elseif ($res3 >= $d6) {
                $frec_de6 = $row_count3;
                $limite_decil6 = 19;
                $frec_ante_decil6 = $res2;
              }
              elseif ($res4 >= $d6) {
                $frec_de6 = $row_count4;
                $limite_decil6 = 20;
                $frec_ante_decil6 = $res3;
              }
              elseif ($res5 >= $d6) {
                $frec_de6 = $row_count5;
                $limite_decil6 = 21;
                $frec_ante_decil6 = $res4;
              }
              elseif ($res6 >= $d6) {
                $frec_de6 = $row_count6;
                $limite_decil6 = 22;
                $frec_ante_decil6 = $res5;
              }
              elseif ($res7 >= $d6) {
                $frec_de6 = $row_count7;
                $limite_decil6 = 23;
                $frec_ante_decil6 = $res6;
              }
              elseif ($res8 >= $d6) {
                $frec_de6 = $row_count8;
                $limite_decil6 = 24;
                $frec_ante_decil6 = $res7;
              }
              elseif ($res9 >= $d6) {
                $frec_de6 = $row_count9;
                $limite_decil6 = 25;
                $frec_ante_decil6 = $res8;
              }

              #Calculo del Decil 7
              
              if ($row_count1 >= $d7) {
                $frec_de7 = $row_count1;
                $limite_decil7 = 17;
                $frec_ante_decil7 = 0;
              }
              elseif ($res2 >= $d7) {
                $frec_de7 = $row_count2;
                $limite_decil7 = 18;
                $frec_ante_decil7 = $row_count1;
              }
              elseif ($res3 >= $d7) {
                $frec_de7 = $row_count3;
                $limite_decil7 = 19;
                $frec_ante_decil7 = $res2;
              }
              elseif ($res4 >= $d7) {
                $frec_de7 = $row_count4;
                $limite_decil7 = 20;
                $frec_ante_decil7 = $res3;
              }
              elseif ($res5 >= $d7) {
                $frec_de7 = $row_count5;
                $limite_decil7 = 21;
                $frec_ante_decil7 = $res4;
              }
              elseif ($res6 >= $d7) {
                $frec_de7 = $row_count6;
                $limite_decil7 = 22;
                $frec_ante_decil7 = $res5;
              }
              elseif ($res7 >= $d7) {
                $frec_de7 = $row_count7;
                $limite_decil7 = 23;
                $frec_ante_decil7 = $res6;
              }
              elseif ($res8 >= $d7) {
                $frec_de7 = $row_count8;
                $limite_decil7 = 24;
                $frec_ante_decil7 = $res7;
              }
              elseif ($res9 >= $d7) {
                $frec_de7 = $row_count9;
                $limite_decil7 = 25;
                $frec_ante_decil7 = $res8;
              }

              #Calculo del Decil 8
              
              if ($row_count1 >= $d8) {
                $frec_de8 = $row_count1;
                $limite_decil8 = 17;
                $frec_ante_decil8 = 0;
              }
              elseif ($res2 >= $d8) {
                $frec_de8 = $row_count2;
                $limite_decil8 = 18;
                $frec_ante_decil8 = $row_count1;
              }
              elseif ($res3 >= $d8) {
                $frec_de8 = $row_count3;
                $limite_decil8 = 19;
                $frec_ante_decil8 = $res2;
              }
              elseif ($res4 >= $d8) {
                $frec_de8 = $row_count4;
                $limite_decil8 = 20;
                $frec_ante_decil8 = $res3;
              }
              elseif ($res5 >= $d8) {
                $frec_de8 = $row_count5;
                $limite_decil8 = 21;
                $frec_ante_decil8 = $res4;
              }
              elseif ($res6 >= $d8) {
                $frec_de8 = $row_count6;
                $limite_decil8 = 22;
                $frec_ante_decil8 = $res5;
              }
              elseif ($res7 >= $d8) {
                $frec_de8 = $row_count7;
                $limite_decil8 = 23;
                $frec_ante_decil8 = $res6;
              }
              elseif ($res8 >= $d8) {
                $frec_de8 = $row_count8;
                $limite_decil8 = 24;
                $frec_ante_decil8 = $res7;
              }
              elseif ($res9 >= $d8) {
                $frec_de8 = $row_count9;
                $limite_decil8 = 25;
                $frec_ante_decil8 = $res8;
              }

              #Calculo del Decil 9
              
              if ($row_count1 >= $d9) {
                $frec_de9 = $row_count1;
                $limite_decil9 = 17;
                $frec_ante_decil9 = 0;
              }
              elseif ($res2 >= $d9) {
                $frec_de9 = $row_count2;
                $limite_decil9 = 18;
                $frec_ante_decil9 = $row_count1;
              }
              elseif ($res3 >= $d9) {
                $frec_de9 = $row_count3;
                $limite_decil9 = 19;
                $frec_ante_decil9 = $res2;
              }
              elseif ($res4 >= $d9) {
                $frec_de9 = $row_count4;
                $limite_decil9 = 20;
                $frec_ante_decil9 = $res3;
              }
              elseif ($res5 >= $d9) {
                $frec_de9 = $row_count5;
                $limite_decil9 = 21;
                $frec_ante_decil9 = $res4;
              }
              elseif ($res6 >= $d9) {
                $frec_de9 = $row_count6;
                $limite_decil9 = 22;
                $frec_ante_decil9 = $res5;
              }
              elseif ($res7 >= $d9) {
                $frec_de9 = $row_count7;
                $limite_decil9 = 23;
                $frec_ante_decil9 = $res6;
              }
              elseif ($res8 >= $d9) {
                $frec_de9 = $row_count8;
                $limite_decil9 = 24;
                $frec_ante_decil9 = $res7;
              }
              elseif ($res9 >= $d9) {
                $frec_de9 = $row_count9;
                $limite_decil9 = 25;
                $frec_ante_decil9 = $res8;
              }
              ?>

              <center>
              <table class="table table-bordered table-hover">
                <tr>
                  <th colspan="2">Cálculo de Deciles</th>
                </tr>
                <tr>
                  <td>Decil 1 : (1) x <?php echo "$row_count"; ?> / 10 = <?php echo $d1; ?></td>
                  <td>D1 = <?php echo $limite_decil1; ?> + ((<?php echo $d1; ?> - <?php echo $frec_ante_decil1; ?>) / <?php echo $frec_de1; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil1+(($d1-$frec_ante_decil1)/$frec_de1) ?></td>
                </tr>
                <tr>
                  <td>Decil 2 : (2) x <?php echo "$row_count"; ?> / 10 = <?php echo $d2; ?><br></td>
                  <td>D2 = <?php echo $limite_decil2; ?> + ((<?php echo $d2; ?> - <?php echo $frec_ante_decil2; ?>) / <?php echo $frec_de2; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil2+(($d2-$frec_ante_decil2)/$frec_de2) ?></td>
                </tr>
                <tr>
                  <td>Decil 3 : (3) x <?php echo "$row_count"; ?> / 10 = <?php echo $d3; ?><br></td>
                  <td>D3 = <?php echo $limite_decil3; ?> + ((<?php echo $d3; ?> - <?php echo $frec_ante_decil3; ?>) / <?php echo $frec_de3; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil3+(($d3-$frec_ante_decil3)/$frec_de3) ?></td>
                </tr>
                <tr>
                  <td>Decil 4 : (4) x <?php echo "$row_count"; ?> / 10 = <?php echo $d4; ?><br></td>
                  <td>D4 = <?php echo $limite_decil4; ?> + ((<?php echo $d4; ?> - <?php echo $frec_ante_decil4; ?>) / <?php echo $frec_de4; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil4+(($d4-$frec_ante_decil4)/$frec_de4) ?></td>
                </tr>
                <tr>
                  <td>Decil 5 : (5) x <?php echo "$row_count"; ?> / 10 = <?php echo $d5; ?><br></td>
                  <td>D5 = <?php echo $limite_decil5; ?> + ((<?php echo $d5; ?> - <?php echo $frec_ante_decil5; ?>) / <?php echo $frec_de5; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil5+(($d5-$frec_ante_decil5)/$frec_de5) ?></td>
                </tr>
                <tr>
                  <td>Decil 6 : (6) x <?php echo "$row_count"; ?> / 10 = <?php echo $d6; ?><br></td>
                  <td>D6 = <?php echo $limite_decil6; ?> + ((<?php echo $d6; ?> - <?php echo $frec_ante_decil6; ?>) / <?php echo $frec_de6; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil6+(($d6-$frec_ante_decil6)/$frec_de6) ?></td>
                </tr>
                <tr>
                  <td>Decil 7 : (7) x <?php echo "$row_count"; ?> / 10 = <?php echo $d7; ?><br></td>
                  <td>D7 = <?php echo $limite_decil7; ?> + ((<?php echo $d7; ?> - <?php echo $frec_ante_decil7; ?>) / <?php echo $frec_de7; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil7+(($d7-$frec_ante_decil7)/$frec_de7) ?></td>
                </tr>
                <tr>
                  <td>Decil 8 : (8) x <?php echo "$row_count"; ?> / 10 = <?php echo $d8; ?><br></td>
                  <td>D8 = <?php echo $limite_decil8; ?> + ((<?php echo $d8; ?> - <?php echo $frec_ante_decil8; ?>) / <?php echo $frec_de8; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil8+(($d8-$frec_ante_decil8)/$frec_de8) ?></td>
                </tr>
                <tr>
                  <td>Decil 9 : (9) x <?php echo "$row_count"; ?> / 10 = <?php echo $d9; ?><br></td>
                  <td>D9 = <?php echo $limite_decil9; ?> + ((<?php echo $d9; ?> - <?php echo $frec_ante_decil9; ?>) / <?php echo $frec_de9; ?>) x <?php echo $diferencia; ?>)  = <?php echo $limite_decil9+(($d9-$frec_ante_decil9)/$frec_de9) ?></td>
                </tr>
              </table>
              </center>

              <!--Gráfica para decil-->
              <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'D1','D2','D3','D4','D5','D6','D7','D8','D9'],
                  [' ',<?php echo $limite_decil1+(($d1-$frec_ante_decil1)/$frec_de1) ?>,
                      <?php echo $limite_decil2+(($d2-$frec_ante_decil2)/$frec_de2) ?>,
                      <?php echo $limite_decil3+(($d3-$frec_ante_decil3)/$frec_de3) ?>,
                      <?php echo $limite_decil4+(($d4-$frec_ante_decil4)/$frec_de4) ?>,
                      <?php echo $limite_decil5+(($d5-$frec_ante_decil5)/$frec_de5) ?>,
                      <?php echo $limite_decil6+(($d6-$frec_ante_decil6)/$frec_de6) ?>,
                      <?php echo $limite_decil7+(($d7-$frec_ante_decil7)/$frec_de7) ?>,
                      <?php echo $limite_decil8+(($d8-$frec_ante_decil8)/$frec_de8) ?>,
                      <?php echo $limite_decil9+(($d9-$frec_ante_decil9)/$frec_de9) ?>]
                ]);

                var options = {
                  title: 'Gráfica De Deciles',
                  hAxis: {title: 'Deciles',  titleTextStyle: {color: '#333'}},
                  vAxis: {minValue: 0}
                };

                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(data, options);
              }
            </script>
            <div id="chart_div" style="width: 100%; height: 500px;"></div>

            </div>

            <a href="cdp1.php" class="btn btn-primary btn-lg" role="button"><- Regresar</a>

            </div>
        <!--/row-->
      
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


