	<H1 class="titulo"> Você realmente deseja excluir o veiculo <?php echo $v->getNome(); ?> ? </H1>

	<div class="centralizar-div">
		<A class="btn-confirmar" href="veiculo.php?fun=excluir&conf=sim&id=<?php echo $v->getIdveiculo(); ?>"> SIM </A>
		<A class="btn-cancelar" href="veiculo.php?fun=listar">NÃO</A>
	</div>