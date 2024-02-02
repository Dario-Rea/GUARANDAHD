<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>

    <?php require_once("../MainHead/head.php");?>
	<title>GUARANDA::Reportes categoria</title>
	
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
								<li class="active">Reportes por categorias</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
				<div class="row">
					<div class="col-lg-3">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria</label>
							<select id="cat_id" name="cat_id" class="form-control">
								
							</select>
						</fieldset>
					</div>
					<div class="col-lg-3">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_prioridad">Prioridad</label>
								<select id="tick_prioridad" name="tick_prioridad" class="form-control">
									<option value="Todo">Todos</option>
									<option value="Urgente">Urgente</option>
									<option value="Alta">Alta</option>
									<option value="Media">Media</option>
									<option value="Baja">Baja</option>
									
								</select>
							</fieldset>
						</div>
					<div class="col-lg-6">
					<button type="button" id="btnfiltar" class="btn btn-inline btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
					Filtrar</button>
					<button type="button" id="btnfiltartodo" class="btn btn-inline btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
					Listar todo</button>
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