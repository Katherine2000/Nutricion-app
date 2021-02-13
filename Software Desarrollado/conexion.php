<?php

        $User="3447338_proyingsoft";
        $pass="12345678jeison";
        $server="fdb25.awardspace.net";
        $baseDeDatos="3447338_proyingsoft";

        $mysqli = new mysqli($server, $User,$pass,$baseDeDatos);
        $mysqli->set_charset("utf8");


        
    
        class Usuario{              
                
        
                public $nombre;
                public $contrasena;
                
                public $tododato;
                
                public $cantidad;
                
                public $enfermedad;
                
                public $pregunta;
                
                public $encabezado;
                
                
                function Datos($mysqli,$correo){
                        
                
                        $showtablequery = "SELECT * FROM usuario where Correo= '$correo'  ";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        
                        return $this->contrasena=$showtablerow[14];
                        
                
                }
                
                function DatosNutricionista($mysqli,$cedula1){
                        
                
                        $showtablequery = "SELECT * FROM usuario where cedula= '$cedula1'  ";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->nombre=$showtablerow;
                        
                
                }
                
                
                function TodosNutricionista($mysqli,$ti){
                        
                
                        $showtablequery = "SELECT * FROM usuario where tipo_persona= '$ti'";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->tododato=$showtablerow;
                        
                
                }
                
                
                
                function cantidad($mysqli,$ti){
                        
                
                        $showtablequery = "SELECT COUNT(*) FROM usuario where tipo_persona= '$ti'";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->cantidad=$showtablerow;
                        
                
                }
                
                function EnfermedadAdmin($mysqli){
                        
                
                        $showtablequery = "SELECT * FROM EnferAdmin";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->enfermedad=$showtablerow;
                        
                
                }
                
                
                
                function PreguntasAdmin($mysqli){
                        
                
                        $showtablequery = "SELECT * FROM Preguntas";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->pregunta=$showtablerow;
                        
                
                }
                
                
                function EncabezadoAdmin($mysqli){
                        
                
                        $showtablequery = "SELECT * FROM Encabezados";
                
                        

                        $showtablequery_result = mysqli_query($mysqli, $showtablequery);
                
                        $showtablerow = mysqli_fetch_array($showtablequery_result);
                        
                        return $this->encabezado=$showtablerow;
                        
                
                }
                
                
                
                
                
                
                
                public function __toString(){
                        return $this->contrasena;
                }
                
        
        
        }
        
        
        
               
             
                
  
                
            
        
            
                
                
      
        
    
?>
