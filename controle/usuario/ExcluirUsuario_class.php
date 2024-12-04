<?php
include_once("modelo/UsuarioDAO_class.php");

class ExcluirUsuario{

	public function __construct(){
		if (isset($_GET["conf"])){
			if ($_GET["conf"] == "sim"){
				//enviar é o botão de submit

				$dao = new UsuarioDAO();
				$u = $dao->exibir($_GET["id"]); //encapsulando o id dentro de um obj Usuario
				$dao->excluir($u);

				$status = "Usuario " . $u->getNomeCompleto() . " EXCLUIDO com sucesso.";

				$lista = $dao->listar();
				if($lista==NULL){
					echo "<h1> Não há usuários cadastrados! <h1/>";
				}else{
					include_once("visao/usuario/listaUsuario.php");
				}
				//para o funcionamento da visão da Listagem de Usuarios
			}
		} else {
			//encaminhar para a página de confirmação de exclusão

			$dao = new UsuarioDAO();
			$u = $dao->exibir($_GET["id"]);

			include_once("visao/usuario/pagAutorizaExcluir.php");
		}
	}
}
