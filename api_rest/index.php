<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <title>Palicação API REST</title>
</head>
<body>
    <header>
        <p>
            Página Da Filial
        </p>
    </header>
    <main>
        <p id="contain">
            <p id='content'>
                Os valores abaixo estão vindo de uma classe de nome Retorno que recebe os valores informados por um 
                Json<br><br>
                <span style="color: darkblue;">Todas as classes que foram utilizadas nesse projeto estão localizadas em: api/v1/classes/</span><br><br><br>
            </p>
            <?php
                require_once 'api/v1/classes/Retorno.php';
                $dados = new Retorno;
                $dados->exibirValores();
            ?>
        </p>
    </main>
</body>
</html>