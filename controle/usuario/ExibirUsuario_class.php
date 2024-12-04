<?php
	include_once("modelo/UsuarioDAO_class.php");

	class ExibirUsuario{

		public function __construct(){
			$dao = new UsuarioDAO();
			$u = $dao->exibir($_GET["id"]);

			include_once("visao/usuario/exibeUsuario.php");	
		}
	}
?>