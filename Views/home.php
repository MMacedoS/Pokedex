


  <div class="row">
  <?php

// craindo um caminho padrão
 $path="http://localhost/pokedex/";

//obtendo a quantidade de dados no array
 $qtde=count($this->nomePokemon);
 ///listando os dados do array 
for($i=0;$i<$qtde;$i++){
 
?>
<!-- card  -->
      <div  class="col-2">
          <article class="recent-works-card">
            <!-- imagem do Pokemon -->
              <a class="img-link" onclick="spinner();" href="<?=$path?>pokemons/pokemon/<?=$this->nomePokemon[$i]->id?>"><img src="<?=$this->nomePokemon[$i]->sprites->other->dream_world->front_default?>" alt="<?=$this->nomePokemon[$i]->name?>" width="440px"></a>
              <div class="ul-icons">
                  <i class="fab fa-github"></i>
              </div>
              <p class="recent-works-card-title"><?=$this->nomePokemon[$i]->name?></p>
              <p class="recent-works-card-content"> <?php $tipos=count($this->nomePokemon[$i]->types);///pegando a quantidade do array tipos e listando
                          for($t=0;$t<$tipos;$t++){
                            if($t==0)///if para separar os tipos
                            {
                              echo $this->nomePokemon[$i]->types[$t]->type->name;  
                            }else{
                            echo " | ".$this->nomePokemon[$i]->types[$t]->type->name;
                            }
                          }
                ?></p>
            </article>
          </div>

          <?php 
        }///fim for ?>

               
  </div>
  

  


