<?php
session_start();
include_once("visao/cabecalho.php");

if(isset($_GET["fun"])){
	$fun = $_GET["fun"];
	
	if($fun == "cadastrar"){
		include_once("controle/usuario/CadastrarUsuario_class.php");
		$pag = new CadastrarUsuario();
		
	} elseif($fun == "alterar"){
		include_once("controle/usuario/AlterarUsuario_class.php");
		$pag = new AlterarUsuario();
		
	} elseif($fun == "excluir"){
		include_once("controle/usuario/ExcluirUsuario_class.php");//op == sim
		$pag = new ExcluirUsuario();
		
	} elseif($fun == "listar"){
		include_once("controle/usuario/ListarUsuario_class.php");
		$pag = new ListarUsuario();
		
	}  elseif($fun == "exibir") {
		include_once("controle/usuario/ExibirUsuario_class.php");
		$pag = new ExibirUsuario();
		
	} else {
		include_once("visao/paginas/home.html");		
	}
		
} else {
	include_once("visao/paginas/home.html");
}

include_once("visao/rodape.php");