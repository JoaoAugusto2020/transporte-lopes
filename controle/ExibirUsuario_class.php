<?php
	include_once("modelo/UsuarioDAO_class.php");

	class ExibirUsuario{

		public function __construct(){
			$dao = new UsuarioDAO();
			$usuario = $dao->exibir($_GET["idUsuario"]);

			include_once("visao/exibeUsuario.php");	
		}
	}
?>