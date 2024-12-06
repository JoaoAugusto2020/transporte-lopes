    <div class="box-login centralizar-div">
        <form action="usuario.php?fun=cadastrar" method="POST" enctype="multipart/form-data" class="form-login">
            <h1>Cadastrar</h1>

            <input class="input-simples" type="text" name="nome" id="nome" placeholder="Nome"/> <br>
            <input class="input-simples" type="email" name="email" id="email" placeholder="E-mail"/> <br>
            <input class="input-simples" type="text" name="cpf" id="cpf" placeholder="CPF"/> <br>
            <div class="input-box input-box-simples">
                <input class="input-simples" type="password" name="senha" id="senha" placeholder="Senha"/>
                <img src="visao/imagens/icones/olho-aberto.png" id="olho">
            </div> <br>
            <br>

            <button class="btn-escuro" type="submit" name="enviar" value="enviar">Cadastrar</button> <br><br>
            
            <!-- <p id="errorMessage" style="color: red; display: none">Usuário ou senha inválidos</p> </p> -->
            <p>Já possui uma conta? <br> <a href="index.php?fun=entrar" class="link-escuro">Entre aqui</a></p>
        </form>  
    </div>

