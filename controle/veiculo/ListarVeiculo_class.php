<?php
	include_once("modelo/VeiculoDAO_class.php");
	
	class ListarVeiculo{
	
		public function __construct(){
			$dao = new VeiculoDAO();
			$lista = $dao->listar();
			//array de objetos do tipo veiculo
			
			if($lista==NULL){
				echo "<h1> Não há veículos cadastrados! <h1/>";
			}else{
				include_once("visao/veiculo/listaVeiculo.php");
			}	
		}
	}
?>