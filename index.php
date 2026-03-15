
<?php
include"env.php";
$rotas = array(
    [
        "path"=>"/",
        "file" => "home.php",
        "Title" => "Principal"
    ],[
        "path"=>"/Institucional",
        "file" => "institucional.php",
        "Title" => "Institucional"
        
    ]
);

$uri = explode('?', $_SERVER['REQUEST_URI'])[0];

//VIEW
$paths = array_column($rotas,"path");
$index = array_search($uri,$paths);
$DIR = $_SERVER['DOCUMENT_ROOT'];
$SUBMIT = "../../../src/Http/submits/";

if($index !== false) {
    $Pagina = $rotas[$index]['file'];
    $Path = $rotas[$index]['Title'];
    include "views/components/header.php";
    include 'views/'.$Pagina;

    include "views/components/footer.php";
    
}else{
    echo "Erro 404";
}