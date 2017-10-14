<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Censo Alimenticio | Encuesta</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/scroll/nanoscroller.css">
<link href="plugins/morris/morris.css" rel="stylesheet" />
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
          <h1>Encuesta</h1>
        </div>
      </div>


      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

        <div class="row">
          <div class="col-md-12">


            <?php

 if(isset($_POST["boton"])==true)
  {
    //Variables llenas con datos del formulario
    $edad = $_POST["edad"];
    $peso = $_POST["peso"];
    $estatura = $_POST["estatura"];
    $comidas = $_POST["comidas"];
    $snack = $_POST["snack"];
    $alimento = $_POST["alimento"];
    $sueno = $_POST["sueno"];
    $h_sueno = $_POST["h_sueno"];
    $deporte = $_POST["deporte"];
    if($deporte == 1){
    $d_practica = $_POST["d_practica"];
    $d_hora = $_POST["d_hora"];}

    if($edad < 17 or $edad > 25){
      ?>
        <!--Aca estoy cerrando PHP y es puro HTML-->
        <div class="alert alert-danger"><b>¡Error!</b> Edad "<?php echo $edad ?>" está fuera del rango establecido</div>
        <script>
            document.getElementById("edad").focus();
        </script>
        <!--Aca estoy abriendo PHP-->
        <?php 
    }elseif($peso < 100 or $peso > 200){
      ?>
        <!--Aca estoy cerrando PHP y es puro HTML-->
        <div class="alert alert-danger"><b>¡Error!</b> Peso "<?php echo $peso ?>" está fuera del rango establecido</div>
        <script>
            document.getElementById("edad").focus();
        </script>
        <!--Aca estoy abriendo PHP-->
        <?php 
    }else{
    //Sentencia SQL que se ejecuta, se agregan los campos del formulario a los campos de la tabla de la base de datos
    $stmt = $conn->prepare("INSERT INTO encuesta (edad, peso, estatura, comidas, snack, alimento, sueno, h_sueno, deporte, d_practica) VALUES 

    (:edad, :peso, :estatura, :comidas, :snack, :alimento, :sueno, :h_sueno, :deporte, :d_practica)");
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':estatura', $estatura);
    $stmt->bindParam(':comidas', $comidas);
    $stmt->bindParam(':snack', $snack);
    $stmt->bindParam(':alimento', $alimento);
    $stmt->bindParam(':sueno', $sueno);
    $stmt->bindParam(':h_sueno', $h_sueno);
    $stmt->bindParam(':deporte', $deporte);
    $stmt->bindParam(':d_practica', $d_practica);

    $stmt->execute();
    ?>
    <script language="javascript">
    alert("Gracias por Responder la Encuesta!");
    location.href='index.php';
    </script>
    <?php
}}//FIN  IF SUBMIT
?>


            <div class="block-web">

              <!--Inicio del Formulario-->
              <form method="post" name="encuesta_form">
              <p>1. ¿Cúal es su edad?
              <input type="number" name="edad" required value="<?php if (isset($_POST["boton"])){ echo $_POST['edad']; } ?>"></p><br>

              <p>2. ¿Cúal es su peso corporal en libras?
              <input type="number" name="peso" step="any" required value="<?php if (isset($_POST["boton"])){ echo $_POST['libras']; } ?>"></p><br>

              <p>3. ¿Cúal es su estatura en metros?
              <input type="number" name="estatura" step="any" required value="<?php if (isset($_POST["estatura"])){ echo $_POST['nombre']; } ?>"></p><br>

              <p>4. ¿Con cuántas de las comidas reglamentarias cumple diariamente?
              <input list="comidas" name="comidas" required value="<?php if (isset($_POST["boton"])){ echo $_POST['comidas']; } ?>">
              <datalist id="comidas">
                <option value="0">
                <option value="1">
                <option value="2">
                <option value="3">
              </datalist></p><br>

              <p>5. ¿Cuántas entre comidas / snacks come al día?
              <input list="snack" name="snack" required value="<?php if (isset($_POST["boton"])){ echo $_POST['snack']; } ?>">
              <datalist id="snack">
                <option value="0">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
              </datalist></p><br>

              <p>6. Seleccione el tipo de alimentos que más consume:
              <input list="alimento" name="alimento" required value="<?php if (isset($_POST["boton"])){ echo $_POST['alimento']; } ?>">
              <datalist id="alimento">
                <option value="Frutas">
                <option value="Verduras">
                <option value="Mantequilla / Aceite">
                <option value="Carne / Huevos">
                <option value="Lácteos">
                <option value="Comidas Rápidas">
                <option value="Panes / Cereales">
              </datalist></p><br>

              <p>7. ¿Cuántas horas duerme?
              <input type="time" name="sueno" required value="<?php if (isset($_POST["boton"])){ echo $_POST['sueno']; } ?>"></p><br>

              <p>8. ¿A qué hora se duerme?
              <input type="time" name="h_sueno" required value="<?php if (isset($_POST["boton"])){ echo $_POST['h_sueno']; } ?>"></p><br>

              <p>9. ¿Practica algún deporte?<br>
              <input type="radio" name="deporte" value="1" onclick="d_practica.disabled = false;d_hora.disabled = false" > Sí <br>
              <input type="radio" name="deporte" value="0" onclick="d_practica.disabled = true;d_hora.disabled = true" > No <br></p><br>

              <p>9.1. ¿Cuál deporte practica?
              <input type="text" name="d_practica" disabled="disabled"></p><br>

              <button class="btn btn-success" type="submit" name="boton" value="Entrar">Guardar Encuesta</button>
              <button type="reset" value="Borrar Información" class="btn btn-warning">Vaciar Campos</button>
              <a href="index.php" class="btn btn-danger" role="button">Cancelar</a>

              </form>
              <!--Fin del Formulario-->

              <!--/porlets-content-->
            </div>
            <!--/block-web-->
          </div>
          <!--/col-md-12-->
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
