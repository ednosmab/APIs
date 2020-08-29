<?php
    require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Evolução dos Pokemons</h1>
    </div>
    <div class="container">
        <?php foreach ($pokemons->pokemon as $pokemon):?>
            <?php if(isset($pokemon->next_evolution)):?>
                <div class="filha">
                    <div>
                        <img src="<?=$pokemon->img?>" alt="">
                    </div>
                    <div class="texto">
                        <div class="space">
                            <strong><?= $pokemon->name;?></strong>
                        </div>
                        <?php if(count($pokemon->next_evolution) > 0):?>
                        <p>Próxima evolução: </p>
                        <?php foreach($pokemon->next_evolution as $proxima_evolucao):?>
                        ( <?= $proxima_evolucao->name;?> )
                        <?php endforeach; endif; ?>
                    </div>
                </div>
                
            <?php else:?>
                <div class="filha">
                    <div>
                        <img src="<?=$pokemon->img?>" alt="">
                    </div>
                    <div class="texto">
                        <div class="space">
                            <span class="texto_dois">
                                <strong><?= $pokemon->name;?></strong>
                            </span>
                        </div>
                        <p>Evolução Completa</p>
                    </div>
                </div>
            <?php endif;?>

        <?php endforeach;?>
    </div>
</body>
</html>
