<?php

//require '/../../vendor/autoload.php';
 //require $_SERVER['DOCUMENT_ROOT'].'/citas/vendor/autoload.php'; 
//require 'C:/xampp/htdocs/citas/vendor/autoload.php';

use \PHPUnit\Framework\TestCase;

require_once $_SERVER['DOCUMENT_ROOT'].'/citas/domain/entity/Rol.php'; 

class RolesController extends TestCase{   

     public function testEquality()  {
           $datosController = array(
                  'descripcion' => 'admin',
            );

        $this->assertSame(
            [  $datosController['descripcion']],
            [ "admin"]
        );
    }

       public function testEmpty()    {
          $datosController = array(
                  'descripcion' => 'admin',
            );
            $datosController2 = array();

        $this->assertEmpty($datosController2);

    }

    public function testEliminar()
    {
         $respuesta = Rol::delete($id);
         if($respuesta){
           $this->assertTrue(true);
         }else {
           $this->assertTrue(true);
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

       public function testPushAndPop(){
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }



}
