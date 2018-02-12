<?php
include("conn.php");
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
                          if(isset($_GET['action']) == 'delete'){
                          $id_delete = intval($_GET['id']);//VER EL TEMA DEL ($_GET['id']), de donde proviene
                          $query = mysqli_query($conn, "SELECT * FROM inventario WHERE ID_INVENTARIO='$id_delete'");
                          if(mysqli_num_rows($query) == 0){
                          echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
                          }else{
                            // echo("<script>if(confirm('Desea eliminar el registro?')){
                            // } else {
                            //   window.location='administracion.php';
                            // };</script>");
                          $delete = mysqli_query($conn, "DELETE FROM inventario WHERE ID_INVENTARIO='$id_delete'");
                          if($delete){
                          echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  Bien hecho, los datos han sido eliminados correctamente.</div>';
                        }else{
                          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
                          }
                          }
                          }
                          ?>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon-user"></i> INVENTARIO procesando datos del lado del servidor</h3>
                        <h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>                        </div>

                        <div class="panel-body">
                          <div class="pull-left">
                            <a href="exportar.php" class="btn btn-sm btn-primary">Exportar Ex</a>
            							</div><br>
							<div class="pull-right">
								<a href="registro.php" class="btn btn-sm btn-primary">Nuevo</a>
							</div><br>
							<hr>
                                    <table id="lookup" class="table-responsive table-bordered table-hover table-condensed nowrap" cellspacing="1" width="100%">
	                                   <thead bgcolor="#e6f7ff" align="center" >
                                        <tr>

                                        <th>ID</th>
	                                    <th>Piso</th>
                                        <th>Marca </th>
                                        <th>Serial</th>
                                        <th>Nro Interno Inventario </th>
	                                    <th>Monitor</th>
                                      <th>Mouse</th>
                                      <th>Teclado</th>
                                      <th>Adaptador</th>
                                      <th>RJ45</th>
                                      <th>Nombre</th>
                                      <th>Telefono</th>
                                      <th>IP</th>
                                      <th>MAC</th>
                                      <th>Antivirus</th>
                                      <th>Impresora</th>
                                      <th>Tinta</th>
                                      <th>Tipo de tinta</th>
	                                    <th class="text-center"> Acciones </th>

                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
                <div class="clear"> </div>
          				<h4><a href="logout.php"> Cerrar sesión</a></h4>
          			</div>
            </div>
            <!--/.container-->

        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href="index.php"> Sistemas Web</a> &copy; <?php echo date("Y")?> DataTables Bootstrap </b></center>
            </div>
        </div>
        <!-- <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script> -->

        <script>
        $(document).ready(function() {

				var dataTable = $('#lookup').DataTable( {

				 "language":	{
					"sProcessing":     "Procesando...",
					"sLengthMenu":     "Mostrar _MENU_ registros",
					"sZeroRecords":    "No se encontraron resultados",
					"sEmptyTable":     "Ningún dato disponible en esta tabla",
					"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					"sInfoPostFix":    "",
					"sSearch":         "Buscar:",
					"sUrl":            "",
					"sInfoThousands":  ",",
					"sLoadingRecords": "Cargando...",
					"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
					},
					"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
					}
				},
        "fixedHeader": true,
          "responsive": true,
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No se escuentran datos en el servidor</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
						}
					}
				});
        // $(document).on('click','delete',function(){
        //   var id = $(this).attr("id");
        //   if(confirm("¿Desea borrar el registro??")){
        //     $.ajax({
        //       url: "delete.php",
        //       method: "POST",
        //       data:{id:id},
        //       success:function(data){
        //           $('#alert_message').html('<div class="alert alert_primary alert-dismissable" type="button" class="close" data-dismiss="alert" aria-hidden="true">'+data+'</div>');
        //           $('#lookup').DataTable().Destroy();
        //       }
        //     });
        //     setInterval(function(){
        //       $('#alert_message').html('');
        //     }, 2000);
        //   }
        // });
			});

        </script>
    </body>
