<?php
	include_once("modelo/VeiculoDAO_class.php");
	
	class ListarCacamba{
	
		public function __construct(){
			$dao = new VeiculoDAO();
			$lista = $dao->listarCacamba();
			//array de objetos do tipo veiculo
			
			if($lista==NULL){
				echo "<h1 class='titulo'> Não há veículos do tipo Caçamba cadastrados! </h1>";
				echo "<div class='espaco-grande'></div>";
			}else{
				include_once("visao/veiculo/listaVeiculoCatalogo.php");
			}	
		}
	}
?>