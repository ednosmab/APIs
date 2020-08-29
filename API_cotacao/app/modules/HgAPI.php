<?php
require_once "app/config/config.php";
class HgAPI
{
    private $key;
    private $url = null;
    private $error = null;
    private $respCotacao = null;

    public function __construct()
    {
        $this->key = HG_KEY ?? null;
        
    }
    
    public function getAll()
    {
        if($this->key){
            $this->url = HG_API.HG_COTACAO.$this->key;
            if($this->url){
                $response = file_get_contents($this->url);
                if(!empty($response) > 0){
                    $response = json_decode($response, true);
                    $dolar = $response['results']['currencies']['USD']['buy'];
                    $variationD = $response['results']['currencies']['USD']['variation'];
                    $euro = $response['results']['currencies']['EUR']['buy'];
                    $variationE = $response['results']['currencies']['EUR']['variation'];
                    $retorno = [
                        $dolar, $variationD,
                        $euro, $variationE
                    ];
                    $this->respCotacao = $retorno;
                }
            }else{
                $this->respCotacao = "URL não informado";
            }
        }
        return $this->respCotacao;
    }
}