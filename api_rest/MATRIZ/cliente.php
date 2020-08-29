<?php

    $url = 'http://localhost/api_rest/api/v1';

    $classe = 'estoque';

    $metodo = 'mostrar';

    $montar = $url.'/'.$classe.'/'.$metodo;

    $retorno = file_get_contents($montar);

    $retorno = json_decode($retorno, 1);
    print_r($retorno);
    echo "<p> Status: ".$retorno['status']."</p>";
    echo "<p> Dados Recebidos: ".$retorno['dados']."</p>";