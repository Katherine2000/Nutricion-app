<?php
    
    include("conexion.php");
    
   
    
    
    
    
    
    if(isset($_POST['btnEnviar'])) {
                
        $Correo =  $_POST['Correo'];
        ECHO $Contrasena =  $_POST['Contrasena'];
        
                
        $conexion2 = new Usuario;
        ECHO  $conexion2->Datos($mysqli,$Correo);
        
        /*$data = array($Contrasena,$conexion2);

        foreach ($data as $value) {
            echo gettype($value), "\n";
        }*/
        
        if($conexion2==$Contrasena){
            echo "Permite el ingreso";
             
        }else {            
                echo "No ingreso";

        }

          
       
    }
    
   
    
        
    
    
?>

<!DOCTYPE html>
<html lang="es">



<head>

    <script type="text/javascript">


        function IniciarSeccion(){

            var ele = document.forms["miForm"]["Opcion1"].checked;

            if(ele==true){

                document.location.assign('Menu.php')
                
                return false;
                
                
            }
            else{
                document.location.assign('MenuAdministrativo.php')
                return false;
            }
        }
    </script>
    
    
    
    <style>
        div {
          margin-bottom: 15px;
          padding: 4px 12px;
        }
        
        .danger {
          background-color: #ffdddd;
          border-left: 6px solid #f44336;
        }
        
        .success {
          background-color: #ddffdd;
          border-left: 6px solid #4CAF50;
        }
        
        .info {
          background-color: #e7f3fe;
          border-left: 6px solid #2196F3;
        }
        
        
        .warning {
          background-color: #ffffcc;
          border-left: 6px solid #ffeb3b;
        }
     </style>
            
   
   
    <link rel="stylesheet" href="https://account-assets.jimstatic.com/static/css/output.9d65bbbabf24.css" type="text/css">
    
    <title>Iniciar sesión: Nutricionistas</title>

</head>


<body>
    <div class="ua-background">        
        <div class="">
            <i class="">
                <svg  width="40" >
                    
                        <img  src="https://www.webconsultas.com/sites/default/files/styles/wc_adaptive_image__small/public/articulos/nutricion_sida.jpg"   height=""  width="" >


                    
                </svg>
            </i>
        </div>

    <div class="ua-content-wrapper">         


    <div class="ua-main-content ua-main-content--slogin">
        <div class="ua-main-content-partition ua-content-alternative--mobile">
            <span class="ua-hint-text">
                ¿Primera vez por aquí?
            </span>



            <a class="ua-hint-link" href="Registro.php">
                Regístrate ahora.
            </a>




        </div>

    <div class="ua-main-content-partition ua-content-main ua-content-login">

            <div class="ua-signup-headline-wrapper">
                
                <h2 class="ua-headline jui-headline-headline jui-headline-headlineBig">
                    ¡Hola!
                </h2>
                <p class="ua-headline-sub">
                    Puedes iniciar sesión en tu cuenta de aquí.
                </p>
                
            </div>
                        
            <div id="fb-root" class=" fb_reset">
                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div>
                </div>
            </div>
    </div>



     <form method="POST" action="index.php" class="ua-login ua-form" id="login_form" onsubmit="return IniciarSeccion();" name="miForm"> 


                        
                    <input type="hidden" name="csrfmiddlewaretoken" value="X841UJ7OG0KBAglyqn7u5GnwD4IQP3oPyl2cEeEll0o20BaZIzb5Z0EoWkQmZVoL">
                        <fieldset class="ua-form__group">
                                
                            <div class="jui-input-inputWrapper">
                
                                        
                                <div class="ua-input-inputFieldWrapper jui-input-inputFieldWrapper">
                                    <span class="ua-input-inputMail ua-input__icon icon__icon___1B9H6">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="currentColor" d="M18 7.5l-6.8 5.1a2 2 0 0 1-2.4 0L2 7.5V15h16V7.5zM2 3h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm8 8l8-6H2l8 6z" fill-rule="nonzero">                                    
                                                </path>
                                            </svg>
                                    </span>
                
                    <input type="text" name="Correo" placeholder="Dirección de email" autofocus="autofocus" class="ua-input-input jui-input-input" required="" id="Correo">
                                </div>                                   
                            </div>


                        <div class="jui-input-inputWrapper"  id="info">
                                                
                            <span class="ua-input-password-wrapper">
                                <div class="ua-input-inputFieldWrapper jui-input-inputFieldWrapper">
                                    <span class="ua-input-inputPassword ua-input__icon icon__icon___1B9H6">
                                        <svg width="20px" height="20px" viewBox="0 0 10 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="currentColor" d="M8.33333333,5.55555556 L8.33333333,3.33333333 C8.33333333,1.49277778 6.84055556,0 5,0 C3.15944444,0 1.66666667,1.49277778 1.66666667,3.33333333 L1.66666667,5.55555556 L0,5.55555556 L0,13.3333333 L10,13.3333333 L10,5.55555556 L8.33333333,5.55555556 Z M2.77777778,5.55555556 L2.77777778,3.33333333 C2.77777778,2.10777778 3.77444444,1.11111111 5,1.11111111 C6.22555556,1.11111111 7.22222222,2.10777778 7.22222222,3.33333333 L7.22222222,5.55555556 L2.77777778,5.55555556 Z" fill-rule="nonzero">
                                            </path>
                                        </svg>
                                    </span>
                        
                                    <input type="password" name="Contrasena" placeholder="Contraseña" class="ua-input-input jui-input-input ua-input-password" required="" id="Contrasena">
                                </div>
                                    
                            </span>

                            <p>
                        
                        
                                                    <br>
                                                    <label>
                                                        <input type="checkbox" name="Opcion1" value="first_checkbox">
                                                                            Nutricionista
                                                    </label>
                        
                                                    <br>
                        
                                                         
                                                    <label>
                                                            <input type="checkbox" name="Opcion2" value="second_checkbox">
                                                                            Administrador
                                                    </label>
                                                    <br>
                            </p>
                        
                            
                            <div class="ua-forgot-password">
                                <a class="ua-link-forgot-password jui-link-link" href="/es/accounts/password/reset/">
                                ¿Has olvidado tu contraseña?
                                </a>
                            </div>
                </div>
                    
                    <input type="hidden" name="next" value="/openid/authorize?response_type=code&amp;redirect_uri=https%3A%2F%2Fcms.e.jimdo.com%2Fapp%2Foidc%2Fauthenticate%2Ffinish&amp;client_id=cms&amp;nonce=cd8ab9de10c8f86bb52e082baf402584&amp;state=eyJ3ZWJzaXRlSWQiOiJzZGJhOTVlZDBjMDJhY2RhMSIsImp1bXBUbyI6bnVsbCwic2FmZU1vZGUiOm51bGx9&amp;scope=openid">
                                    
                        </fieldset>
                
                
                                <div class="ua-content">
                                        <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="btnEnviar" onclick="IniciarSeccion()">
                
                                            <b> Iniciar Sesión </b>
                
                                        </button>
                                </div>

            </form>
            
            
</div>
        
        <div class="ua-main-content-partition ua-content-alternative ua-content-alternative--right">
            <h2 class="ua-headline ua-headline-inverted jui-headline-headline jui-headline-headlineBig">
                 ¿Primera vez por aquí?
            </h2>
            <p class="ua-headline-sub">
                ¡Vamos! Bienvenido al Gestor de Historias Clinicas.
            </p>
            
        </div>
    </div>



</div>


        </div>
    



<iframe src="https://bid.g.doubleclick.net/xbbe/pixel?d=KAE" style="display: none;"></iframe>

</body>

</html>