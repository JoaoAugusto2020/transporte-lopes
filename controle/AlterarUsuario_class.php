<?php
include_once("modelo/UsuarioDAO_class.php");

class AlterarUsuario{
	
	public function __construct(){
		if (isset($_POST["enviar"])){
			//enviar é o botão de submit

			$u = new Usuario();
			$u->setEmail($_POST["email"]);
			$u->setCpf($_POST["cpf"]);
			$u->setNomeCompleto($_POST["nomeCompleto"]);
			$u->setSenha($_POST["senha"]); 
			$u->setIdUsuario($_POST["idUsuario"]);//o id é fornecido por um campo hidden

			$dao = new UsuarioDAO();
			$dao->alterar($u);

			$status = "Usuario " . $u->getNomeCompleto() . " ALTERADO com sucesso.";

			$lista = $dao->listar();
			include_once("visao/listaUsuario.php");
			//para o funcionamento da visão da Listagem de usuarios
		} else {
			//se entrar no else significa que nenhum formulário foi enviado, ou seja, a pessoa ainda não cadastrou o usuario

			//ALTERAR -> pegar os dados do usuario pelo $_GET["id"]

			$dao = new UsuarioDAO();
			$v = $dao->exibir($_GET["idUsuario"]); //única diferença é o $cont nessa linha no lugar do $c

			include_once("visao/formAlteraUsuario.php");
		}
	}
}
