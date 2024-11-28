<?php
include_once("modelo/UsuarioDAO_class.php");

class ExcluirUsuario{

	public function __construct(){
		if (isset($_GET["conf"])){
			if ($_GET["conf"] == "sim"){
				//enviar é o botão de submit

				$dao = new UsuarioDAO();
				$u = new Usuario(); //a diferença é que aqui a variável auxiliar tem o formato do Usuario
				$u = $dao->exibir($_GET["idUsuario"]); //encapsulando o id dentro de um obj Usuario
				$dao->excluir($u);
				$status = "Usuario " . $u->getNomeCompleto() . " EXCLUIDO com sucesso.";

				$lista = $dao->listar();
				include_once("visao/listaUsuario.php");
				//para o funcionamento da visão da Listagem de Usuarios
			}
		} else {
			//encaminhar para a página de confirmação de exclusão

			$dao = new UsuarioDAO();
			$u = $dao->exibir($_GET["idUsuario"]);

			include_once("visao/pagAutorizaExcluir.php");
		}
	}
}
