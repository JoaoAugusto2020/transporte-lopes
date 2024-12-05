		<H1> Alterar Usuário </H1>
		
		<FORM action="usuario.php?fun=alterar" method="POST">
		<!-- POST -> envio de informações escondidas -->
			<INPUT type="hidden" name="id" 
			<?php echo "value='" . $u->getIdUsuario() . "'"; ?> />

			<label for="nome">Nome:</label>
			<INPUT class="input" type="text" id="nome" name="nome" placeholder="Nome completo"
			<?php echo "value='" . $u->getNomeCompleto() . "'"; ?> /> <br />				
			
			<LABEL for="email">E-mail:</LABEL> 
			<INPUT class="input" type="email" id="email" name="email" placeholder="email@gmail.com"
			<?php echo "value='" . $u->getEmail() . "'"; ?>/> <br />

			<LABEL for="cpf">CPF:</LABEL> 
			<INPUT class="input" type="text" id="cpf" name="cpf" placeholder="000.000.000-00"
			<?php echo "value='" . $u->getCpf() . "'"; ?>/> <br> <br>
			
			<h3>Alterar senha</h3>

            <LABEL for="senha">Senha:</LABEL>
			<!-- <INPUT class="input" type="password" id="senha" name="senhaAntiga" placeholder="Senha antiga"/> <br> -->
			<div class="input-box">
                <input class="input" type="password" id="senha" name="senha" placeholder="Nova senha"
				<?php echo "value='" . $u->getSenha() . "'"; ?>/>
				<img src="visao/imagens/icones/olho-aberto.png" id="olho">
            </div> <br>
			<br>

			<button class="btn-escuro" type="submit" name="enviar" value="enviar">Alterar</button>
			<!-- <INPUT type="submit" name="enviar" value="enviar" /> -->
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>

		<br><br><br>
		<A class="link-escuro" href="usuario.php?fun=listar"> Voltar </A>
	</BODY>
</HTML>