	<?php
	if (isset($status)) {
		echo "<H2>" . $status . "</H2>";
	}
	//Se $status está preenchida, imprimir ela
	?>

	<TABLE border="1px">
		<TR>
			<TH> ID </TH>
			<TH> Nome completo</TH>
			<TH> E-mail </TH>
			<TH> Cpf </TH>
			<TH> Senha </TH>
			<TH> Editar </TH>
			<TH> Excluir </TH>
		</TR>
		<!-- Primeira linha da tabela com o cabeçalho -->

		<?php
		foreach ($lista as $u) {
			echo "<TR>";

				echo "<TD>" .$u->getIdUsuario(). "</TD>";

				// <A href='veiculo.php?fun=exibir&id="ID"'>
				echo "<TD><A href='usuario.php?fun=exibir&id=" .$u->getIdUsuario(). " '>" .$u->getNomeCompleto(). "</A></TD>";

				echo "<TD>" .$u->getEmail(). "</TD>";
				echo "<TD>" .$u->getCpf(). "</TD>";
				echo "<TD>" .$u->getSenha(). "</TD>";

				echo "<TD><A href=usuario.php?fun=alterar&id=" .$u->getIdusuario(). "><img src='visao/imagens/icones/update.png' width='30px'/> </A></TD>";

				echo "<TD><A href=usuario.php?fun=excluir&id=" .$u->getIdUsuario(). "><img src='visao/imagens/icones/delete.png' width='30px' /></A></TD>";

			echo "</TR>";
		}
		?>
	</TABLE>