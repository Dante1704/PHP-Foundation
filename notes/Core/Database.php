<?php

namespace Core;

use PDO; /* lo tengo que declarar asi para que funciones,
 sino lo busca en este namespace porque asume \Core\PDO */

class Database
{

    public $connection;

    public $statement; //aca bindeo el PDO con esta variable, lo que me permite utilizarlo en cualquer lugar que necesito

    public function __construct($config, $username = 'root', $password = '')
    {

        $dsn = 'mysql:' . http_build_query($config, '', ';'); //resultado : mysql:host=localhost;port=3306;dbname=demo5;...

        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this; //retorno el objeto en si
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    /* metodo para buscar una row de una tabla cualquiera, antes solo estaba preparado para buscar una nota */
    public function findOrFail()
    {
        $result = $this->find();
        //aca tengo en cuenta si me trajo realmente una nota o no
        if (!$result) {
            abort(); //por defecto es el 404 y en este caso esta bien
        }

        return $result;
    }
};
