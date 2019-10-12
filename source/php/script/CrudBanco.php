<?php

class CrudBanco{

    private $address = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = '';
    private $port = '3306';

    private $con; // Connection itself
  

    function __construct($dbname){
        
        $this->dbname = $dbname;

        try {
            $this->con = new PDO("mysql:host=".$this->address.";dbname=".$this->dbname."", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->con -> exec ('set names utf8');                                    
               
 
          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }                  
    }

    function __destruct(){
        // mysqli_close($this->con);
        unset($this->con);

    }

    public function create($tipo,$valor,$descricao,$tamanho,$imagem){
        
        try {  

            //Prepara o array;
            $array = array(':tipo' => $tipo,
            ':valor' => $valor,
            ':descricao' => $descricao,
            ':tamanho' => $tamanho,
            ':imagem' => $imagem);

            //Prepara o SQL
            $sql = 'INSERT INTO roupas(tipo,valor,descricao,tamanho,imagem) VALUES(:tipo,:valor,:descricao,:tamanho,:imagem)';

            $create = $this->con -> prepare($sql);
            $create -> execute($array);

          } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }


    }

    public function read(){

        try{

        $read = $this->con -> prepare("SELECT * FROM roupas");
        $read->execute();

        $row = $read->fetch(PDO::FETCH_ASSOC);
        
        return $row;

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return;
        }

    }
    

}
?>