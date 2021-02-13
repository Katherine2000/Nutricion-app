<?php
    include("conexion.php");
    
    
    if(isset($_POST['AgregarEnfermedad'])) {
    
    

        /*echo "Agregar Enfermedad";*/
        
        $EnfermedadNueva =  $_POST['NuevaEnfermedad'];
        /*echo $EnfermedadNueva;*/

        $sql = "INSERT INTO EnferAdmin VALUES ('$EnfermedadNueva')";

        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    
    if(isset($_POST['AgregarPregunta'])) {
    
    

        /*echo "Agregar Pregunta";*/
        
        $PreguntaNueva =  $_POST['NuevaPregunta'];
        /*echo $PreguntaNueva;*/

        $sql = "INSERT INTO Preguntas VALUES ('$PreguntaNueva')";

        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    if(isset($_POST['AgregarEncabezado'])) {
    
    

        /*echo "Agregar encabezado";*/
        
        $EncabezadoNueva =  $_POST['NuevoEncabezado'];
        /*echo $EncabezadoNueva;*/

        $sql = "INSERT INTO Encabezados VALUES ('$EncabezadoNueva')";

        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    
    
    

    
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="https://account-assets.jimstatic.com/static/css/output.9d65bbbabf24.css" type="text/css">
    <title>Menu del Administrador</title>


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



            textarea {
              background-color: white;
              width: 550px;
              border: 5px  lucid-blue;
              padding: 50px;
              margin: 20px;
            }




        </style>

    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js">

    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    
<style>.links[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:end;justify-content:flex-end;-ms-flex-positive:1;flex-grow:1}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{color:#fff;text-decoration:none;font-size:16px;letter-spacing:1px;text-transform:uppercase;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;white-space:nowrap}.links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #1071e5 solid;margin-bottom:-2px;padding:5px 0}.drop-down-label[_ngcontent-fuk-c1], .user-email[_ngcontent-fuk-c1]{cursor:pointer;padding:6px 0}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:32px}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:32px}.links[_ngcontent-fuk-c1]   .link-icon[_ngcontent-fuk-c1]{margin-left:5px}.username[_ngcontent-fuk-c1]{max-width:184px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.notification-bell[_ngcontent-fuk-c1]{margin-left:32px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 32px}@media only screen and (max-width:1024px){.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:24px}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:24px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 24px}.notification-bell[_ngcontent-fuk-c1]{margin-left:24px}.username[_ngcontent-fuk-c1]{max-width:152px}}@media only screen and (max-width:1210px){.team-inviter[_ngcontent-fuk-c1]{display:none}}.press[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .press   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #00c2a8 solid}.chart[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .chart   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #f96b13 solid}.enforce-sans-serif[_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1], .enforce-sans-serif   [_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{font-family:"Source Sans Pro",sans-serif}.user-email[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-align:center;align-items:center}.drop-down-label[_ngcontent-fuk-c1]{margin-left:5px;font-size:14px;white-space:nowrap;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-webkit-user-select:none;-ms-user-select:none;user-select:none}.drop-down-label[_ngcontent-fuk-c1]   .drop-down-triangle[_ngcontent-fuk-c1]{content:"";display:block;width:0;height:0;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #fff;margin-left:5px}</style><style>[_nghost-fuk-c7]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-align:center;align-items:center;background-color:#282c33;min-height:62px;max-height:62px;padding:0 30px;color:#fff}</style>


</head>


<body>
    

    <lucid-user-settings-app _nghost-fuk-c0="" ng-version="9.0.0">

        <div _ngcontent-fuk-c0="" class="app" lucidpopupanchor="">

            <lucid-navigation-header _ngcontent-fuk-c0="" class="enforce-sans-serif chart" _nghost-fuk-c1="">
        <lucid-navigation-header-bar _ngcontent-fuk-c1="" _nghost-fuk-c7="">
            <lucid-navigation-header-logo _ngcontent-fuk-c1="" _nghost-fuk-c8="">
                <a _ngcontent-fuk-c8="" class="product-icon" href="/pages/es"><!---->

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







<div id="cuerpo">



<form name="Encabezado" class="ua-login ua-form" method="POST" action="AdminHistoriaClinica.php" novalidate=""> 

        <br>
        <center>
            
            
<h2>HISTORIA CLINICA</h2>

<textarea name="NuevoEncabezado">Please take a moment to complete this form. Some questions may not apply and may be left unanswered. The information you share will help the Registered Dietitian have a better understanding of your needs. Please bring this questionnaire with you to your appointment. 
</textarea>


<div class="ua-content">
    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" id="ua-button-signUp" name="AgregarEncabezado">
        <a >      Guardar Encabezado                                           
        </a>
    </button>
</div>


</form>       
        
      

<br>
<br>









<form name="Enfermedad" class="ua-login ua-form"  method="POST" action="AdminHistoriaClinica.php" novalidate=""> 

<center>
    
<table width="86%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="5" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
                
                <br>
                <th>

<p><center>
    
    <b> <strong> 
        <label size="8" for="site-search">Agregar Enfermedad:</label>
        </strong>
        </b>
        <input type="Buscar" id="site-search" name="NuevaEnfermedad" aria-label="Search through site content">

       


        <br>
        <br>


</p>

  </th>

      
</table>

</center>

<br>
<div class="ua-content">
    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" id="ua-button-signUp" name="AgregarEnfermedad">
        <a>    Agregar Enfermedad                                          
        </a>
    </button>
</div>

</center>
<br>
<br>
</form>       
        
        
        
        
        
        
        
        
        
        

<form name="Pregunta" class="ua-login ua-form" method="POST" action="AdminHistoriaClinica.php" novalidate="">        

<center>
<table width="80%" border="3" bordercolor="#000000" cellspacing="15" cellpadding="5" style="background-image: url('https://www.quo.es/wp-content/uploads/2019/10/la-nutricion-de-precision.-la-nueva-estrategia-contra-la-obesidad.jpg');" >
                
                <br>
                <th>

<p><center>
    
    <b> <strong> 
        <label size="8" for="site-search">Agregar Pregunta Paciente:</label>
        </strong>
        </b>
        <input type="Buscar" id="site-search" name="NuevaPregunta"  aria-label="Search through site content">

        


        <br>
        <br>




</p>

  </th>

</table>
</center>

<br>

<div class="ua-content">
    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" id="ua-button-signUp" name="AgregarPregunta">
        <a>      Agregar Pregunta                                           
        </a>
    </button>
</div>


</center>


</form>  

</div>


</div>




  




  




</body>






</html>
