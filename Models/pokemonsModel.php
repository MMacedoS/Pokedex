<?php
 require "./Api/api.php";
    class  PokemonsModel extends Api{


       public function BuscaIdPokemons($id){
            
        $pokemon=$this->getDados($id);///buscando os dados na classe api
        return $pokemon;

        }
        
        public function BuscaPokemons($offset){
            
            $pokemon=$this->getAll($offset);///buscando os dados na classe api
            return $pokemon;
    
            }

        public function getUrlPokemon($url){
            $pokemon=$this->getUrl($url);///buscando os dados na classe api
            return $pokemon;
        }

        public function BuscaSpecies($specie){
            $pokemon=$this->getSpecies($specie);///buscando os dados na classe api
            return $pokemon;
        }
    }
?>