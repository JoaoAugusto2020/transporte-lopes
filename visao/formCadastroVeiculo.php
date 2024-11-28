		<h1>Cadastro de Veículo</h1>

		<div id="container">
			<form id="box" action="veiculo.php?fun=cadastrar" method="POST" 
			enctype="multipart/form-data">

				<input type="text" name="nome" id="nome" placeholder="Nome do veículo"/>
				<input type="text" name="marca" id="marca" placeholder="Marca"/>
				<label for="tipo"> Tipo: </label> 
				<input type="radio" name="tipo" id="tipo" value="prancha"> Prancha
				<input type="radio" name="tipo" id="tipo" value="cacamba"> Caçamba
				<input type="number" id="capacidade" name="capacidade"/>L

				<input type="submit" name="enviar" value="enviar" />
				
				<p id="errorMessage" style="color: red; display: none">Usuário ou senha inválidos</p> </p>
				<p>Já possui uma conta? <a href="entrar.html" id="link">Entre aqui</a></p>
			</form>  
		</div>

