<?php
	include_once("modelo/VeiculoDAO_class.php");

	class ExibirVeiculo{

		public function __construct(){
			$dao = new VeiculoDAO();
			$v = $dao->exibir($_GET["idveiculo"]);

			include_once("visao/exibeVeiculo.php");	
		}
	}
?>