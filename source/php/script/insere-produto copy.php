<?php

    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];
    $tamanho = $_POST['tamanho'];
    // $imagem = $_POST['caminho-imagem'];

    $connection = mysqli_connect("127.0.0.1","root","","banco_minhaloja","3306");

    $caminho_imagem = "source/img/".$_FILES['foto_produto']['name'];

    echo $caminho_imagem;

    if($connection){

        if(move_uploaded_file($_FILES['foto_produto']['tmp_name'],"../../../".$caminho_imagem)){

            $sql = "INSERT INTO roupas(tipo,valor,descricao,tamanho,imagem) VALUES ('$tipo','$valor','$descricao','$tamanho','$caminho_imagem')";
    
            $query = mysqli_query($connection,$sql);
    
            echo "registrou";
        }
        else{
            echo "deu merda";
        }
    }

    mysqli_close($connection);
   
    echo "saiu";
?>