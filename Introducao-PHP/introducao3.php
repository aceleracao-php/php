<html>
    <head>
        <title>Form</title>
    </head>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo"> 
        <input type="submit" value="enviar">
    </form>
</html>
<?php

//criação de diretorios
//chmod -R 777 /var/www/html/

$dir = "img";
$scan = NULL;

if(!is_dir($dir)){
    //cria diretorio
    /*mkdir($dir);
    echo 'Criou diretorio';*/

}else{
    //remover diretorio
    /*rmdir($dir);
    echo 'removeu!';*/

    //scaneia o diretorio
    /*$scan = scandir($dir);
    $info = NULL;
    $data = array();*/

    /*foreach($scan as $img){
        $filename = "img/".$img;
        if(in_array($img, array(".", ".."))){
            //continue
        }else{
            $info = pathinfo($img);
            //retorna o tamanho do arquivo
            $info['tamanho'] = filesize($filename);
            $info['data_modificacao'] = date('d/M/Y H:i:s', filemtime($filename));
            array_push($data, $info);
        }
    }*/

    //var_dump(json_encode($data));

    /*$arquivo = fopen("log.a", "a+");
    fwrite($arquivo, date("d/M/Y")."\n");
    fclose($arquivo);*/
    $json = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    $arrayJson = json_decode($json, true);

    $cabecalho = array();

    foreach($arrayJson[0] as $key => $valor){
        array_push($cabecalho, $key);
    }

    $file = fopen("posts.csv", "w+");
    fwrite($file, implode(",", $cabecalho) . "\r\n");

    foreach($arrayJson as $valor){
        $dados = array();
        foreach($valor as $v){
            array_push($dados, $v);
        }
        fwrite($file, implode("," , $dados));
    }
    fclose($file);

    //remover arquivo
    //unlink("../images/user2.jpg");
    
    //unlink("../images/user1.jpg");

    //remover diretorio
    /*if(is_dir("img")){
        if(file_exists("img/user3.jpg")){
            //echo "Esse arquivo existe";
            //unlink("../images/");
        }
    }*/

    /*if(file_exists("posts.csv")){
        $file = fopen("posts.csv" , "r");
        $cabecalho = explode(",", fgets($file));

        while($linha = fgets($file)){
            echo $linha . "<br>";
        }
    }*/
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $file = isset($_FILES['arquivo']) ? $_FILES['arquivo']: NULL;

        if($file['error']){
            echo 'Deu erro';
        }

        $diretorio = "uploads";

        if(!is_dir($diretorio)){
            mkdir($diretorio);
        }

        if(move_uploaded_file($file["tmp_name"], $diretorio."/".$file['name'])){
            echo 'Upload feito com sucesso';            
        }else{
            //throw new Exception("Não foi possivel realizar o upload"); 
            echo 'Error';
        }

    }

    
}




?>