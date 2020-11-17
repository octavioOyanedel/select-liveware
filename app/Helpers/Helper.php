<?php

function testHelper() 
{
    return 'Todo OK.';
}

function tipoObjeto($objeto)
{
	switch ($objeto) {
		case $objeto instanceof App\Models\Division:
			return 'DIVISIÓN';
			break;
		case $objeto instanceof App\Models\Battalion:
			return 'BATALLÓN';
			break;
		case $objeto instanceof App\Models\Regiment:
			return 'REGIMIENTO';
			break;						
		default:
			return 'TIPO DESCONOCIDO';
			break;
	}
}

function destacarTexto($texto, $marcar)
{
	$marcado = substr($texto, stripos($texto, $marcar), strlen($marcar));
	return str_ireplace($marcar, "<mark class='resaltado'>".$marcado."</mark>", $texto);	
}

function prepararArrayGrafico($arreglo){
	$arreglo_grafico = array();
	foreach ($arreglo as $value) {
		foreach ($value as $info) {
			array_push($arreglo_grafico, $info);
		}
	}
	return $arreglo_grafico;
}
