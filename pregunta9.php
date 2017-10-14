<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Censo Alimenticio | Pregunta 9</title>
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
          <h1>Pregunta 9</h1> ¿Practica algún deporte?
        </div>
      </div>


      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

        <div class="row">
          <div class="col-md-12">
            <div class="block-web">

            <?php
                $sentencia = $conn->query("select * from encuesta;");
                $row_counti = $sentencia->rowCount();
            ?>

            <p>Desición, Práctica de deporte de  <b><?php echo "$row_counti";?></b> alumnos de Estadística Computacional, ciclo II - 2017.</p>

              <table class="table table-striped">

              <tr>
              <th colspan="9"><center><h6>TABLA DE FRECUENCIAS CON INTERVALOS SÍ/NO</h6></center></th>
              </tr>

              <tr>
              <th>Intervalo en <br>Sí/No</th>
              <td>SÍ</td>
              <td>NO</td>
              <th>Total</th>
              </tr>

              <tr>
              <th>fi</th>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where deporte='1';");
                $row_count1 = $sentencia->rowCount();
                echo "$row_count1";
                ?>
              </td>
              <td>
                <?php
                $sentencia = $conn->query("select * from encuesta where deporte='0';");
                $row_count2 = $sentencia->rowCount();
                echo "$row_count2";
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
              <th>hi</th>
              <td>
                <?php
                $hi1 = $row_count1 / $row_count;
                echo round("$hi1",3);
                ?>
              </td>
              <td>
                <?php
                $hi2 = $row_count2 / $row_count;
                echo round("$hi2",3);
                ?>
              </td>
              <th>
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
              <th>
              </th>
              </tr>

              <tr>
              <th>Hi</th>
              <td>
                <?php
                echo round("$hi1",3);
                ?>
              </td>
              <td>
                <?php
                $resu2 = $hi1 + $hi2;
                echo round("$resu2",3);
                ?>
              </td>
              <th>
              </th>
              </tr>

               <tr>
              <th>Porcentaje (%)</th>
              <td>
                <?php
                $p1 = $hi1 * 100;
                echo round("$p1",2);
                ?>
              </td>
              <td>
                <?php
                $p2 = $hi2 * 100;
                echo round("$p2",2);
                ?>
              </td>
              <th>
              <?php
              $totalp = $p1 + $p2;
              echo round("$totalp",2);
              ?>
              </th>
              </tr>
              </table>

              <!--/porlets-content-->
            </div>
            <!--/block-web-->

                        <div class="block-web">

            <?php
                $sentencia = $conn->query("select * from encuesta;");
                $row_counti = $sentencia->rowCount();
            ?>

              <table class="table table-striped">

              <tr>
              <th colspan="3"><center><h6>DISTRIBUCIÓN DE CLASES Y FRECUENCIAS</h6></center></th>
              </tr>

              <tr>
              <th>Clases <br> (Sí/No)</th>
              <td>f <br> Alumnos</td>
              <td>fa <br> "o menos"</td>
              </tr>

              <tr>
              <th>Sí/th>
              <td><?php echo "$row_count1";?></td>
              <td><?php echo "$row_count1";?></td>
              </tr>

              <tr>
              <th>No</th>
              <td><?php echo "$row_count2";?></td>
              <td><?php echo "$res2";?></td>
              </tr>

              <tr>
              <th>Total</th>
              <td><b><?php echo "$row_count";?></b></td>
              <td></td>
              </tr>
              </table>

              <!--/porlets-content-->
            </div>

          </div>
          <!--/col-md-12-->
        </div>
        <!--/row-->
         <!--Código para enviar datos para llenar las variables de la gráfica-->
            <form action="grafica9.php" method="post">
              <input type="hidden" name="row_count1" value="<?php echo $row_count1;?>" id="row_count1" />
              <input type="hidden" name="row_count2" value="<?php echo $row_count2;?>" id="row_count2" />
              <button type="submit" class="btn btn-primary btn-lg">Ver Gráfica</button>
            </form>
            <!--/block-web-->
        
   
      
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   














<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
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
