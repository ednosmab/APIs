<?php
require_once "app/config/config.php";
class HgAPI
{
    private $key;
    private $url = null;
    private $error = null;
    public $response = null;

    public function __construct()
    {
        $this->key = HG_KEY ?? null;
        
    }
    
    public function getAll()
    {
        if($this->key){
            $this->url = HG_API.HG_COTACAO.$this->key;
            if($this->url){
                $this->response = file_get_contents($this->url);
                if(!empty($this->response) > 0){
                    $this->response = json_decode($this->response, true);
                    $respCotacao = $this->response;
                }
            }else{
                $respCotacao = "URL não informado";
            }
        }
        return $respCotacao;
    }

    public function currencies()
    {
        // $dolar = $response['results']['currencies']['USD']['buy'];
        // $variationD = $response['results']['currencies']['USD']['variation'];
        // $euro = $response['results']['currencies']['EUR']['buy'];
        // $variationE = $response['results']['currencies']['EUR']['variation'];
        // $retorno = [
        //     $dolar, $variationD,
        //     $euro, $variationE
        // ];
    }
}