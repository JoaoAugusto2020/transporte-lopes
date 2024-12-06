<?php
session_start();
include_once("visao/cabecalho.php");

if(isset($_GET["fun"])){
	$fun = $_GET["fun"];
	
	if($fun == "cadastrar"){
		include_once("controle/veiculo/CadastrarVeiculo_class.php");
		$pag = new CadastrarVeiculo();

	} elseif($fun == "alterar"){
		include_once("controle/veiculo/AlterarVeiculo_class.php");
		$pag = new AlterarVeiculo();
		
	} elseif($fun == "excluir"){
		include_once("controle/veiculo/ExcluirVeiculo_class.php");//op == sim
		$pag = new ExcluirVeiculo();
		
	}  elseif($fun == "alugar"){
		include_once("controle/veiculo/AlugarVeiculo_class.php");//op == sim
		$pag = new AlugarVeiculo();
		
	} elseif($fun == "desalocar"){
		include_once("controle/veiculo/DesalocarVeiculo_class.php");//op == sim
		$pag = new DesalocarVeiculo();
		
	} elseif($fun == "listar"){
		include_once("controle/veiculo/ListarVeiculo_class.php");
		$pag = new ListarVeiculo();
		
	} elseif($fun == "listarCacamba"){
		include_once("controle/veiculo/ListarCacamba_class.php");
		$pag = new ListarCacamba();
		
	} elseif($fun == "listarPrancha"){
		include_once("controle/veiculo/ListarPrancha_class.php");
		$pag = new ListarPrancha();
		
	} elseif($fun == "listarCatalogo"){
		include_once("controle/veiculo/ListarVeiculoCatalogo_class.php");
		$pag = new ListarVeiculoCatalogo();
		
	} elseif($fun == "listarAlugar"){
		include_once("controle/veiculo/ListarVeiculoAlugar_class.php");
		$pag = new ListarVeiculoAlugar();
		
	}  elseif($fun == "exibir") {
		include_once("controle/veiculo/ExibirVeiculo_class.php");
		$pag = new ExibirVeiculo();
		
	} else {
		include_once("visao/paginas/home.html");

	}
} else {
	include_once("visao/paginas/home.html");
}

include_once("visao/rodape.php");