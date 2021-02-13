<?php
    include("conexion.php");
    
    
    if(isset($_POST['AgregarNutricionista'])) {
       

        /*echo "Agregar Nutricionista";*/
        
        $NutricionistaNueva =  $_POST['NuevaNutricionista'];
        /*echo $NutricionistaNueva;*/
        
        $Correo1 =  $_POST['Correo'];
        /*echo $Correo;*/
        
        $NutricionistaContrasena =  $_POST['NuevaContrasena'];
        /*echo $NutricionistaContrasena;*/
        
        
        $sql = "INSERT INTO usuario VALUES ('$NutricionistaNueva', '2', NULL, NULL, NULL, NULL, NULL, '$Correo1', NULL, NULL, NULL, NULL, NULL, NULL, '$NutricionistaContrasena')";
        
        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    if(isset($_POST['EliminarNutricionista'])) {
       

        /*echo "eliminar Nutricionista";*/
        
        $NutricionistaBorrar=  $_POST['EliminarNutricionistaEntrada'];
        echo $NutricionistaBorrar;
        
        
        $sql = "DELETE FROM usuario WHERE usuario.cedula= '$NutricionistaBorrar';";
        
        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    
    if(isset($_POST['BuscarNutricionista'])) {
       

        /*echo "Buscar Nutricionista";*/
        
        $NutricionistaBuscar=  $_POST['BuscarNutricionistaEntrada'];
        /*echo $NutricionistaBuscar;*/
        
        $conexion2 = new Usuario;
        
        
        
    }
    
    if(isset($_POST['ActualizarBoton'])) {
       

        /*echo "Mostrar todo";*/
        
        $conexion2 = new Usuario;
        
        
        
    }
    
    if(isset($_POST['Contar'])) {
       

        /*echo "Cuenta";*/
        
        $conexion2 = new Usuario;
        
        
        
    }
    
    
    
    
?>


<!DOCTYPE html>
<html lang="es">

<head>
    
    <title>Menu del Administrador</title>
    <link rel="stylesheet" href="https://account-assets.jimstatic.com/static/css/output.9d65bbbabf24.css" type="text/css">
    

    <link href="https://assets.jimstatic.com/dash/static/css/10.85336241.chunk.css" rel="stylesheet"><link href="https://assets.jimstatic.com/dash/static/css/main.c8a96e0f.chunk.css" rel="stylesheet"></head>



    
    <style>
        html {
                height: 100%;
            }
            body {
                padding: 0;
                margin: 0;
                background-color: #ffffff;
                height: 100%;
            }

            label {
                display: block;
                font: 1.5rem 'Fira Sans', sans-serif;
            }

            input,
            label {
                margin: .4rem 0;
            }


            iframe {

                border: 1px solid black;
                width: 100%;
            }

            .output {
                background: #eee;
            }

            #cuerpo{
            border:solid #000000;
            /*aumentando el 2px 'aparece' un borde*/
            border-width: 2px 0;
            padding:20px 35px;
        }


        </style>

    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js">
        

    </script>
    
<style>.links[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:end;justify-content:flex-end;-ms-flex-positive:1;flex-grow:1}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{color:#fff;text-decoration:none;font-size:16px;letter-spacing:1px;text-transform:uppercase;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;white-space:nowrap}.links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #1071e5 solid;margin-bottom:-2px;padding:5px 0}.drop-down-label[_ngcontent-fuk-c1], .user-email[_ngcontent-fuk-c1]{cursor:pointer;padding:6px 0}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:32px}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:32px}.links[_ngcontent-fuk-c1]   .link-icon[_ngcontent-fuk-c1]{margin-left:5px}.username[_ngcontent-fuk-c1]{max-width:184px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.notification-bell[_ngcontent-fuk-c1]{margin-left:32px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 32px}@media only screen and (max-width:1024px){.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:24px}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:24px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 24px}.notification-bell[_ngcontent-fuk-c1]{margin-left:24px}.username[_ngcontent-fuk-c1]{max-width:152px}}@media only screen and (max-width:1210px){.team-inviter[_ngcontent-fuk-c1]{display:none}}.press[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .press   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #00c2a8 solid}.chart[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .chart   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #f96b13 solid}.enforce-sans-serif[_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1], .enforce-sans-serif   [_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{font-family:"Source Sans Pro",sans-serif}.user-email[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-align:center;align-items:center}.drop-down-label[_ngcontent-fuk-c1]{margin-left:5px;font-size:14px;white-space:nowrap;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-webkit-user-select:none;-ms-user-select:none;user-select:none}.drop-down-label[_ngcontent-fuk-c1]   .drop-down-triangle[_ngcontent-fuk-c1]{content:"";display:block;width:0;height:0;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #fff;margin-left:5px}</style><style>[_nghost-fuk-c7]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-align:center;align-items:center;background-color:#282c33;min-height:62px;max-height:62px;padding:0 30px;color:#fff}</style>







</head>


<body style="background-image: url('');">
    

    <lucid-user-settings-app _nghost-fuk-c0="" ng-version="9.0.0">

        <div _ngcontent-fuk-c0="" class="app" lucidpopupanchor="">

            <lucid-navigation-header _ngcontent-fuk-c0="" class="enforce-sans-serif chart" _nghost-fuk-c1="">
        <lucid-navigation-header-bar _ngcontent-fuk-c1="" _nghost-fuk-c7="">
            <lucid-navigation-header-logo _ngcontent-fuk-c1="" _nghost-fuk-c8="">
                <a _ngcontent-fuk-c8="" class="product-icon" href="AdminHistoriaClinica.php"><!---->

                    <lucid-icon _ngcontent-fuk-c8="" _nghost-fuk-c10="">

                        <svg width="0" height="26" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <img src="http://centrojade.com/wp-content/uploads/2018/07/habitos-nutricion-fruta-1.jpg"   height="40"  width="150" >
        
                        </svg>
                    </lucid-icon><!---->
                </a><!---->
            </lucid-navigation-header-logo><!---->



 <div _ngcontent-fuk-c1="" class="links" data-selenium-id="navigation-links">

    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="documents" href="AdminHistoriaClinica.php"> Historia Clinicas
    </a>

    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="account" href="CuentasNutAdmin.php"> Cuentas de Nutricionistas
    </a>

    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="help" href="ConfiguracionUsuarioAdmi.php">  Cuenta Administrativa
    </a>

 </div>

 
<div _ngcontent-fuk-c1="" class="seperator">
    
</div>

<div _ngcontent-fuk-c1="" calloutadditionalclasses="white"  lucidoverlay="">
    <div _ngcontent-fuk-c1="" class="drop-down-label">

        <div _ngcontent-fuk-c1="" class="username"> 
            <a href="index.php">SALIR</a>            
        </div>
    <div _ngcontent-fuk-c1="" class="drop-down-triangle">
    
 </div>
 
</div>
</div>

</lucid-navigation-header-bar>
</lucid-navigation-header>
</div>
</lucid-user-settings-app>



<div id="cuerpo" >




<form name="Nutricionista" class="ua-login ua-form"  method="POST" action="CuentasNutAdmin.php" novalidate=""> 
<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="15" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
                
                <br>
                <th>
                        <br>
                        <p>
                            <div>
                            <h3> <label size="10">Cedula:</label> </h3>
                            
                            <input width="20" name="NuevaNutricionista"/>
                            </div>
                        </p>
                            <br>
                            <p>
                            <div>
                            <h3> <label size="10">Correo:</label> </h3>
                            
                            <input width="20" name="Correo"/>
                            </div>
                        </p>

                        <br>
                        <p><div>
                            <h3> <label>Contrasena:</label> </h3>
                           
                            <input  name="NuevaContrasena"/>
                        </div>
                            
                        </p>
                        <br>
                </th>

</table>
</center>
<br>        
    <div class="ua-content">
            <p>
                <p>
                        <center>
            
                            <font size="2" face="Arial, Helvetica, sans-serif">
                                <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="AgregarNutricionista"> Nuevo Nutricionista 
                                </button>
                        </center>
                </p>
            </p>
         </div>


</form>       
       
       
       
       
       
       
       
       
       
       
       

<br>
<br>
<br>





<form name="Eliminar" class="ua-login ua-form"  method="POST" action="CuentasNutAdmin.php" novalidate=""> 
<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="15" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
              
                <br>
                <th>

<p><center>
    
    <b> <strong> 
        <label size="8" for="site-search">Eliminar un Nutricionista:</label>
        </strong>
        </b>
        <input type="Buscar"  name="EliminarNutricionistaEntrada"  >

        <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="EliminarNutricionista"> Eliminar Nutricionista 
                                </button>


        <br>
        <br>

</center>
</p>

  </th>

</table>

</center>

</form>  
<br><br><br><br>

     
       




<br>
<br>
<br>





<form name="Buscar" class="ua-login ua-form"  method="POST" action="CuentasNutAdmin.php" novalidate=""> 
<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="15" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
              
                <br>
                <th>

<p><center>

        <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="BuscarNutricionista">Buscar Nutricionista 
                                </button>
    
    <b> <strong> 
        <label size="8" for="site-search">Buscar un Nutricionista:</label>
        </strong>
        </b>
        <input name="BuscarNutricionistaEntrada"  >

        


        <br>
        <br>
        
        
        <p><center>
            <br>
            
            <table border="1">
                <caption>Nutricioinstas</caption>
                <tr>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    
                </tr>
                
               
                
                
                <tr>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[2]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[3]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[4]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[5]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[6]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[7]; ?></td>
                    <td><?php ECHO  $conexion2->DatosNutricionista($mysqli,$NutricionistaBuscar)[14]; ?></td>
                </tr>
            </table>
            
            <br><br><br>
        
        
        </p></center>




</center>
</p>

  </th>

</table>

</center>

</form>  
<br><br><br><br>







<form name="actualizar" class="ua-login ua-form"  method="POST" action="CuentasNutAdmin.php" novalidate=""> 
<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="15" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
               
                <br>
                <th>

<p><center>
    <br>
    
    <br>
            
                <table border="1">
                <caption>Nutricionistas</caption>
                <tr>
                    <th>Cedula</th>
                    <th>Primer Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    
                </tr>
                
               
                
                <tr>
                    <td><?php ECHO  $conexion2->TodosNutricionista($mysqli,2)[0]; ?></td>
                    <td><?php ECHO  $conexion2->TodosNutricionista($mysqli,2)[2]; ?></td>
                    <td><?php ECHO  $conexion2->TodosNutricionista($mysqli,2)[4]; ?></td>
                    <td><?php ECHO  $conexion2->TodosNutricionista($mysqli,2)[7]; ?></td>
                    <td><?php ECHO  $conexion2->TodosNutricionista($mysqli,2)[14]; ?></td>
                </tr>
                
                
            </table>
    
    
   

</center>
</p>

  </th>

          <div class="ua-content">
            <p>
                <p>
                <center>
            
                <font size="2" face="Arial, Helvetica, sans-serif">
               <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="ActualizarBoton"> Actualizar 
                                </button>

            
                </center>
                </p>
            </p>

            </div>
   
</table>
</center>

</form>  














<br>

<form name="cantidad" class="ua-login ua-form"  method="POST" action="CuentasNutAdmin.php" novalidate=""> 
<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="15" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
            
                <br>
                <th>

<p><center>
    <br>
    
    <table border="1">
        <caption>Cantidad Nutricioinstas</caption>
        <tr>
            <td><?php ECHO  $conexion2->cantidad($mysqli,2)[0]; ?></td>
        </tr>
       
    </table>
    <br>
    <br>
    <br>

</center>
</p>

  </th>

  <div class="ua-content">
            <p>
                <p>
                <center>
            
                <font size="2" face="Arial, Helvetica, sans-serif">
                    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="Contar"> Contar 
                                </button>
            
                </center>
                </p>
            </p>

            </div>



        

</table>


</form>  



                
</table>

<br>
<br>
<br>
<br>

            
</div>






  




</body>






</html>