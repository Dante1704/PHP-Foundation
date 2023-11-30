<!-- si el documento tiene una unica clase, por convencion va nombrado con mayuscula al principio Database.php -->

<?php

// connect to the database, and execute a query.
class Database {

    public $connection; //aca se guarda el string connection ni bien se instancia la clase gracias al constructor
    public function __construct() {

        /* string connection to the db */
        $dsn = "mysql:host=localhost;port=3306;dbname=demo5;user=root;charset=utf8mb4";
        /* nueva conexion a la db */
        $this->connection = new PDO($dsn);
    } //esta funcion se ejecuta ni bien se crea la instancia de esta clase
   
    public function query($query) {
        
        /* preparacion y ejecucion de la query */
        $statement = $this->connection->prepare($query);
        $statement->execute();
        /*PDO::FETCH_ASSOC para que me muestre la respuesta en forma de assoc array*/
        return $statement;
    }
};