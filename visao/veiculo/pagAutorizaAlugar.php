	<H1 class="titulo"> Você realmente deseja alugar o veículo <?php echo $v->getNome(); ?> ? </H1>

	<div class="centralizar-div">
		<A class="btn-confirmar" href="veiculo.php?fun=alugar&conf=sim&id=<?php echo $v->getIdveiculo(); ?>"> SIM </A>
		<A class="btn-cancelar" href="veiculo.php?fun=listarAlugar">NÃO</A>
	</div>