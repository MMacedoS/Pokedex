<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv=" X-UA-Compatible " content=" IE = edge , chrome = 1 " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemóns</title>

    <link rel="stylesheet" href="http://localhost/pokedex/Views/estilo/estilo.css" type="text/css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>


    <div class="container">
        <h3 onclick="inicio();">
            Pokédex</h3>
    </div>
   

    <section class="main-content-section">
    <div id="loader" class="loader"></div>

    <div  style="display:none" id="tudo_page">
        <?php
    $this->CarregarViewNaIndex($nomeView);
    $dados=@$this->nomePokemon[8]->id;
?>
</div>
    </section>


</body>

<footer>
<section class="hero is-info is-small">
      <div class="hero-body">
        <div class="container has-text-centered">
         <div class="row">
            <input type="button" class="button-default" id="carregar" value="Proximos" onclick="carregar()">
         </div>
         
        </div>
      </div>
    </section>
</footer>

</html>

<script>
function carregar() {
 
  // $("#tudo_page").toggle("fast");
  spinner();  
    window.location.href = "/pokedex/home/index/<?=$dados+9?>";
}

function spinner(){
  $(".loader").fadeIn("slow"); 
}

function inicio() {
  spinner();
    window.location.href = "/pokedex/";
}

///carregamento da pagina sppinner
jQuery(window).load(function () {
      $(".loader").delay(100).fadeOut("slow"); //retire o delay quando for copiar!
    $("#tudo_page").toggle("fast");
});
</script>