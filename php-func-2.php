<?php
function cuentaLetraA($cadena, $aBuscar){
	echo "Tiene " . substr_count(strtolower($cadena), $aBuscar) . " letra/s " . strtoupper($aBuscar);
}

cuentaLetraA("Upgrade Hub", 'u');
?>