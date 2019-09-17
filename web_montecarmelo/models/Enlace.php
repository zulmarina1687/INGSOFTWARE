<?php

class Enlace{

    public static function enlacesPaginasModel($get){

        if ($get == "dashboard" ) {
            $module = "views/usuarios/dashboard.php";

        }
       else if ($get == "index") {

            $module = "views/paginas/index.php";

        }else if ($get == "nosotros") {

            $module = "views/paginas/nosotros.php";

        }else if ($get == "servicios") {

            $module = "views/paginas/servicios.php";

        }else if ($get == "registro") {

            $module = "views/pacientes/add.php";

        }else if ($get == "agregar_paciente") {

            $module = "views/pacientes/add.php";

        }else if ($get == "noticias") {

            $module = "views/paginas/noticias.php";

        }else if ($get == "contacto") {

            $module = "views/paginas/contacto.php";

        }else if ($get == "staff") {

            $module = "views/paginas/staff.php";

        }else if ($get == "listar_pacientes"  or $get == "paciente_ok") {
            $module = "views/pacientes/add.php";

        }
     
         

        


        //
        // Páginas por default
        //
        else {

            $module = "index.php";

        }


        return $module;

    }

}
