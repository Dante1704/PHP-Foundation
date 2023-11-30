<!-- si el documento tiene una unica clase, por convencion va nombrado con mayuscula al principio Database.php -->

<?php

// connect to the database, and execute a query.
class Database {

    public $connection; //aca se guarda el string connection ni bien se instancia la clase gracias al constructor
    public function __construct($config, $username = 'root', $password = '') {

        /* el proposito de http_build_query es hacer query strings */
        $dsn= 'mysql:' . http_build_query($config, '', ';'); //resultado : mysql:host=localhost;port=3306;dbname=demo5;...
        /* nueva conexion a la db */
        $this->connection = new PDO($dsn,$username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); /*PDO::FETCH_ASSOC para que me muestre la respuesta en forma de assoc array*/
    } //esta funcion se ejecuta ni bien se crea la instancia de esta clase
   
    public function query($query) {
        
        /* preparacion y ejecucion de la query */
        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        return $statement;
    }
};