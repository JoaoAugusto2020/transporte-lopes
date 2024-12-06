<?php
include_once("modelo/VeiculoDAO_class.php");

class AlugarVeiculo{
	
	public function __construct(){
		if(isset($_GET["locacao"]) && $_GET["locacao"] == "Alocado"){
			$status = "<p style='color: red;'>Este veículo já está alocado.</p>";
			
			$dao = new VeiculoDAO();
			$lista = $dao->listar();

			include_once("visao/veiculo/listaVeiculoAlugar.php");
		}else if (isset($_GET["conf"])){
			//enviar é o botão de submit

			$v = new Veiculo();
			$v->setIdveiculo($_GET["id"]); //o id é fornecido por um campo hidden

			$dao = new VeiculoDAO();
			$dao->alugar($v);

			$status = "Veiculo " . mb_strtoupper($v->getNome(), 'UTF-8') .  " alugado com sucesso.";

			$lista = $dao->listar();
			include_once("visao/veiculo/listaVeiculoAlugar.php");
			//para o funcionamento da visão da Listagem de veiculos
		} else {
			//se entrar no else significa que nenhum formulário foi enviado, ou seja, a pessoa ainda não cadastrou o veiculo

			//ALTERAR -> pegar os dados do veiculo pelo $_GET["id"]

			$dao = new VeiculoDAO();
			$v = $dao->exibir($_GET["id"]); //única diferença é o $cont nessa linha no lugar do $c

			include_once("visao/veiculo/pagAutorizaAlugar.php");
		}
	}
}
