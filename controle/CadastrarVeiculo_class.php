<?php
include_once("modelo/VeiculoDAO_class.php");

class CadastrarVeiculo{

	public function __construct(){
		if (isset($_POST["enviar"])){
			//enviar é o botão de submit

			$v = new Veiculo();
			$v->setNome($_POST["nome"]);
			$v->setMarca($_POST["marca"]);
			$v->setTipo($_POST["tipo"]);
			$v->setCapacidade($_POST["capacidade"]);
			$v->setLocacao("Disponível");
			//$v->setIdveiculo($_POST["idveiculo"]); //a diferença é que no outro essa linha está oculta

			$dao = new VeiculoDao();
			$dao->cadastrar($v);

			$status = "Veiculo " . $v->getNome() .  " CADASTRADO com sucesso.";

			$lista = $dao->listar();

			include_once("visao/listaVeiculo.php");
			//para o funcionamento da visão da Listagem de veiculos
		} else {
			//se entrar no else significa que nenhum 
			//formulário foi enviado, ou seja, a pessoa 
			//ainda não cadastrou o veiculo

			//ALTERAR -> pegar os dados do veiculo pelo 
			//$_GET["id"]

			//$v = $dao->exibir($id)

			include_once("visao/formCadastroVeiculo.php");
		}
	}
}
