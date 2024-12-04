<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visao/styles/estilo.css">
    <link rel="stylesheet" href="visao/styles/index.css" />
    <link rel="stylesheet" href="visao/styles/login.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="visao/imagens/logotipos/logotipo-branco.png">
    <title>Transporte Lopes</title>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <nav>
            <a href="index.php"><img src="visao/imagens/logotipos/logotipo-branco.png" alt="logotipo" id="logotipo"></a>
            
            <div>
                <a href="veiculo.php?fun=listar" class="nav-link">Catálogo</a>
                <a href="veiculo.php?fun=listarDisponiveis" class="nav-link">Alugar Veículo</a>
                <a href="index.php?fun=sobre" class="nav-link">Sobre Nós</a>
                <a href="index.php?fun=administrativo" class="nav-link">Administrativo</a>
            </div>
    
            <div class="autenticar">
                <a href="usuario.php?fun=cadastrar"><button type="button" class="registrar">Registrar</button></a>
                <a href="index.php?fun=entrar"><button type="button" class="entrar">Entrar</button></a>
            </div>
        </nav>
    </header>

    <!-- Corpo -->
    <div id="corpo">
        