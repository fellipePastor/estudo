<?php

namespace fellipe\estudo; //nome do pacote

class search{ //classe mesmo nome do arquivo sempre 
    private $url= "https://viacep.com.br/ws/"; // crio uma variável obtendo a url da api


    public function getEnderecoZipCode(string $zipcode): array{ // crio a função para obter o zipcode do usuario,faço um função array para retorno
        $zipcode = preg_replace('/[^0-9]/im', '' , $zipcode); // tiro possiveis erros de digitação do usuario com a funcão preg_replace
        $get = file_get_contents($this->url . $zipcode . "/json"); // faço um requisito da url inserindo o zipcode e puxando o formato json
        return(array) json_decode($get);
    }
}