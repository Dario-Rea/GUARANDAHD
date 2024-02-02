<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>GUARANDA::Perfilt</title>
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
							<h3>Perfil</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Cambiar Contraseña</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				

                        <div class="row">
                        <div class="col-lg-4 offset-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Contraseña Actual</label>
                                <input type="text" class="form-control" id="txtactual" name="txtactual" placeholder="Contraseña Actual">	
								</select>
							</fieldset>
						</div>
                        </div>
                        <div class="row">
						<div class="col-lg-4 offset-lg-4">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="txtnuevo" name="txtnuevo" placeholder="Contraseña">	
								</select>
							</fieldset>
						</div>
                        </div>
                        <div class="row">
                        <div class="col-lg-4 offset-lg-4 ">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="txtconfirmar" name="txtconfirmar" placeholder="confirmar Contraseña">	
								</select>
							</fieldset>
						</div>
                        </div>
                        <div class="row">
						<div class="col-lg-4 offset-lg-5 ">
							<button type="button"  id="btnactualizar" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Actualizar</button>
						</div>
                        </div>

				</div>
			</div>
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>
	
	<script type="text/javascript" src="mntperfil.js"></script>
	<script type="text/javascript" src="../../public/js/md5.js"></script>
	<script type="text/javascript" src="../../public/js/md5.min.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>