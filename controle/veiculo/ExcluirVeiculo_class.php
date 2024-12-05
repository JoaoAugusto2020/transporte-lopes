<?php
include_once("modelo/VeiculoDAO_class.php");

class ExcluirVeiculo{

	public function __construct(){
		if (isset($_GET["conf"])){
			if ($_GET["conf"] == "sim"){
				//enviar é o botão de submit

				$dao = new VeiculoDAO();
				$v = $dao->exibir($_GET["id"]);
				$dao->excluir($v);

				$status = "Veiculo " . mb_strtoupper($v->getNome(), 'UTF-8') .  " excluido com sucesso.";

				$lista = $dao->listar();
				if($lista==NULL){
					echo "<h1 class='titulo'> Não há veículos cadastrados! </h1>";
					echo "<div class='espaco-grande'></div>";
				}else{
					include_once("visao/veiculo/listaVeiculo.php");
				}
				//para o funcionamento da visão da Listagem de veiculos
			}
		} else {
			//encaminhar para a página de confirmação de exclusão

			$dao = new VeiculoDAO();
			$v = $dao->exibir($_GET["id"]);

			include_once("visao/veiculo/pagAutorizaExcluir.php");
		}
	}
}
