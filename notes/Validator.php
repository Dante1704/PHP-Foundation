<?php

/* esta es un clase validadora */
/* clase no tiene un estado, no se hacen referencias a this, solo tiene metodos que se invocan directamente,
y estos metodos son puros. Por lo tanto, los puedo declarar como static */
/* declararlos como static me permite evitar instanciarlos y utilizarlos directamente */
class Validator {

    /* este metodo me valida que el textarea no este vacio ni este hecho solo de espacios en blanco */
    public static function string($value) {
        return strlen(trim($value)) === 0; //trim funciona igual que en js
    }

    //validacion de que cantidad maxima de caracteres
    public static function maxStringLength ($value) {
        return strlen($_POST['body']) > 500;
    }
}