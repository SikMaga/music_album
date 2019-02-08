<?php

class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=album_test","root","");
        return $link;

    }

}
