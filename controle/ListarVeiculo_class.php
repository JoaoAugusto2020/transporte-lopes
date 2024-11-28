<?php
	include_once("modelo/VeiculoDAO_class.php");
	
	class ListarVeiculo{
	
		public function __construct(){
			$dao = new VeiculoDAO();
			$lista = $dao->listar();
			//array de objetos do tipo veiculo
			
			include_once("visao/listaVeiculo.php");		
		}
	}
?>