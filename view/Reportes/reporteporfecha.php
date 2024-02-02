<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>

    <?php require_once("../MainHead/head.php");?>
	<title>GUARANDA::Reportes</title>
	
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>
    
    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Reportes</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Por Rango de Fechas</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="form-label semibold" >Fecha Inicio</label>
						<div class='input-group date'>
							<input id="fechainicio" type="text" value="<?php echo date("m-d-Y"); ?>" class="form-control">
							<span class="input-group-addon">
								<i class="font-icon font-icon-calend"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="form-label semibold" >Fecha Inicio</label>
						<div class='input-group date'>
							<input id="fechafin" type="text" value="<?php echo date("m-d-Y"); ?>" class="form-control">
							<span class="input-group-addon">
								<i class="font-icon font-icon-calend"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<button type="button" id="btnfiltar" class="btn btn-inline btn-primary" onclick="ReportListarticket()"><i class="fa fa-print" aria-hidden="true"></i>
					Listar</button>
				</div>
				</div>
				<table id="Reports_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
					<thead>
						<tr>
							<th style="width: 1%;">Nº </th>
							<th >Solicitante</th>
							<th >Categoria</th>
							<th >Prioridad</th>
							<th >Titulo</th>
							<th >Descripcion</th>
							<th >Estado</th>
							<th >Fecha creacion</th>
							<th >User Asignado</th>
							<th >Fecha Asignado</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
				
			</div>
		</div>
	</div>
	
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="reportes.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>