<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    h1{
        color: black;
    }
    img.seta {
    position: absolute;
}


</style>

<center>
<div class="w3-card-4 w3-margin" style="width:80%">
  <div class="w3-display-container w3-text-white">
  <h1><?=$this->Pokemon->name?></h1>
    <img src="<?=$this->Pokemon->sprites->other->dream_world->front_default?>" alt="Lights" style="width:250px">
    <div class="w3-xlarge w3-display-bottomleft w3-padding"></div>
  </div>
  <div class="w3-row">
  <p></p>
    <div class="w3-third w3-center">
      <h3>Altura</h3>
      <h2><?=$this->Pokemon->height?></h2>
    </div>
    <div class="w3-third w3-center">
      <h3>Peso</h3>
     <h2><?=$this->Pokemon->weight?></h2>
    </div>
   
    <div class="w3-third w3-center w3-margin-bottom">
      <h3>Experiencia</h3>
      <h2><?=$this->Pokemon->base_experience?></h2>
    </div>
      
  </div>
<hr>

  <div class="w3-row">
  <h2>Estatística</h2>
  <?php  $tipos=count($this->Pokemon->stats);
                          for($t=0;$t<$tipos;$t++){
                            ?>
                            
                            <div class="w3-third w3-center">
                            <h3><?=$this->Pokemon->stats[$t]->stat->name?></h3>
                            <h2><?=$this->Pokemon->stats[$t]->base_stat?></h2>
                            </div>
                            <?php
                          }
                ?>

 
    
      
  </div>

  <hr>

  
  <div class="w3-row">
    <h2>Evolução</h2>
    
    <div class="w3-third w3-center">
    <h3><?=$this->evolucao->name?></h3>
     <a onclick="spinner();" href="<?=$this->evolucao->id?>">
        <img src="<?=$this->evolucao->sprites->other->dream_world->front_default?>" alt="cloud" style="width:80px">
                        <img class="seta" src="http://dedmd.com.br/validacao/2019_1/SOCIEDADE%20BRASILEIRA%20E%20CIDADANIA/Unidade%201/VIDEOSCRIBE/ILUSTRA%C3%87%C3%95ES/seta.svg" style="{margin: 0 0 0 13px}" width="100" alt="">
        </a>
    </div>
    
    <div class="w3-third w3-center">
      <h3><?=$this->evolucao2->name?></h3>
     <a onclick="spinner();" href="<?=$this->evolucao2->id?>">         
      <img src="<?=$this->evolucao2->sprites->other->dream_world->front_default?>" alt="cloud" style="width:80px">
      <?php if(!empty($this->evolucao3)) {?>
      <img class="seta" src="http://dedmd.com.br/validacao/2019_1/SOCIEDADE%20BRASILEIRA%20E%20CIDADANIA/Unidade%201/VIDEOSCRIBE/ILUSTRA%C3%87%C3%95ES/seta.svg" style="{margin: 0 0 0 13px}" width="100" alt="">
     
         </a>   
    </div>
    
    <div class="w3-third w3-center w3-margin-bottom">
    
    <h3><?=$this->evolucao3->name?></h3>
     <a  onclick="spinner();" href="<?=$this->evolucao3->id?>"> 
     
      <img src="<?=$this->evolucao3->sprites->other->dream_world->front_default?>" alt="clouds" style="width:80px">
  
     </a>   
    </div>
    <?php }else{ ?>
      </a>   
    </div>
    <?php }?>
  </div>
</div>
</center>