	<h1 class="titulo">Catálogo</h1>

	<?php
		if (isset($status)) {
			echo "<H2>" . $status . "</H2>";
			echo "<br><br>";
		}
		//Se $status está preenchida, imprimir ela
	?>
	<p class="centralizado"><a class="link-escuro" href="veiculo.php?fun=cadastrar">Cadastrar</a></p>
	<div class="centralizar-div">	
		<TABLE class="tabela">
			<TR>
				<TH> ID </TH>
				<TH> Nome </TH>
				<TH> Marca </TH>
				<TH> Tipo </TH>
				<TH> Capacidade </TH>
				<TH> Alocação </TH>
				<TH> Editar </TH>
				<TH> Excluir </TH>
			</TR>
			<!-- Primeira linha da tabela com o cabeçalho -->

			<?php
			foreach ($lista as $v) {
				echo "<TR>";

					echo "<TD>" .$v->getIdveiculo(). "</TD>";

					// <A href='veiculo.php?fun=exibir&id="ID"'>
					echo "<TD><A class='link-escuro' href='veiculo.php?fun=exibir&id=" .$v->getIdveiculo(). " '>" .$v->getNome(). "</A></TD>";

					echo "<TD>" .$v->getMarca(). "</TD>";

					echo "<TD>" .$v->getTipo(). "</TD>";

					echo "<TD>" .$v->getCapacidade(). "</TD>";

					echo "<TD>" .$v->getLocacao(). "</TD>";

					echo "<TD><A href=veiculo.php?fun=alterar&id=" .$v->getIdveiculo(). "><img src='visao/imagens/icones/update.png' width='30px'/> </A></TD>";

					echo "<TD><A href=veiculo.php?fun=excluir&id=" .$v->getIdveiculo(). "><img src='visao/imagens/icones/delete.png' width='30px' /></A></TD>";

				echo "</TR>";
			}
			?>
		</TABLE>
	</div>

	<br><br><br>
	<A class="link-escuro" href="index.php?fun=adm"> Voltar </A>