		<H1> Alterar Veiculo </H1>
		
		<FORM action="veiculo.php?fun=alterar" method="POST">
		<!-- POST -> envio de informações escondidas -->
			
			<INPUT type="hidden" name="id" <?php echo("value='" .$v->getIdveiculo(). "'"); ?> />
			<INPUT type="hidden" id="nome" name="nome" placeholder="Nome do veículo" required <?php echo("value='" .$v->getNome(). "'"); ?> /> <br />
			
			<LABEL for="marca">Marca:</LABEL> 
			<INPUT class="input" type="text" id="marca" name="marca" required <?php echo("value='". $v->getMarca(). "'"); ?>/> <br />

			<p>Tipo:</p>
			<input type="radio" name="tipo" id="prancha" value="Prancha" required <?php $tipo = $v->getTipo(); if($tipo==="Prancha") echo "checked"?>>
			<label for="prancha">Prancha</label> <br>
			<input type="radio" name="tipo" id="cacamba" value="Caçamba" required <?php $tipo = $v->getTipo(); if($tipo==="Caçamba") echo "checked"?>>
			<label for="cacamba">Caçamba</label> <br>
				
			
			<LABEL for="capacidade">Capacidade:</LABEL> 
			<INPUT class="input input-numero" type="number" id="capacidade" name="capacidade" required <?php echo "value='" .$v->getCapacidade(). "'"; ?>/>L <br/>
			
			<p>Locação:</p> 
			<input type="radio" name="locacao" id="disponivel" value="Disponível" required <?php $locacao = $v->getLocacao(); if($locacao==="Disponível")echo "checked"?>>
			<label for="disponivel">Disponível</label> <br>
			<input type="radio" name="locacao" id="alocado" value="Alocado" required <?php $locacao = $v->getLocacao(); if($locacao==="Alocado")echo "checked"?>>
			<label for="alocado">Alocado</label> <br>
			<br>

			<button class="btn-escuro" type="submit" name="enviar" value="enviar">Alterar</button>
			<!-- $_POST["enviar"]="enviar" -->
			<!-- <INPUT type="submit" name="enviar" value="enviar" /> -->
		</FORM>
		
		<br><br><br>
		<A class="link-escuro" href="veiculo.php?fun=listar"> Voltar </A>
	</BODY>
</HTML>