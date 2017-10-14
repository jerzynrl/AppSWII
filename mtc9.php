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


            <!--Aca empieza la Media-->
            <center><h4>Media</h4>
            <img src="images/media.jpg" width="25%" /><br>

            Dónde: <br> ∑ =  
            <?php
            $sentencia = $conn->query("select sum(deporte) from encuesta;");
            $row_count1 = $sentencia->fetchColumn();
            echo round("$row_count1",2);?><br>
            n = <?php echo "$row_counti";?><br>
            <?php 
            $mediana = $row_count1/$row_counti;
            ?>
            <strong>X ̅  = <?php echo round("$mediana",2);?></strong>
            </center>
            </div>

            <div class="block-web">


              <!--Aca empieza la Mediana-->
            <center><h4>Mediana</h4>
            <img src="images/mediana.jpg" width="25%" /><br>
            <?php
            try{
            $sentencia = $conn->query("SELECT deporte FROM encuesta ORDER BY deporte ASC;");
            $row_count = $sentencia->rowCount();
            $n=0;
            ?>

                <table  class="table table-bordered table-hover">
                <tr>
                   <th width="5%">N°</th>
                   <th width="10%">Si(1)/No(0) ¿Practica Deporte?<br></th>
                </tr>
            <?php
           while($row=$sentencia->fetch(PDO::FETCH_ASSOC))
            {
            $n=$n+1;
           ?>

            <tr>
                   <td><?=$n;?></td>
                   <td><?=$row["deporte"];?></td>
            </tr>
                <?php
            }
            ?>
              
            </table>
            <?php
        }

        catch(PDOException$e)
        {
            echo "Error:".$e->getMessage();
        }
            if ($row_counti%2==0){
                $segundo = ($row_counti/2);
                $primero = ($segundo-1);

                //Obtener primeros datos
                $sentencia = $conn->query("SELECT deporte from encuesta ORDER BY deporte ASC limit $primero,$primero;");
                $primeros = $sentencia->fetchColumn();
                $sentencia = $conn->query("SELECT deporte from encuesta ORDER BY deporte ASC limit $segundo,$segundo;");
                $segundos = $sentencia->fetchColumn();

                
                echo "Los números centrales de la posición $primero es: <b>$primeros</b> y $segundo es: <b>$segundos</b>";

                ?>
                <center><h4>Media</h4>
                Dónde: <br> Datos centrales =  
                <?php echo $primeros; ?> y <?php echo $segundos; ?> ; TOTAL= <?php echo $total = ($primeros+$segundos); ?><br>
                X' = <?php echo $total;?> / 2<br>
                <strong>X' = <?php echo ($total/2);?></strong>
                </center>
                <?php

            }else{
                $mediano = (($row_counti/2)+0.5);

                //Obtener primeros datos
                $sentencia = $conn->query("SELECT deporte from encuesta ORDER BY deporte DESC limit $mediano,$mediano;");
                $medianos = $sentencia->fetchColumn();
                
                echo "El número central de la posición $mediano es: <b>$medianos</b>";

                ?><br>
                <strong>X' = <?php echo $medianos;?></strong>
                </center>
                <?php
            }
          ?>
        </div>
        <!--/row-->
        
          <div class="block-web">

            <!--Aca empieza la Moda-->
            <center><h4>Moda</h4>

            Dónde: <br> 
            <?php
            $sentencia = $conn->query("SELECT deporte, COUNT(deporte) AS Veces FROM encuesta GROUP BY deporte ORDER BY COUNT(deporte) DESC limit 1");
            $moda1 = $sentencia->fetchColumn();
            $sentencia = $conn->query("SELECT deporte FROM encuesta where deporte = '$moda1'");
            $rmoda1 = $sentencia->rowCount();

            $sentencia = $conn->query("SELECT deporte, COUNT(deporte) AS Veces FROM encuesta GROUP BY deporte ORDER BY COUNT(deporte) DESC limit 1,2");
            $moda2 = $sentencia->fetchColumn();
            $sentencia = $conn->query("SELECT deporte FROM encuesta where deporte = '$moda2'");
            $rmoda2 = $sentencia->rowCount();

            $sentencia = $conn->query("SELECT deporte, COUNT(deporte) AS Veces FROM encuesta GROUP BY deporte ORDER BY COUNT(deporte) DESC limit 2,1");
            $moda3 = $sentencia->fetchColumn();
            $sentencia = $conn->query("SELECT deporte FROM encuesta where deporte = '$moda3'");
            $rmoda3 = $sentencia->rowCount();

            if($rmoda3 == $rmoda2 and $rmoda3 == $rmoda1){
              ?><strong>MULTIMODAL = <?php echo $moda1;?> horas, el cual se repite <?php echo $rmoda1; ?> veces.</strong><br>
            <strong>MULTIMODAL = <?php echo $moda2;?> horas, el cual se repite <?php echo $rmoda2; ?> veces.</strong><br>
            <strong>MULTIMODAL = <?php echo $moda3;?> horas, el cual se repite <?php echo $rmoda3; ?> veces.</strong><?php
            }
            elseif($rmoda2 == $rmoda1){
              ?><strong>BIMODAL = <?php echo $moda1;?> horas, el cual se repite <?php echo $rmoda1; ?> veces.</strong><br>
            <strong>BIMODAL = <?php echo $moda2;?> horas, el cual se repite <?php echo $rmoda2; ?> veces.</strong><br><?php
            }
            else{
              ?><strong>MODA = <?php echo $moda1;?> horas, el cual se repite <?php echo $rmoda1; ?> veces.</strong><?php
            }
            ?>
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


