<!-- si el documento tiene una unica clase, por convencion va nombrado con mayuscula al principio Database.php -->

<?php

// connect to the database, and execute a query.
class Database {

    public $connection; //aca se guarda el string connection ni bien se instancia la clase gracias al constructor

    //este metodo se ejecuta ni bien se crea la instancia de esta clase
    public function __construct($config, $username = 'root', $password = '') {

        /* el proposito de http_build_query es hacer query strings */
        $dsn= 'mysql:' . http_build_query($config, '', ';'); //resultado : mysql:host=localhost;port=3306;dbname=demo5;...
        
        /* nueva conexion a la db */ /*PDO::FETCH_ASSOC para que me muestre la respuesta en forma de assoc array*/
        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); 
    } 
   
    public function query($query, $params = []) { //$params van para ser bindeados a la query, si los hay.
        
        /* preparacion y ejecucion de la query */
        $statement = $this->connection->prepare($query);

        //aca puedo bindear los parametros dinamicos de una consulta sql para evitar inyeccion de codigo
        $statement->execute($params); 
        
        return $statement;
    }
};