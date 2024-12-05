<?php
include_once("modelo/UsuarioDAO_class.php");

class CadastrarUsuario{

	public function __construct(){
		if (isset($_POST["enviar"])){
			//enviar é o botão de submit

			$u = new Usuario();
			$u->setEmail($_POST["email"]);
			$u->setCpf($_POST["cpf"]);
			$u->setNomeCompleto($_POST["nome"]);
			$u->setSenha($_POST["senha"]);
			//$u->setIdUsuario($_POST["idUsuario"]); //a diferença é que no outro essa linha está oculta

			$dao = new UsuarioDao();
			$dao->cadastrar($u);

			$status = "Usuario " . mb_strtoupper($u->getNomeCompleto(), 'UTF-8') . " cadastrado com sucesso.";

			$lista = $dao->listar();
			include_once("visao/usuario/listaUsuario.php");
			//para o funcionamento da visão da Listagem de Usuarios
		} else {
			//se entrar no else significa que nenhum 
			//formulário foi enviado, ou seja, a pessoa 
			//ainda não cadastrou o Usuario

			//ALTERAR -> pegar os dados do Usuario pelo 
			//$_GET["id"]

			//$u = $dao->exibir($id)

			include_once("visao/usuario/formCadastroUsuario.php");
		}
	}
}
