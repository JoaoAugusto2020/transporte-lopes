	<H1 class="titulo"> Você realmente deseja desalocar o veículo <?php echo $v->getNome(); ?> ? </H1>

	<div class="centralizar-div">
		<A class="btn-confirmar" href="veiculo.php?fun=desalocar&conf=sim&id=<?php echo $v->getIdveiculo(); ?>"> SIM </A>
		<A class="btn-cancelar" href="veiculo.php?fun=listarAlugar">NÃO</A>
	</div>