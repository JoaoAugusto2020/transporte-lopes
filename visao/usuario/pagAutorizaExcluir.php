<H1> Você realmente deseja excluir o usuário <?php echo $u->getNomeCompleto(); ?> ? </H1>
		
		<A href="usuario.php?fun=excluir&conf=sim&id=<?php echo $u->getIdUsuario(); ?>"> SIM </A>
		
		<A href="usuario.php?fun=listar">NÃO</A>