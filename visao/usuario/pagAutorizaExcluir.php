	<H1 class="titulo"> Você realmente deseja excluir o usuário <?php echo $u->getNomeCompleto(); ?> ? </H1>

	<div class="centralizar-div">
		<A class="btn-confirmar" href="usuario.php?fun=excluir&conf=sim&id=<?php echo $u->getIdUsuario(); ?>"> SIM </A>
		<A class="btn-cancelar" href="usuario.php?fun=listar"> NÃO </A>
	</div>