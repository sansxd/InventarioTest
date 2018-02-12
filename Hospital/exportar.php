<?php
if (PHP_SAPI == 'cli')
	die('Este ejemplo sólo se puede ejecutar desde un navegador Web');

/** Incluye PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("Sergio Nuñez")
							 ->setLastModifiedBy("Sergio Nuñez")
							 ->setTitle("Office 2010 XLSX Documento de prueba")
							 ->setSubject("Office 2010 XLSX Documento de prueba")
							 ->setDescription("Documento de prueba para Office 2010 XLSX, generado usando clases de PHP.")
							 ->setKeywords("office 2010 openxml php")
							 ->setCategory("Archivo con resultado de prueba");



// Combino las celdas desde A1 hasta R1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:R1');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'REPORTE INVENTARIO')
            ->setCellValue('A2', 'ID')
            ->setCellValue('B2', 'PISO')
            ->setCellValue('C2', 'MARCA')
			->setCellValue('D2', 'SERIAL')
			->setCellValue('E2', 'N INTERNO INVENTARIO')
      ->setCellValue('F2', 'MONITOR')
      ->setCellValue('G2', 'MOUSE')
      ->setCellValue('H2', 'TECLADO')
      ->setCellValue('I2', 'ADAPTADOR')
      ->setCellValue('J2', 'RJ45')
      ->setCellValue('K2', 'NOMBRE')
      ->setCellValue('L2', 'TELEFONO')
      ->setCellValue('M2', 'IP')
      ->setCellValue('N2', 'MAC')
      ->setCellValue('O2', 'ANTIVIRUS')
      ->setCellValue('P2', 'IMPRESORA')
      ->setCellValue('Q2', 'TINTA')
      ->setCellValue('R2', 'TIPODETINTA');

// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));

$objPHPExcel->getActiveSheet()->getStyle('A1:R2')->applyFromArray($boldArray);



//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(24);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(21);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(18);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(16);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(60);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15);


/*Extraer datos de MYSQL*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'test');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$sql="SELECT * FROM inventario  order by ID_INVENTARIO";
	$query=mysqli_query($con,$sql);
	$cel=3;//Numero de fila donde empezara a crear  el reporte ya que las 2 primeras filas tienen los titulos
	while ($row=mysqli_fetch_array($query)){
		// $countryCode=$row['comillas'];
    $id = $row["ID_INVENTARIO"];
    $piso = $row["PISO"];
      $marca = $row["MARCA"];
  	$serial = $row["SERIAL_PC"];
  	$nro_interno = $row["N_INTERNO_INVENTARIO"];
      $monitor = $row["MONITOR"];
      $mouse = $row["MOUSE"];
      $teclado = $row["TECLADO"];
      $adaptador = $row["ADAPTADOR"];
      $rj45 = $row["RJ45"];
      $nombre = $row["NOMBRE"];
      $telefono = $row["TELEFONO"];
      $ip = $row["IP"];
      $mac = $row["MAC"];
      $antivirus = $row["ANTIVIRUS"];
      $impresora = $row["IMPRESORA"];
      $tinta = $row["TINTA"];
      $tipodetinta = $row["TIPODETINTA"];

			$a="A".$cel;
			$b="B".$cel;
			$c="C".$cel;
			$d="D".$cel;
			$e="E".$cel;
      $f="F".$cel;
      $g="G".$cel;
      $h="H".$cel;
      $i="I".$cel;
      $j="J".$cel;
      $k="K".$cel;
      $l="L".$cel;
      $m="M".$cel;
      $n="N".$cel;
      $o="O".$cel;
      $p="P".$cel;
      $q="Q".$cel;
      $r="R".$cel;

			// Agregar datos
			$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $id)
            ->setCellValue($b, $piso)
            ->setCellValue($c, $marca)
            ->setCellValue($d, $serial)
			->setCellValue($e, $nro_interno)
      ->setCellValue($f, $monitor)
      ->setCellValue($g, $mouse)
      ->setCellValue($h, $teclado)
      ->setCellValue($i, $adaptador)
      ->setCellValue($j, $rj45)
      ->setCellValue($k, $nombre)
      ->setCellValue($l, $telefono)
      ->setCellValue($m, $ip)
      ->setCellValue($n, $mac)
      ->setCellValue($o, $antivirus)
      ->setCellValue($p, $impresora)
      ->setCellValue($q, $tinta)
      ->setCellValue($r, $tipodetinta);


	$cel+=1;
	}

/*Fin extracion de datos MYSQL*/
$rango="A2:$r";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte de Inventario');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');

// Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
