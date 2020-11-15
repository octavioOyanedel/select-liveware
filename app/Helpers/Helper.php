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
