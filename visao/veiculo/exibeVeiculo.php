		<H1>Veiculo <?php echo $v->getNome(); ?> </H1>
		<UL>
			<LI>Nome: <?php echo $v->getNome(); ?></LI>
			<LI>Marca: <?php echo $v->getMarca(); ?></LI>
			<LI>Tipo: <?php echo $v->getTipo(); ?></LI>
			<LI>Capacidade: <?php echo $v->getCapacidade(); ?></LI>
			<LI>Disponibilidade: <?php echo $v->getLocacao(); ?></LI>
		</UL>
		
		<A href="veiculo.php?fun=listar"> Voltar </A>
		
	</BODY>
	
</HTML>