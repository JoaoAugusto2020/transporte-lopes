<?php
	include_once("modelo/UsuarioDAO_class.php");
	
	class ListarUsuario{
	
		public function __construct(){
			$dao = new UsuarioDAO();
			$lista = $dao->listar();
			//array de objetos do tipo veiculo
			
			if($lista==NULL){
				echo "<h1 class='titulo'> Não há usuários cadastrados! </h1>";
				echo "<div class='espaco-grande'></div>";
			}else{
				include_once("visao/usuario/listaUsuario.php");
			}		
		}
	}
?>


