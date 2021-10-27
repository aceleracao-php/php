<?php
    //Esssa função demonstra as caracteristicas do ambiente
    //phpinfo();

    //variaveis
    echo "<pre>Variaveis</pre>";
    echo "==================================<br>";
    $nome = "Jonatan";
    $agencia = "Agencia Digital";

    $produto1 = 202110;
    $produto_2 = "Java";
    //comando print para fazer a saída da variável
    print("<br>");
    
    echo "<pre>Concatenar</pre>";
    echo "==================================<br>";
    
    //concatenar
    echo $nome ."<br>"."<br>";
    print($nome);

    echo "<pre>DEBUG</pre>";
    echo "==================================<br>";
    /*debug var_dump mostra informações sobre a variável, 
    como tamanho e tipo*/
    var_dump($agencia);
    echo "<br>";
    var_dump($produto1);
    echo "<br>";
    //================ var_export mostra uma saída válida
    var_export($nome);

    //print_r
    echo "<br>PRINT_R<br>";
    print_r($produto_2);

    //Exemplificação do padrão Camel Case

    $nomeCompleto = "Jonatan Santos";
    
    print("<br>");
    
    echo "<pre>Introdução aos Arrays</pre>";
    echo "==================================<br>";
    //array
    $cursos = array("dev" => "PHP", "funcao" => "Design Patterns");
    
    echo "<br>";
    var_dump($cursos);
    echo "<br>";
    var_export($cursos);

    $pessoas = array('pessoa1' => 'joao', 'pessoa2' => 'pedro');

    $resultadoFinal = array_merge($cursos, $pessoas);
    echo "<br>merge<br>";
    var_dump($resultadoFinal);
    
    print("<br>");
    
    echo "<pre>Estrutura Condicional</pre>";
    echo "==================================<br>";
    //Condicionais

    if($nome){
        echo 'O nome é Pedro';
    }else{
        echo 'O nome não é Pedro';
    }
    print("<br>");

    //1ª forma
    
    if($nome):
        echo 'é verdadeiro';
    elseif($nome != 'Jonatan'):
        echo 'É verdadeiro e o nome não é Jonatan';
    else:
        echo 'é falso';
    endif;

    //2ª forma
    
    if($nome){
        echo "é verdadeiro";
    }elseif($nome != "Jonatan"){
        echo 'É verdadeiro e o nome não é Jonatan';
    }else{
        echo "é false";
    }
    
    $cursos = array("dev" => "PHP", "funcao" => "Design Patterns");
    //laço de repetição
    foreach($cursos as $c => $curso){
       //foreach
    }

    //condicional com repetição
    for($indice = 10; $indice > 0; $indice--){
        if($indice === 2){
            echo 'Ta chegando perto do fim';
        }
    }
    $num = 2020;

    $name = 'PHP';
    
    switch($name):
        case 'PHP':
            echo 'é PHP';
            break;
        case 'Java':
            echo 'é JAVA';
            break;
    
    endswitch;

    //while
    $i = 1;
    while($i < 20){
        echo $i;
        $i++;
        
        echo "<br>";
    }

?>