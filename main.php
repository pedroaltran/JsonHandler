<?php

echo '<pre>';

$dadosJson = file_get_contents('dados.json');
$decodeJson = json_decode($dadosJson);

foreach($decodeJson->livros as $livro){
    echo '<br>'.'<br>';
    echo 'Título: '.$livro->Título.'<br>';
    echo 'Autor: '.$livro->Autor.'<br>';
    echo 'Editora: '.$livro->Editora.'<br>';
}

?>