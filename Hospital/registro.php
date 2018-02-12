<?php include "conn.php";
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
    <body>
       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="Index.php" target="_blank">Sistemas Web</a>


                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
			if(isset($_POST['input'])){
				$piso	= mysqli_real_escape_string($conn,(strip_tags($_POST['piso'], ENT_QUOTES)));
				$marca  	= mysqli_real_escape_string($conn,(strip_tags($_POST['marca'], ENT_QUOTES)));
				$serial 		= mysqli_real_escape_string($conn,(strip_tags($_POST['serial'], ENT_QUOTES)));
				$nro_interno  = mysqli_real_escape_string($conn,(strip_tags($_POST['nro_interno'], ENT_QUOTES)));
        $monitor	= mysqli_real_escape_string($conn,(strip_tags($_POST['monitor'], ENT_QUOTES)));
        $mouse	= mysqli_real_escape_string($conn,(strip_tags($_POST['mouse'], ENT_QUOTES)));
        $teclado	= mysqli_real_escape_string($conn,(strip_tags($_POST['teclado'], ENT_QUOTES)));
        $adaptador	= mysqli_real_escape_string($conn,(strip_tags($_POST['adaptador'], ENT_QUOTES)));
        $rj45	= mysqli_real_escape_string($conn,(strip_tags($_POST['rj45'], ENT_QUOTES)));
        $nombre	= mysqli_real_escape_string($conn,(strip_tags($_POST['nombre'], ENT_QUOTES)));
        $telefono	= mysqli_real_escape_string($conn,(strip_tags($_POST['telefono'], ENT_QUOTES)));
        $ip	= mysqli_real_escape_string($conn,(strip_tags($_POST['ip'], ENT_QUOTES)));
        $mac	= mysqli_real_escape_string($conn,(strip_tags($_POST['mac'], ENT_QUOTES)));
        $antivirus	= mysqli_real_escape_string($conn,(strip_tags($_POST['antivirus'], ENT_QUOTES)));
        $impresora	= mysqli_real_escape_string($conn,(strip_tags($_POST['impresora'], ENT_QUOTES)));
        $tinta	= mysqli_real_escape_string($conn,(strip_tags($_POST['tinta'], ENT_QUOTES)));
        $tipodetinta	= mysqli_real_escape_string($conn,(strip_tags($_POST['tipodetinta'], ENT_QUOTES)));


				$insert = mysqli_query($conn, "INSERT INTO inventario(ID_INVENTARIO, PISO, MARCA, SERIAL_PC, N_INTERNO_INVENTARIO,MONITOR,MOUSE,TECLADO,ADAPTADOR,RJ45,NOMBRE,TELEFONO,IP,MAC,ANTIVIRUS,IMPRESORA,TINTA,TIPODETINTA)
															VALUES(NULL,'$piso', '$marca', '$serial', '$nro_interno','$monitor','$mouse','$teclado','$adaptador','$rj45','$nombre','$telefono','$ip','$mac','$antivirus','$impresora','$tinta','$tipodetinta')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';
						}

			}
			?>

            <blockquote>
            Agregar cliente
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="registro.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="piso">piso</label>
											<div class="controls">
												<input type="text" name="piso" id="piso" placeholder="Piso" class="form-control span8 tip" required >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="marca">Marca</label>
											<div class="controls">
												<input type="text" name="marca" id="marca" placeholder="Marca" class="form-control span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="serial">Serial</label>
											<div class="controls">
												<input name="serial" id="serial" class="form-control span8 tip" type="text" placeholder="Serial"   />
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="nro_interno">Nro Interno</label>
											<div class="controls">
												<input name="nro_interno" id="nro_interno" class=" form-control span8 tip" type="text" placeholder="nro interno"  />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="monitor">Monitor</label>
											<div class="controls">
												<input name="monitor" id="monitor" class=" form-control span8 tip" type="text" placeholder="monitor"  />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="mouse">Mouse</label>
											<div class="controls">
												<input name="mouse" id="mouse" class=" form-control span8 tip" type="text" placeholder="mouse"  />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="teclado">Teclado</label>
											<div class="controls">
												<input name="teclado" id="teclado" class=" form-control span8 tip" type="text" placeholder="Teclado"  />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="adaptador">Adaptador</label>
											<div class="controls">
												<input name="adaptador" id="adaptador" class=" form-control span8 tip" type="text" placeholder="adaptador"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="rj45">Rj45</label>
											<div class="controls">
												<input name="rj45" id="rj45" class=" form-control span8 tip" type="text" placeholder="rj45"  />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="nombre">Nombre</label>
											<div class="controls">
												<input name="nombre" id="nombre" class=" form-control span8 tip" type="text" placeholder="nombre"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="telefono">Telefono</label>
											<div class="controls">
												<input name="telefono" id="telefono" class=" form-control span8 tip" type="number" placeholder="Telefono"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="ip">Ip</label>
											<div class="controls">
												<input name="ip" id="ip" class=" form-control span8 tip" type="text" placeholder="ip"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="mac">Mac</label>
											<div class="controls">
												<input name="mac" id="mac" class=" form-control span8 tip" type="text" placeholder="mac"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="antivirus">Antivirus</label>
											<div class="controls">
												<input name="antivirus" id="antivirus" class=" form-control span8 tip" type="text" placeholder="antivirus"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="impresora">Impresora</label>
											<div class="controls">
												<input name="impresora" id="impresora" class=" form-control span8 tip" type="text" placeholder="impresora"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="tinta">Tinta</label>
											<div class="controls">
												<input name="tinta" id="tinta" class=" form-control span8 tip" type="text" placeholder="tinta"  />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="tipodetinta">Tipo de Tinta</label>
											<div class="controls">
												<input name="tipodetinta" id="tipodetinta" class=" form-control span8 tip" type="text" placeholder="tipo de tinta"  />
											</div>
										</div>



										<div class="control-group">
											<div class="controls">
												<button type="submit" name="input" id="input" class="btn btn-sm btn-primary">Registrar</button>
                                               <a href="administracion.php" class="btn btn-sm btn-danger">Cancelar</a>
											</div>
										</div>
									</form>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->

        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="Index.php"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
