		<h1>Cadastro de Veículo</h1>

		<form action="veiculo.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
		<!-- POST -> envio de informações escondidas -->

			<!-- <input type="hidden" name="nome" id="nome" placeholder="Nome do veículo"/> -->

			<label for="marca">Marca:</label>
			<input class="input" type="text" name="marca" id="marca" required/> <br>
			
			<p>Tipo:</p>
			<input type="radio" name="tipo" id="prancha" value="Prancha" required>
			<label for="prancha">Prancha</label> <br>
			<input type="radio" name="tipo" id="cacamba" value="Caçamba" required>
			<label for="cacamba">Caçamba</label> <br>
			
			<label for="capacidade">Capacidade:</label>
			<input class="input input-numero" type="number" id="capacidade" name="capacidade" required/> L <br>
			<br>

			<button class="btn-escuro" type="submit" name="enviar" value="enviar">Cadastrar</button>
		</form>

		<br><br><br>
		<A class="link-escuro" href="veiculo.php?fun=listar"> Voltar </A>

