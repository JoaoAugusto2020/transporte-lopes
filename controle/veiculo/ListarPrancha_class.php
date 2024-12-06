<?php
	include_once("modelo/VeiculoDAO_class.php");
	
	class ListarPrancha{
	
		public function __construct(){
			$dao = new VeiculoDAO();
			$lista = $dao->listarPrancha();
			//array de objetos do tipo veiculo
			
			if($lista==NULL){
				echo "<h1 class='titulo'> Não há veículos do tipo Prancha cadastrados! </h1>";
				echo "<div class='espaco-grande'></div>";
			}else{
				include_once("visao/veiculo/listaVeiculoCatalogo.php");
			}	
		}
	}
?>