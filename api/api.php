<?php

class Api{   

    const API ="https://pokeapi.co/api/v2/pokemon"; ///url padrão da api

    public function getAll($offset)///busca os pokemons por  offset com limite de 9 
    {
     
            $url=self::API."?offset=".$offset."&limit=9";  ///passando a url da api com offset e limit
            $ch = curl_init($url);  //passando a url para o curl consumir
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);/// evitando que o curl passe o arquivo em texto
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons->results;
    }

    public function getDados($id)/// metodo busca dados de um pokemon atraves do id
    {
        $url=self::API."/".$id;///passando a url da api com id
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }

    public function getSpecies($id)///metodo busca species do pokemon, este metodo criado para pegar as evoluçoes de cada pokemon
    {
        $url=self::API."-species/".$id;///passando a url da api com parametro species e id da species
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }

    public function getUrl($url)///metodo de busca por url//busca os dados de evoçução e especies e id tambem 
    {
            $ch = curl_init($url); ///passando a url do pokemons
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }
}


?>