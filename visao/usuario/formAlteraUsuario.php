<H1> Alterar Usuário </H1>
		
		<FORM action="usuario.php?fun=alterar" method="POST">
		<!-- POST -> envio de informações escondidas -->
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $u->getIdUsuario() . "'"; ?> />

			<INPUT type="text" id="nome" name="nome" placeholder="Nome completo do Usuário"
			<?php echo "value='" . $u->getNomeCompleto() . "'"; ?> /> <br />				
			
			<LABEL for="email"> E-mail: </LABEL> 
			<INPUT type="email" id="email" name="email" 
			<?php echo "value='" . $u->getEmail() . "'"; ?>/> <br />

			<LABEL for="cpf"> CPF: </LABEL> 
			<INPUT type="text" id="cpf" name="cpf" 
			<?php echo "value='" . $u->getCpf() . "'"; ?>/> <br />

            <LABEL for="senha"> Senha: </LABEL> 
			<INPUT type="password" id="senha" name="senha" 
			<?php echo "value='" . $u->getSenha() . "'"; ?>/>
			<img src="visao/imagens/icones/olho-aberto.png" id="olho" width="30px" height="30px"> <br />

			<INPUT type="submit" name="enviar" value="enviar" />
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>