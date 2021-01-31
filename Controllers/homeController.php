

<?php


class homeController extends Controller{

    ///metodos 
    public function index($parametro)
    {
        $Pokemons=array();///array para receber os registros da model

        $modelPoke=new PokemonsModel();///instaciando a classe PokemonsModel

    //acessando uma função contida na classe PokemonsModel para buscar os pokemons atraves paramentro offset
    // passando  como parametro 0 
    
        $dados=$modelPoke->BuscaPokemons($parametro); //  inserindo os dados retornados do metodo para o array dados!!

        // $pkCount = (is_array($dados) ? count($dados) : 0);

        // percorrendo o array $dados 
        foreach ($dados as $key => $value) {
            
            /// acessando o metodo contido na Classe model passando como parametro a url de cada pokemom contida no array $dados, trazendo os dados de cada pokemon 
            $pok=$modelPoke->getUrlPokemon($value->url);    
            array_push($Pokemons,$pok); ///adicionando o array $pok contendo os dados de cada Pokemons  no array $Pokemons
            
        }
       
       
        ///carregando o metodo contida na classe Controller, passando o nome da view e os dados
        $this->chamarViewIndex('home',$dados,$Pokemons);

    }

  

    
}
