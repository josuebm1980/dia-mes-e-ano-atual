<?php
function retorna_data(){
	$agora = time();
	$data = getdate($agora);
	if($data["wday"]==0) { echo "Domingo, "; }
	elseif ($data["wday"]==1) { echo "segunda-feira, ";}
	elseif ($data["wday"]==2) { echo "Terça-feira, ";}
	elseif ($data["wday"]==3) { echo "Quarta-feira, ";}
	elseif ($data["wday"]==4) { echo "Quinta-feira, ";}
	elseif ($data["wday"]==5) { echo "Sexta-feira, ";}
	elseif ($data["wday"]==6) { echo "Sabado, ";}

	if($data["mon"]==1) {$mes= "janeiro" ;}
	elseif($data["mon"]==2) { $mes= "Fevereiro" ;}
	elseif($data["mon"]==3) { $mes= "Março" ;}
	elseif($data["mon"]==4) { $mes= "Abril" ;}
	elseif($data["mon"]==5) { $mes= "Junho" ;}
	elseif($data["mon"]==6) { $mes= "Julho" ;}
	elseif($data["mon"]==7) { $mes= "Agosto" ;}
	elseif($data["mon"]==8) { $mes= "Setembro" ;}
	elseif($data["mon"]==9) { $mes= "Outubro" ;}
	elseif($data["mon"]==9) { $mes= "Novembro" ;}
	elseif($data["mon"]==9) { $mes= "Dezembro" ;}

	$data_atual = $data ["mday"]. " de " . $mes. " de " . $data["year"];
	return $data_atual;

}

$hoje = retorna_data ( );
echo $hoje;

?>