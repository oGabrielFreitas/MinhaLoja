<?php

    include_once('source/php/script/CrudBanco.php');

    include("source/html/navbar.html");


    $CRUD = new CrudBanco('banco_minhaloja');

    $data = $CRUD->read();

    

?>

<html>
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

    <!--
    <div class="row">
        <div class="col-1">
            ID
        </div>
        <div class="col-1">
            NOME
        </div>
        <div class="col-1">
            VALOR
        </div>
        <div class="col-1">
            DESCRIÇÃO
        </div>
        <div class="col-1">
            TAMANHO
        </div>
        <div class="col-1">
            FOTO
        </div>
    </div> -->

    <div class="row">
        <div class="col">
            <table border=true>
                <thead class="thead-painel">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Tamanho</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody class="tbody-painel">
                    <?php foreach($data as $datas):?>
                    <tr>
                        <td><?=$datas['id_roupa']?></td>
                        <td><?=$datas['tipo']?></td>
                        <td><?=$datas['valor']?></td>
                        <td><?=utf8_encode($datas['descricao'])?></td>
                        <td><?=$datas['tamanho']?></td>
                        <td><img src="<?=$datas['imagem']?>" alt="" class="foto-painel"></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>

            </table>
        </div>
    </div>
    

</html>
