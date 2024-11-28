	<?php
	if (isset($status)) {
		echo "<H2>" . $status . "</H2>";
	}
	//Se $status está preenchida, imprimir ela
	?>

	<TABLE border="1px">
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
				echo "<TD><A href='veiculo.php?fun=exibir&idveiculo=" .$v->getIdveiculo(). " '>" .$v->getNome(). "</A></TD>";

				echo "<TD>" .$v->getMarca(). "</TD>";

				echo "<TD>" .$v->getTipo(). "</TD>";

				echo "<TD>" .$v->getCapacidade(). "</TD>";

				echo "<TD>" .$v->getLocacao(). "</TD>";

				echo "<TD><A href=veiculo.php?fun=alterar&idveiculo=" .$v->getIdveiculo(). "><img src='visao/imagens/icones/update.png' width='30px'/> </A></TD>";

				echo "<TD><A href=veiculo.php?fun=excluir&idveiculo=" .$v->getIdveiculo(). "><img src='visao/imagens/icones/delete.png' width='30px' /></A></TD>";

			echo "</TR>";
		}
		?>
	</TABLE>