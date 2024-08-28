<?php 

$db_config = array(
    'dbhost' => 'localhost',
    'dbname' => 'blog',
    'dbuser' => 'root',
    'dbpassword' => '',
    'dbcharset' => 'utf8mb4',
);

try{


    $dsn = "mysql:host=" . $db_config['dbhost'] . ";dbname=" . $db_config['dbname'] . ";charset=" . $db_config['dbcharset'];
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn, $db_config['dbuser'], $db_config['dbpassword'], $option);

    echo "conexion exitosa.";

} catch (PDOException $e){
    echo "Error de conexión: ". $e->getMessage();
}