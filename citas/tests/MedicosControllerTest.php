<?php

//require '/../../vendor/autoload.php';
 //require $_SERVER['DOCUMENT_ROOT'].'/citas/vendor/autoload.php'; 
//require 'C:/xampp/htdocs/citas/vendor/autoload.php';
use \PHPUnit\Framework\TestCase;


class MedicosController extends TestCase{   

     public function testEquality()  {
              $datosController = array(
                  'especialidad' => 'ginecologia',
                  'colegiatura' => '1345',
                  'rne' => 'rne',
                  'persona_id' => 5,
            );
        $this->assertSame(
            [  $datosController['especialidad'], $datosController['colegiatura'], $datosController['rne'], $datosController['persona_id']],
            [ "ginecologia","1345","rne",5]
        );
    }

       public function testEmpty()    {
             $datosController = array(
                  'especialidad' => 'ginecologia',
                  'colegiatura' => '1345',
                  'rne' => 'rne',
                  'persona_id' => 5,
            );
            $datosController2 = array();

        $this->assertEmpty($datosController2);

    }

    public function testEliminar()
    {     
      //resultad que viene del modelo
         $respuesta = "aa";
         if($respuesta){
           $this->assertTrue(true);
         }else {
           $this->assertTrue(false);
         }
       
    }


   /*
      public  function adddd(){

         $array = array(
                  "0" => "bar",
                  "1" => "foo",
              ); 
         
         $this->assertEquals('nene',$array['0']);
        
     }*/

       public function testPushAndPop()
    {
        $dataMedico = [];
        //comienza con cero data
           $datosController = array(
                  'especialidad' => 'ginecologia',
                  'colegiatura' => '1345',
                  'rne' => 'rne',
                  'persona_id' => 5,
            );

        $this->assertSame(0, count($dataMedico));

        array_push($dataMedico, $datosController['especialidad']);
        array_push($dataMedico, $datosController['colegiatura']);
        array_push($dataMedico, $datosController['rne']);
        array_push($dataMedico, $datosController['persona_id']);

       // $this->assertSame('foo', array_pop($stack));
        $this->assertSame(4, count($dataMedico));
    }



}
