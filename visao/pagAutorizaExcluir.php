		<H1> Você realmente deseja excluir o veiculo <?php echo $v->getNome(); ?> ? </H1>
		
		<A href="veiculo.php?fun=excluir&conf=sim&id=<?php echo $v->getIdveiculo(); ?>"> SIM </A>
		
		<A href="veiculo.php?fun=listar">NÃO</A>