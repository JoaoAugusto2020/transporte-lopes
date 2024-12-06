	<h1 class="titulo">Catálogo</h1>

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
				<TH> Nome </TH>
				<TH> Marca </TH>
				<TH> Tipo </TH>
				<TH> Capacidade </TH>
				<TH> Situação </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->

			<?php
			foreach ($lista as $v) {
				echo "<TR>";

					// <A href='veiculo.php?fun=exibir&id="ID"'>
					echo "<TD>" .$v->getNome(). "</TD>";

					echo "<TD>" .$v->getMarca(). "</TD>";

					echo "<TD>" .$v->getTipo(). "</TD>";

					echo "<TD>" .$v->getCapacidade(). "</TD>";

					echo "<TD>" .$v->getLocacao(). "</TD>";


				echo "</TR>";
			}
			?>
		</TABLE>
	</div>

	<br><br><br>
	<A class="link-escuro" href="index.php"> Voltar </A>