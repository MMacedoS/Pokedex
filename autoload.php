<?php

// função para capturar o nome das classes que forem instanciadas 
spl_autoload_register(function($nome_instacia){
    // echo $nome_instacia;
        // verificando se o arquivo existe fazendo a requisicao dele
    if(file_exists('Controllers/'.$nome_instacia.'.php'))    
    {
        
        require 'Controllers/'.$nome_instacia.'.php';

    }elseif(file_exists('Models/'.$nome_instacia.'.php'))
    {
        require 'Models/'.$nome_instacia.'.php';
    }
    elseif(file_exists('Rota/'.$nome_instacia.'.php'))
    {
        require 'Rota/'.$nome_instacia.'.php';

    }
});