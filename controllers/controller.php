<?php
session_start();
class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}else{
		    $enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#REGISTRO ALBUM
    #------------------------------------------

    public function registroAlbumController(){

        if(isset($_POST["titulo"])){

            $datosController = array( "titulo"=>$_POST["titulo"],
                "activo"=>$_POST["activo"],
                "banda"=>$_POST["banda"],
                "pistas"=>$_POST["pistas"],
                "adicional"=>$_POST["adicional"]
            );

            $respuesta = Datos::registroAlbumModel($datosController, "tb_reg_album");

            if($respuesta != ""){
                $_SESSION["validar"] = true;
                echo '<script>window.location.href = "index.php?action=tablas"</script>';
               // header('Location:index.php?action=tablas');

            } else{
                header("location:index.php?action=fallo");
            }
        }


    }

    #VISTA DE ALBUM
    #------------------------------------

    public function vistaAlbumController(){

        $respuesta = Datos::vistaAlbumModel("tb_reg_album");

        foreach($respuesta as $row => $item){
            echo'<tr>
                <td>'.$item["id"].'</td>
				<td>'.$item["TituloAlbum"].'</td>
				<td>'.$item["Activo"].'</td>
				<td>'.$item["Banda"].'</td>
				<td>'.$item["NumeroDePistas"].'</td>
				<td>'.$item["ContenidoAdicional"].'</td>
				<td><a href="index.php?action=tablas&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
			</tr>';

        }

    }

    #VISTA DE ALBUM HOME
    #------------------------------------

    public function vistaAlbumHomeController(){

        $respuesta = Datos::vistaAlbumModel("tb_reg_album");

        foreach($respuesta as $row => $item){
            echo'<tr>
                <td>'.$item["Banda"].'</td>
				<td>'.$item["TituloAlbum"].'</td>
				<td>'.$item["NumeroDePistas"].'</td>
			</tr>';

        }

    }

    #BORRAR USUARIO
    #------------------------------------
    public function borrarAlbumController(){

        if(isset($_GET["idBorrar"])){

            $datosController = $_GET["idBorrar"];

            $respuesta = Datos::borrarAlbumModel($datosController, "tb_reg_album");

            if($respuesta == "success"){
                echo '<script>window.location.href = "index.php?action=tablas"</script>';
                //header("location:index.php?action=tablas");

            }

        }

    }

     #CONTADOR
    #------------------------------------
    public function contadorAlbumController(){

        $resp = Datos::contarAlbumModel("tb_reg_album");
        foreach ($resp as $row => $item) {
            echo '<p class="total">' . $item[0] . '</p>';
        }
    }

}

?>