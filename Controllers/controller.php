<?php
   //requisitando o arquivo

class Controller
{
    public $Pokemon;
    public $nomePokemon;
    public $evolucao;
    public $evolucao2;
    public $evolucao3;

    public function chamarViewIndex($nomeView,$dados=array(),$allPokemons=array())///metodo recebe o nome da view e os dados vinda das classes que as herdam e chama a view principal passando os parametros recebidos 
    {
        $this->nomePokemon=$allPokemons;

        require "Views/index.php";

    }

    public function CarregarPokemon($nomeView,$dados=array(),$pok1=array(),$pok2=array(),$pok3=array())
    {///metodo recebe os dados do pokemon e o nome da view que exibira os dados trazidos 
       
        $this->Pokemon=$dados;
        $this->evolucao=$pok1;
        $this->evolucao2=$pok2;
        $this->evolucao3=$pok3;        
        
        require 'Views/index.php';
    }

    public function CarregarViewNaIndex($nomeView,$dados=array())
    {
        extract($dados);
        require 'Views/'.$nomeView.'.php';
    }
}
?>