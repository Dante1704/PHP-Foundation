<?php

namespace Core;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolver /* $resolver es la factory function */)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            //igual a throw new error en js. Pero este caso, es un caso excepcional
            throw new \Exception("no matching binding found for {$key}");
        }
        $resolver = $this->bindings[$key];
        //otra manera de devolver el resultado de ejecutar la funcion
        return call_user_func($resolver); //Call the callback given by the first parameter
    }
}
