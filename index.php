<?php
session_start(); //Inicia a sessão
//área de memória dentro do servidor
//carrinho de compras, seus dados de conexão
//qualquer variável que vc queira criar
include_once("visao/cabecalho.php");

if(isset($_GET["fun"])){
	$fun = $_GET["fun"];
	
	if($fun == "adm"){		
		include_once("visao/paginas/adm.html");	
	} else if($fun == "entrar"){
		include_once("visao/paginas/entrar.html");
	} else if($fun == "sobre"){
		include_once("visao/paginas/sobre.html");
	}else {
		include_once("visao/paginas/home.html");		

	}
} else {
	include_once("visao/paginas/home.html");
}

//atribuição de responsabilidade
//o controle sabe como exibir a lista de veiculos
include_once("visao/rodape.php");
