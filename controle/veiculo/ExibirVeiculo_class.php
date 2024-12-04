<?php
	include_once("modelo/VeiculoDAO_class.php");

	class ExibirVeiculo{

		public function __construct(){
			$dao = new VeiculoDAO(); //modelo
			$v = $dao->exibir($_GET["id"]); //recebe os dados e "enviar" para  visão

			include_once("visao/veiculo/exibeVeiculo.php");	//visão
		}
	}
?>