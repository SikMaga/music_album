<?php
require_once "conexion.php";

class Datos extends Conexion{

    #REGISTRO DE ALBUM
    #-------------------------------------
    public static function registroAlbumModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (TituloAlbum, Activo, Banda, NumeroDePistas, ContenidoAdicional) 
                VALUES (:TituloAlbum,:Activo,:Banda,:NumeroDePistas,:ContenidoAdicional)");

        $stmt->bindParam(":TituloAlbum", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":Activo", $datosModel["activo"], PDO::PARAM_STR);
        $stmt->bindParam(":Banda", $datosModel["banda"], PDO::PARAM_STR);
        $stmt->bindParam(":NumeroDePistas", $datosModel["pistas"], PDO::PARAM_INT);
        $stmt->bindParam(":ContenidoAdicional", $datosModel["adicional"], PDO::PARAM_BOOL);

        if($stmt->execute()){
            return "success";

        }else{
            return "error";
        }
        $stmt->close();
    }

    #VISTA USUARIOS
    #-------------------------------------

    public static function vistaAlbumModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT id, TituloAlbum, Activo, Banda, NumeroDePistas, ContenidoAdicional FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }

    #BORRAR USUARIO
    #------------------------------------
    public static function borrarAlbumModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

        if($stmt->execute()){
            return "success";
        }else{
            return "error";
        }

        $stmt->close();

    }

    #ACTUALIZAR USUARIO
    #-------------------------------------

    public function actualizarUsuarioModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo = :TituloAlbum, activo = :Activo, banda = :Banda, pistas = :NumeroDePistas, adicional = :ContenidoAdicional WHERE id = :id");

        $stmt->bindParam(":TituloAlbum", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":Activo", $datosModel["activo"], PDO::PARAM_STR);
        $stmt->bindParam(":Banda", $datosModel["banda"], PDO::PARAM_STR);
        $stmt->bindParam(":NumeroDePistas", $datosModel["pistas"], PDO::PARAM_INT);
        $stmt->bindParam(":ContenidoAdicional", $datosModel["adicional"], PDO::PARAM_BOOL);

        if($stmt->execute()){
            return "success";

        }else{
            return "error";
        }

        $stmt->close();

    }

    #CONTADOR
    #------------------------------------
    public static function contarAlbumModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

    }
}

