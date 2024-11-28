<?php
	include_once("modelo/UsuarioDAO_class.php");
	
	class ListarUsuario{
	
		public function __construct(){
			$dao = new UsuarioDAO();
			$lista = $dao->listar();
			//array de objetos do tipo veiculo
			
			include_once("visao/listaUsuario.php");		
		}
	}
?>


