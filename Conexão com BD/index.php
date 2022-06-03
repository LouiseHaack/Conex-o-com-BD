<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="./css/style.css" rel="stylesheet">
    <title>Conexão com MySQL</title>
</head>
<body>
<?php
//$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "SENHA");
function conexao(){
    $mysqli_connection = new MySQLi('localhost', 'root', '', 'test');
    if($mysqli_connection->connect_error){
        echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
    }else{
        echo "Conectado!"; 
        echo "<br>";
    }
    return $mysqli_connection;
}
$con=conexao();
$con->set_charset("utf8");
 
$resultado	= $con->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA");
while ($row = $resultado->fetch_object()) {
    $db = $row->SCHEMA_NAME;
    echo $db."<br>";
}

?>   
</body>
</html>