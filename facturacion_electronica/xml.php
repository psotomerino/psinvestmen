<?php 
$xml = new DOMDocument('1.0','utf-8');
$xml -> formatOutput = true;

$xml_fac = $xml->createElement('factura');
$cabecera =  $xml->createAtribute('id');
$cabecera->value = 'comprobante';
$cabecerav = $xml->createAtribute('version');
$cabecerav->'1.00';
$xml_inf = $xml->createElement('inforTributaria');
$xml_amb = $xml->createElement('ambiente','1');
$xml_tip = $xml->createElement('tipoEmision','1');
$xml_raz = $xml->createElement('razonSocial','NOMBRE DE LA EMPRESA S.A');
$xml_nom = $xml->createElement('nombreComercial','NOMBRE COMERCIAL DE LA EMPRESA S.A');
$xml_ruc = $xml->createElement('ruc','1234567891001');

$xml_cla = $xml->createElement('claveAcceso','2110201101179214673900110020010000000011234567813');
$xml_doc = $xml->createElement('codDoc','01');
$xml_est = $xml->createElement('estab','001');
$xml_emi = $xml->createElement('ptoEmi','001');
$xml_sec = $xml->createElement('secuencial','123451234');
$xml_dir = $xml->createElement('dirMatriz','DIRECCION DE LA EMPRESA S.A');

$xml_def = $xml->createElement('infoFactura');
$xml_fact = $xml->createElement('facturaEmision','21/09/2022');
$xml_des = $xml->createElement('dirEstablecimiento','DIRECCION ESTABLECIMIENTO');
$xml_obl = $xml->createElement('obligadoContabilidad','SI');
$xml_idc = $xml->createElement('tipoIdentificacionComprador','05');
$xml_rco = $xml->createElement('razonSocialComprador','NOMBRE DEL COMPRADOR');
$xml_idc = $xml->createElement('identificacionComprador','1234567891');
$xml_tsi = $xml->createElement('totalSinImpuestos','1.00');
$xml_tds = $xml->createElement('totalDescuentos','0.00');







?>