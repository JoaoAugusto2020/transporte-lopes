<?php
	include_once("modelo/VeiculoDAO_class.php");
	
	class ListarVeiculoAlugar{
	
		public function __construct(){
			$dao = new VeiculoDAO();
			$lista = $dao->listar();
			//array de objetos do tipo veiculo
			
			if($lista==NULL){
				echo "<h1 class='titulo'> Não há veículos disponíveis! </h1>";
				echo "<div class='espaco-grande'></div>";
			}else{
				include_once("visao/veiculo/listaVeiculoAlugar.php");
			}	
		}
	}
?>