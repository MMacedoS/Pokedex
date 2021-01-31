<?php

class Rota{
    
    ///construtor da classe//para executar automaticamente a função run();
    public function __construct()
    {
        $this->run();
    }
    
    public function run()
    {
        
        ///pegando paramentros da url , pag definido no htacces e verificando se existe alguma informação ;
        if(isset($_GET['pag']))
        {
            $url=$_GET['pag'];//atribuindo as informações contida no get[pag] para variavel url
            
        }

///verificando se esta vazia e validando os paramentros passados atraves da url
        if(!empty($url))
        {
            //quebrando a string e transfomando em array
            $url=explode('/',$url);
            $controle= $url[0].'controller';

            //removendo a primeira posição[0] e realinhando o array 
            array_shift($url);

            //verificando se existe algum dado na posicao
            if(isset($url[0]) && !empty($url[0]))
                {
                    $metodo=$url[0];
                    array_shift($url); //removendo a primeira posição[0] e realinhando o array 
                }else{
                      $metodo='index';
                      }
            if(count($url)>0)
                {
                    $parametro=$url;
                }
            
        }else
        {///caso  não exista dados na url 
            $controle='homeController';
            $metodo='index';
            $parametro=array('');
            
        }

    $caminho="pokedex/Controllers/".$controle.'.php';///recebe o caminho para acessar os arquivos 

    if(!file_exists($caminho) && !method_exists($controle,$metodo))///verificando se o arquivo e o metodo não existe!!
    {
        $controle='homeController';
        $metodo='index';
        $parametro=array('');
    }

    $control= new $controle; ///instanciando uma classe com o dado que esta dentro da variavel controle
    
    
    // utilizando esta função para chamar a classse e seu metodo, passando comoo array o objeto e o nome do metodo!! passando tambem o paramento
    call_user_func_array(array($control,$metodo), $parametro);

}
}

?>