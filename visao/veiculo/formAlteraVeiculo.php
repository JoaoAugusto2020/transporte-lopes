		<H1> Alterar Veiculo </H1>
		
		<FORM action="veiculo.php?fun=alterar" method="POST">
		<!-- POST -> envio de informações escondidas -->
			
			<INPUT type="hidden" name="id" <?php echo("value='" .$v->getIdveiculo(). "'"); ?> />

			<INPUT type="text" id="nome" name="nome" placeholder="Nome do veículo" required <?php echo("value='" .$v->getNome(). "'"); ?> /> <br />
			
			<LABEL for="tipo"> Tipo: </LABEL> 
			<input type="radio" name="tipo" id="tipo" value="Prancha" required <?php $tipo = $v->getTipo(); if($tipo==="Prancha") echo "checked"?>> Prancha
			<input type="radio" name="tipo" id="tipo" value="Caçamba" required <?php $tipo = $v->getTipo(); if($tipo==="Caçamba") echo "checked"?>> Caçamba
				
			
			<LABEL for="capacidade"> Capacidade: </LABEL> 
			<INPUT type="text" id="capacidade" name="capacidade" required <?php echo "value='" .$v->getCapacidade(). "'"; ?>/> <br />

			<LABEL for="tipo"> Marca: </LABEL> 
			<INPUT type="text" id="marca" name="marca" required <?php echo("value='". $v->getMarca(). "'"); ?>/> <br />

			<LABEL for="locacao"> Locação: </LABEL> 
			<input type="radio" name="locacao" id="locacao" value="Disponível" required <?php $locacao = $v->getLocacao(); if($locacao==="Disponível")echo "checked"?>> Disponível
			<input type="radio" name="locacao" id="locacao" value="Alocado" required <?php $locacao = $v->getLocacao(); if($locacao==="Alocado")echo "checked"?>> Alocado
			
			<INPUT type="submit" name="enviar" value="enviar" />
			<!-- $_POST["enviar"]="enviar" -->
			
		</FORM>
		
	</BODY>

</HTML>