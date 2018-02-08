<?php include "conn.php"; ?>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php" target="_blank">Sistemas Web</a>


                </div>
            </div>
            <!-- /navbar-inner -->
        </div><br />

            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="content">
                            <?php
           $id = intval($_GET['id']);
			$sql = mysqli_query($conn, "SELECT * FROM inventario WHERE ID_INVENTARIO='$id'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: administracion.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>

            <blockquote>
            Actualizar datos del cliente
            </blockquote>
                         <form name="form1" id="form1" class="form-horizontal row-fluid" action="update-edit.php" method="POST" >
										<div class="control-group">
											<label class="control-label" for="basicinput">ID</label>
											<div class="controls">
												<input type="text" name="id" id="id" value="<?php echo $row['ID_INVENTARIO']; ?>" placeholder="Tidak perlu di isi" class="form-control span8 tip" readonly="readonly">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">piso</label>
											<div class="controls">
												<input type="text" name="piso" id="piso" value="<?php echo $row['PISO']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">marca</label>
											<div class="controls">
												<input type="text" name="marca" id="marca" value="<?php echo $row['MARCA']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">serial</label>
											<div class="controls">
												<input name="serial" id="serial" value="<?php echo $row['SERIAL_PC']; ?>" class="form-control span8 tip" type="text"   />
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">nro_interno</label>
											<div class="controls">
												<input name="nro_interno" id="nro_interno" value="<?php echo $row['N_INTERNO_INVENTARIO']; ?>" class="form-control span8 tip" type="text"   />
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="basicinput">monitor</label>
											<div class="controls">
												<input name="monitor" id="monitor" value="<?php echo $row['MONITOR']; ?>" class=" form-control span8 tip" type="text"   />
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">mouse</label>
											<div class="controls">
												<input type="text" name="mouse" id="mouse" value="<?php echo $row['MOUSE']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">teclado</label>
											<div class="controls">
												<input type="text" name="teclado" id="teclado" value="<?php echo $row['TECLADO']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">adaptador</label>
											<div class="controls">
												<input type="text" name="adaptador" id="adaptador" value="<?php echo $row['ADAPTADOR']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">rj45</label>
											<div class="controls">
												<input type="text" name="rj45" id="rj45" value="<?php echo $row['RJ45']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">nombre</label>
											<div class="controls">
												<input type="text" name="nombre" id="nombre" value="<?php echo $row['NOMBRE']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">Teléfono</label>
											<div class="controls">
												<input type="text" name="telefono" id="telefono" value="<?php echo $row['TELEFONO']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">ip</label>
											<div class="controls">
												<input type="text" name="ip" id="ip" value="<?php echo $row['IP']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">mac</label>
											<div class="controls">
												<input type="text" name="mac" id="mac" value="<?php echo $row['MAC']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">antivirus</label>
											<div class="controls">
												<input type="text" name="antivirus" id="antivirus" value="<?php echo $row['ANTIVIRUS']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">impresora</label>
											<div class="controls">
												<input type="text" name="impresora" id="impresora" value="<?php echo $row['IMPRESORA']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>
                    <div class="control-group">
											<label class="control-label" for="basicinput">tinta</label>
											<div class="controls">
												<input type="text" name="tinta" id="tinta" value="<?php echo $row['TINTA']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="basicinput">tipo de tinta</label>
											<div class="controls">
												<input type="text" name="tipodetinta" id="tipodetinta" value="<?php echo $row['TIPODETINTA']; ?>" placeholder="" class="form-control span8 tip" >
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" name="update" id="update" value="Actualizar" class="btn btn-sm btn-primary"/>
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
              <center> <b class="copyright"><a href="index.php"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>




    </body>
