<?php 

    $var = "juan";
    $idade;

    if (isset($var)) {
        echo "está definido ";

    }

    //isset virifica se uma variável foi definida e portanto não é nula ela retorna true se a var existir e tiver um valor diferente de NULL

    if(isset($idade)){
        echo "está definida";
    }else{
        echo "não está definida ";
    }

    // verifica se a variavel foi definida, se o valor é === a zero ou se é vazio ou se é falso
    if(empty($idade)){
        echo " variavel não definida";
    }else{
        echo "variável definida";
    }


?>