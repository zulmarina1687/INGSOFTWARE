<?php

class Enlace{

    public static function enlacesPaginasModel($get){

        if ($get == "dashboard" ) {
            $module = "views/usuarios/dashboard.php";

        }
        else if ($get == "dashboard_pa") {

            $module = "views/pacientes/dashboard.php";

        }else if ($get == "index") {

            $module = "views/usuarios/login.php";

        }/* else if ($get == "login") {

            $module = "views/usuarios/login.php";

        }*/else if ($get == "olvido") {

            $module = "views/usuarios/olvido.php";

        }else if ($get == "restablecer") {

            $module = "views/usuarios/restablecer.php";

        } else if ($get == "logout") {

            $module = "views/usuarios/logout.php";

        }
        // -----------------------------------------------
        // modulo de usuarios

         else if ($get == "agregar_usuario") {       

            $module = "views/usuarios/add.php";

        } else if ($get == "editar_usuario") {

            $module = "views/usuarios/edit.php";

        } else if ($get == "ver_usuario") {

            $module = "views/usuarios/view.php";

        }else if ($get == "cambiar_clave") {

            $module = "views/usuarios/change_password.php";

        } else if ($get == "listar_usuarios"  or $get == "usuario_ok") {
            $module = "views/usuarios/index.php";

        }

        //modulo de rol

             else if ($get == "agregar_rol") {

                $module = "views/roles/add.php";

            }  else if ($get == "editar_rol") {

                $module = "views/roles/edit.php";

            } else if ($get == "ver_rol") {

                $module = "views/roles/view.php";

            } else if ($get == "listar_roles" or $get == "rol_ok") {

                $module = "views/roles/index.php";

            }

         //modulo de areas

             else if ($get == "agregar_area") {

                $module = "views/areas/add.php";

            }  else if ($get == "editar_area") {

                $module = "views/areas/edit.php";

            } else if ($get == "ver_area") {

                $module = "views/areas/view.php";

            } else if ($get == "listar_areas" or $get == "area_ok") {

                $module = "views/areas/index.php";

            }

         //modulo de medicos

             else if ($get == "agregar_medico") {

                $module = "views/medicos/add.php";

            }  else if ($get == "editar_medico") {

                $module = "views/medicos/edit.php";

            } else if ($get == "ver_medico") {

                $module = "views/medicos/view.php";

            } else if ($get == "listar_medicos" or $get == "medico_ok") {

                $module = "views/medicos/index.php";

            }


            //modulo de pacientes

             else if ($get == "agregar_paciente") {

                $module = "views/pacientes/add.php";

            }  else if ($get == "editar_paciente") {

                $module = "views/pacientes/edit.php";

            } else if ($get == "ver_paciente") {

                $module = "views/pacientes/view.php";

            } else if ($get == "listar_pacientes" or $get == "paciente_ok") {

                $module = "views/pacientes/index.php";

            }

            //modulo de citas

             else if ($get == "agregar_cita") {

                $module = "views/citas/add.php";

            }  else if ($get == "editar_cita") {

                $module = "views/citas/edit.php";

            } else if ($get == "ver_cita") {

                $module = "views/citas/view.php";

            } else if ($get == "calendario") {

                $module = "views/citas/calendario.php";

            
            } else if ($get == "data_calendario") {

                $module = "views/citas/data.php";

            } else if ($get == "listar_citas" or $get == "cita_ok") {

                $module = "views/citas/index.php";

            }

             //modulo de personas

             else if ($get == "agregar_persona") {

                $module = "views/personas/add.php";

            }  else if ($get == "editar_persona") {

                $module = "views/personas/edit.php";

            } else if ($get == "ver_persona") {

                $module = "views/personas/view.php";

            } else if ($get == "listar_personas" or $get == "persona_ok") {

                $module = "views/personas/index.php";

            }

        //modulo de cargos

             else if ($get == "agregar_cargo") {

                $module = "views/cargos/add.php";

            }  else if ($get == "editar_cargo") {

                $module = "views/cargos/edit.php";

            } else if ($get == "ver_cargo") {

                $module = "views/cargos/view.php";

            } else if ($get == "listar_cargos" or $get == "cargo_ok") {

                $module = "views/cargos/index.php";

            }

         //modulo de procesos

             else if ($get == "agregar_proceso") {

                $module = "views/procesos/add.php";

            }  else if ($get == "editar_proceso") {

                $module = "views/procesos/edit.php";

            } else if ($get == "ver_proceso") {

                $module = "views/procesos/view.php";

            } else if ($get == "listar_procesos" or $get == "proceso_ok") {

                $module = "views/procesos/index.php";

            }

             //modulo de tipo personales

             else if ($get == "agregar_tipopersonal") {

                $module = "views/tipopersonales/add.php";

            }  else if ($get == "editar_tipopersonal") {

                $module = "views/tipopersonales/edit.php";

            } else if ($get == "ver_tipopersonal") {

                $module = "views/tipopersonales/view.php";

            } else if ($get == "listar_tipopersonales" or $get == "tipopersonal_ok") {

                $module = "views/tipopersonales/index.php";

            }

             //modulo de tipo procesos

             else if ($get == "agregar_tipoproceso") {

                $module = "views/tipoprocesos/add.php";

            }  else if ($get == "editar_tipoproceso") {

                $module = "views/tipoprocesos/edit.php";

            } else if ($get == "ver_tipoproceso") {

                $module = "views/tipoprocesos/view.php";

            } else if ($get == "listar_tipoprocesos" or $get == "tipoproceso_ok") {

                $module = "views/tipoprocesos/index.php";

            }



        //modulo de preguntas

             else if ($get == "agregar_pregunta") {

                $module = "views/preguntas/add.php";

            }  else if ($get == "editar_pregunta") {

                $module = "views/preguntas/edit.php";

            } else if ($get == "ver_pregunta") {

                $module = "views/preguntas/view.php";

            } else if ($get == "listar_preguntas" or $get == "pregunta_ok") {

                $module = "views/preguntas/index.php";

            }



        //modulo de personal

             else if ($get == "agregar_personal") {

                $module = "views/personales/add.php";

            }  else if ($get == "editar_personal") {

                $module = "views/personales/edit.php";

            } else if ($get == "ver_personal") {

                $module = "views/personales/view.php";

            } else if ($get == "importar_docente") {

                $module = "views/personales/import_docente.php";

            }else if ($get == "importar_administrativo") {

                $module = "views/personales/import_administrativo.php";

            } else if ($get == "listar_personales" or $get == "personal_ok") {

                $module = "views/personales/index.php";

            }



        //modulo de participamntes

             else if ($get == "agregar_participante") {

                $module = "views/participantes/add.php";

            }  else if ($get == "editar_participante") {

                $module = "views/participantes/edit.php";

            } else if ($get == "ver_participante") {

                $module = "views/participantes/view.php";

            }else if ($get == "enviar_mensaje") {

                $module = "views/participantes/send_email.php";

            }else if ($get == "exportar_proceso") {

                $module = "views/participantes/export_proceso.php";

            }else if ($get == "listar_participantes" or $get == "participante_ok") {

                $module = "views/participantes/index.php";

            }


        //
        // Páginas por default
        //
        else {

            $module = "views/usuarios/logout.php";

        }


        return $module;

    }

}
