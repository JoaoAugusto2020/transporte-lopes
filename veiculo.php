<?php
session_start();
include_once("visao/cabecalho.php");

if(isset($_GET["fun"])){
	$fun = $_GET["fun"];
	
	if($fun == "cadastrar"){
		
		include_once("controle/CadastrarVeiculo_class.php");
		$pag = new CadastrarVeiculo();
		
	} elseif($fun == "alterar"){
		include_once("controle/AlterarVeiculo_class.php");
		$pag = new AlterarVeiculo();
		
	} elseif($fun == "excluir"){
		
		include_once("controle/ExcluirVeiculo_class.php");//op == sim
		$pag = new ExcluirVeiculo();
		
	} elseif($fun == "listar"){
		include_once("controle/ListarVeiculo_class.php");
		$pag = new ListarVeiculo();
		
	}  elseif($fun == "exibir") {
		include_once("controle/ExibirVeiculo_class.php");
		$pag = new ExibirVeiculo();
		
	} else {
		include_once("visao/paginas/home.html");
	}
		
} else {
	include_once("visao/paginas/home.html");
}

include_once("visao/rodape.php");