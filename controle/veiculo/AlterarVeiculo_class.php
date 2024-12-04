<?php
include_once("modelo/VeiculoDAO_class.php");

class AlterarVeiculo{
	
	public function __construct(){
		if (isset($_POST["enviar"])){
			//enviar é o botão de submit

			$v = new Veiculo();
			$v->setIdveiculo($_POST["id"]); //o id é fornecido por um campo hidden
			$v->setNome($_POST["nome"]);
			$v->setMarca($_POST["marca"]);
			$v->setTipo($_POST["tipo"]);
			$v->setCapacidade($_POST["capacidade"]);
			$v->setLocacao($_POST["locacao"]);

			$dao = new VeiculoDAO();
			$dao->alterar($v);

			$status = "Veiculo " . $v->getNome() .  " ALTERADO com sucesso.";

			$lista = $dao->listar();
			include_once("visao/veiculo/listaVeiculo.php");
			//para o funcionamento da visão da Listagem de veiculos
		} else {
			//se entrar no else significa que nenhum formulário foi enviado, ou seja, a pessoa ainda não cadastrou o veiculo

			//ALTERAR -> pegar os dados do veiculo pelo $_GET["id"]

			$dao = new VeiculoDAO();
			$v = $dao->exibir($_GET["id"]); //única diferença é o $cont nessa linha no lugar do $c

			include_once("visao/veiculo/formAlteraVeiculo.php");
		}
	}
}
