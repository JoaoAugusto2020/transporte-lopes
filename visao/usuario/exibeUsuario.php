		<H1>Usuário <?php echo $u->getNomeCompleto(); ?> </H1>
		<UL>
			<LI>Nome: <?php echo $u->getNomeCompleto(); ?></LI>
			<LI>E-mail: <?php echo $u->getEmail(); ?></LI>
			<LI>CPF: <?php echo $u->getCpf(); ?></LI>
            <LI>Senha: <?php echo $u->getSenha(); ?></LI>
		</UL>
		
		<br>
		<A class="link-escuro" href="usuario.php?fun=listar"> Voltar </A>
	</BODY>
</HTML>