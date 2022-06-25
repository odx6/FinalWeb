<?php 
class Database{


    private $hostname ="localhost";
    private $database= "alebrijes";
    private $username="root";
    private $password="@12345678";
    private $charset="utf8";
    private $port=3307;


    function conectar(){
try{
        $conexion="mysql:host=".$this->hostname.";port=".$this->port."; dbname=".$this->database."; charset=".$this->charset;
        $options=[

            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES=>false
        ];
    $pdo = new PDO($conexion,$this->username,$this->password,$options);
 return $pdo;
}catch(PDOException $e){
echo 'error conexion'.$e->getMessage();
exit;

}
    }
}



?>