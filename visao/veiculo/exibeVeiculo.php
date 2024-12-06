		<H1>Veículo <?php echo $v->getNome(); ?> </H1>
		<UL>
			<LI>Nome: <?php echo $v->getNome(); ?></LI>
			<LI>Marca: <?php echo $v->getMarca(); ?></LI>
			<LI>Tipo: <?php echo $v->getTipo(); ?></LI>
			<LI>Capacidade: <?php echo $v->getCapacidade(); ?>L</LI>
			<LI>Disponibilidade: <?php echo $v->getLocacao(); ?></LI>
		</UL>
		
		<br>
		<A class="link-escuro" href="veiculo.php?fun=listar"> Voltar </A>
	</BODY>
</HTML>