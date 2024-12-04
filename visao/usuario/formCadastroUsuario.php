<h1>Cadastro de Usuário</h1>

<div id="container">
    <form id="box" action="usuario.php?fun=cadastrar" method="POST" 
    enctype="multipart/form-data">

        <input type="text" name="nome" id="nome" placeholder="Nome completo do Usuário"/>
        <input type="email" name="email" id="email" placeholder="E-mail"/>
        <input type="text" name="cpf" id="cpf" placeholder="CPF"/>
        <input type="password" name="senha" id="senha" placeholder="Senha"/> <img src="visao/imagens/icones/olho-aberto.png" id="olho" width="30px" height="30px">

        <input type="submit" name="enviar" value="enviar" />
        
        <p id="errorMessage" style="color: red; display: none">Usuário ou senha inválidos</p> </p>
        <p>Já possui uma conta? <a href="index.php?fun=entrar" id="link">Entre aqui</a></p>
    </form>  
</div>

