	<h1 class="titulo">Aluguel</h1>

	<?php
		if (isset($status)) {
			echo "<H2>" . $status . "</H2>";
			echo "<br><br>";
		}
		//Se $status está preenchida, imprimir ela
	?>
	
	<div class="centralizar-div">	
		<TABLE class="tabela">
			<TR>
				<!-- <TH> ID </TH> -->
				<TH> Nome </TH>
				<TH> Marca </TH>
				<TH> Tipo </TH>
				<TH> Capacidade </TH>
				<TH> Situação </TH>
				<TH> Alugar </TH>
				<TH> Desalocar </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->

			<?php
			foreach ($lista as $v) {
				echo "<TR>";

					//echo "<TD>" .$v->getIdveiculo(). "</TD>";

					// <A href='veiculo.php?fun=exibir&id="ID"'>
					echo "<TD>" .$v->getNome(). "</TD>";

					echo "<TD>" .$v->getMarca(). "</TD>";

					echo "<TD>" .$v->getTipo(). "</TD>";

					echo "<TD>" .$v->getCapacidade(). "</TD>";

					echo "<TD>" .$v->getLocacao(). "</TD>";

					echo "<TD><A class='link-escuro' href=veiculo.php?fun=alugar&locacao=".$v->getLocacao()."&id=" .$v->getIdveiculo(). ">Alugar </A></TD>";

					echo "<TD><A class='link-escuro' href=veiculo.php?fun=desalocar&locacao=".$v->getLocacao()."&id=" .$v->getIdveiculo(). ">Desalocar </A></TD>";

				echo "</TR>";
			}
			?>
		</TABLE>
	</div>

	<br><br><br>
	<A class="link-escuro" href="index.php"> Voltar </A>