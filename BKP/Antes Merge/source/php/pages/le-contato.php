<html>
    <body>
    <table border=10>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Mensagem</th>
        </tr>

        <?php

            $connect = mysqli_connect("127.0.0.1","root","","banco_minhaloja","3306");

            if($connect){
            
                $sql = "SELECT * FROM contato";
                $query = mysqli_query($connect,$sql);

                while($coluna = mysqli_fetch_array($query,MYSQLI_NUM)){

                    echo "<tr>
                        <td>$coluna[0]</td>
                        <td>$coluna[1]</td>
                        <td>$coluna[2]</td>
                        <td>$coluna[3]</td>";

                }
            
            }
        ?>

    </table>
    </body>
</html>