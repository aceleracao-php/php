<?php
//capturar
/*try{
    //lançar execeção
    throw new Exception("Caiu na execeção, o arquivo não existe", 500);
}catch(Exception $e){
    echo json_encode(array(
        "mensagem_de_erro" => $e->getMessage(),
        "linha_do_erro" => $e->getLine(),
        "arquivo" => $e->getFile(),
        "code" => $e->getCode()
    ));
}

function verificaUsuario($id){
    if(!$id){
        throw new Exception("Esse ID é inválido", 20);
    }

    echo ucfirst($id)."<br>";
}

try{
    verificaUsuario("589");
    verificaUsuario("");
}catch(Exception $error){
    echo $error->getMessage(). "COD ERROR: ". $error->getCode();
}finally{
    echo '<br> O try catch foi todo executado';
}

error_reporting(E_ALL & ~E_WARNING);

$idade = $_GET['idade'];
echo $idade;
*/

function manipula_erros($code, $message, $file, $line){
    echo json_encode(array(
        "mensagem_de_erro" => $message,
        "linha_do_erro" => $line,
        "arquivo" => $file,
        "code" => $code
    ));
}

set_error_handler("manipula_erros");

echo 100/0;

?>