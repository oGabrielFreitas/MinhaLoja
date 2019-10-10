<?php 

    include("source/html/navbar.html");

    // include("../../../temp.html");

    $connect = mysqli_connect("127.0.0.1","root","","banco_minhaloja","3306");

    if($connect){

        $sql = "SELECT * FROM roupas WHERE id_roupa = 8";
        $query = mysqli_query($connect,$sql);

        
        $coluna = mysqli_fetch_array($query,MYSQLI_NUM);

        // while(mysqli_fetch_array($query,1)){

        //     echo MYSQLI_NUM."/";

        // }


    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Roupa</title>
    <meta name="description" content="aa">

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Electrolize|Oswald|Russo+One&display=swap" rel="stylesheet">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="source/css/style.css">
    <link rel="stylesheet" type="text/css" href="source/css/animate.css">

</head>

<body>
    
    <!-- Coluna para foto -->
    <div class="row">
        
        <div class="col-md-1"></div>

        <div class="col-md-5 fotoProdutoCol">
            
            <img src="<?=$coluna[5]?>" alt="" class="fotoProdutoPage">
            
        </div>
        
        <div class="col-md-5">
            <p class="titulo-produto"><?=$coluna[1]?></p>
            <p class="precoProdutoPage">R$ <?=$coluna[2]?></p>
            <p class="descricaoProdutoPage"><?=utf8_encode($coluna[3])?></p>
            <p class="tamanhoProdutoPage">Tamanho: <?=$coluna[4]?></p>

            <div class="col" style="text-align: center;	">
                <form action="clica-compra-produto.php" method="post" >
                    <input type="button" class="botaoComprarPage" value="COMPRAR">
                </form>                
            </div>
        </div>

        <div class="col-md-1"></div>
    </div>



    <!-- ------------ JAVA SCRIPT -------------- -->

    <!-- Referenciando e Iniciando WOW -->
    <script src="source/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- JQuery e bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>