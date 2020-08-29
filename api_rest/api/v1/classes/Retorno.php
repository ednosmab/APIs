<?php

    class Retorno
    {
        public function exibirValores()
        {
            $url = 'http://localhost/api_rest/api/v1';
        
            $classe = 'estoque';
        
            $metodo = 'mostrar';
        
            $montar = $url.'/'.$classe.'/'.$metodo;
        
            $retorno = file_get_contents($montar);
        
            $retorno = json_decode($retorno, 1);

            echo "<p>Status: ".$retorno['status']."</p>";
			echo "Itens: <br>";
			for($count = 0; $count <= count($retorno['dados'])-1; $count++){
				foreach($retorno['dados'][$count] as $valor => $key){
					if($valor != 'id'){
						echo ucfirst($valor).": ".$key."<br>";	
					}	
				}	
				echo "<br>";
			}
			
        }

    }