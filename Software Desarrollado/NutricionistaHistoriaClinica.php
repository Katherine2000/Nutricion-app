<?php
    include("conexion.php");
    
    

    if(isset($_POST['GuardarDatos'])) {

        /*echo "Entro";*/


        $VCC =  $_POST['CC'];
        $VTD =  $_POST['TD'];
        $VPN =  $_POST['PN'];
        $VSN =  $_POST['SN'];
        $VPA =  $_POST['PA'];
        $VSA =  $_POST['SA'];
        $VDir =  $_POST['Dir'];
        $VEdad=  $_POST['Edad'];
        $VFN =  $_POST['FN'];
        $VPeso =  $_POST['Peso'];
        $VTel =  $_POST['Tel'];
        $VOC =  $_POST['OC'];
        $VCR =  $_POST['CR'];
        $VCorreo =  $_POST['Correo'];
        $VES =  $_POST['ES'];
        $VSexo=  $_POST['Sexo'];
        
        
        

        $sql = "INSERT INTO usuario VALUES ('$VCC',3,'$VPN','$VSN','$VPA','$VSA','$VTel','$VCorreo','$VSexo','$VEdad','$VES','$VPeso','$VOC','1',NULL)";

        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    
    
    if(isset($_POST['GuardarDatosHistoria'])) {

        /*echo "Entro en historia clinica";*/


        $VCC2 =  $_POST['CC2'];
        $CDN =  $_POST['CDN'];
        $VPN =  $_POST['MC'];        
        $VEnf =  $_POST['Enfermedades'];
        $VAA =  $_POST['AA'];        
        $VSA =  $_POST['AM'];       
        $VIM =  $_POST['IM'];        
        $VAS=  $_POST['AS'];
        $VANT =  $_POST['ANT'];        
        $VFuma =  $_POST['Fuma'];
        $VBB =  $_POST['BB'];
        $VEJ =  $_POST['EJ'];
        $VDES =  $_POST['DES'];
        $VALM =  $_POST['ALM'];
        $VCEN =  $_POST['CEN'];        
        $VH=  $_POST['H'];        
        $VA=  $_POST['A'];
        $VDF=  $_POST['DF'];
        
        $VUltima=  $_POST['Ultima'];

        $sql = "INSERT INTO historiaclinica VALUES ('$VCC2','$CDN','29/05/2020','$MC','$VEnf','$VAA','$VAM','$VIM','$VAS',NULL,NULL,'$VANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$VFUMA','$VBB',NULL,NULL,NULL,NULL,NULL,'$VEJ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL, '$VDES','$VDES','$VALM','$VALM','$VCEN','$VCEN','$VH','$VA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$VDF')";

        $query= mysqli_query($mysqli, $sql);
        
    
    }
    
    
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <link rel="stylesheet" href="https://account-assets.jimstatic.com/static/css/output.9d65bbbabf24.css" type="text/css">
    
    
    <title>Menu del Nutricionista Historia Clinica</title>


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


            textarea {
  background-color: white;
  width: 550px;
  border: 5px  lucid-blue;
  padding: 50px;
  margin: 20px;
}

        </style>

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
    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="documents" href="Menu.php"> Documentos: Historias Clinicas</a>

    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="account" href="ConfiguracionUsuario.php"> Cuenta </a>

    
 </div>

 
<div _ngcontent-fuk-c1="" class="seperator">
    
</div>

<div _ngcontent-fuk-c1="" calloutadditionalclasses="white" class="user for-select-navbar-tab" lucidoverlay="">
    <div _ngcontent-fuk-c1="" class="drop-down-label">

            <a href="index.php">Salir</a>

            
        
    <div _ngcontent-fuk-c1="" class="drop-down-triangle">
    
    </div>
</div>
</div>

</lucid-navigation-header-bar>
</lucid-navigation-header>
</div>
</lucid-user-settings-app>





        <br>
        
        
        
<form name="datosp" class="ua-login ua-form" method="POST" action="NutricionistaHistoriaClinica.php" novalidate=""> 
               
       <center>     
<h2>HISTORIA CLINICA</h2>
<?php

        $conexion2 = new usuario;

?>


<textarea><?php ECHO  $conexion2->EncabezadoAdmin($mysqli)[0]; ?></textarea>

        </center>

        
        <br>


        <br>

        <center>
        
        <h2>DATOS DEL PACIENTE</h2>
        <table width="60%" border="2" bordercolor="#000000" cellspacing="10" cellpadding="10">
                
                <th>
                        <p><div>
                            <h3> <label >Documento:</label> </h3>
                            <input name="CC" />
                        </div></p>

                        <br>
                        <p><div>
                            <h3> <label >Tipo documento:</label> </h3>                           
                            <select name="TD">

                            <option>C.C</option>
                            <option>T.I</option>
                
                            </select>
                        </div></p>

                        <br>

                        

                        <p><div>
                            <h3> <label>Primer Nombre:</label> </h3>
                            <input name="PN"/>
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Segundo Nombre:</label> </h3>
                            <input name="SN" />
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Primer Apellido:</label> </h3>
                            <input name="PA" />
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Segundo Apellido:</label> </h3>
                            <input name="SA"/>
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Dirección:</label> </h3>
                            <input name="Dir" />
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Edad:</label> </h3>
                            <input name="Edad" />
                        </div></p>

                               <br>


                </th>

                <th>
                    
                        <p><div>
                            <h3> <label>Fecha Nacimiento:</label> </h3>
                            <input name="FN"/>
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Peso:</label> </h3>
                            <input name="Peso" />
                        </div></p>

                        <br>

                        

                        <p><div>
                            <h3> <label>Teléfono:</label> </h3>
                            <input name="Tel"/>
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Ocupación:</label> </h3>
                            <input name="OC" />
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Ciudad:</label> </h3>
                            <input name="CR"/>
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Correo:</label> </h3>
                            <input name="Correo" />
                        </div></p>

                        <br>

                        <p><div>
                            <h3> <label>Estatura:</label> </h3>
                            <input name="ES" />
                        </div></p>
                        
                         <br>
                        
                        <p><div>
                            <h3> <label>Sexo:</label> </h3>
                            <select name="Sexo">

                            <option>M</option>
                            <option>F</option>
                
                            </select>
                        </div></p>
                        <br>

                        

                    </th>
                
            </table>
            </center>

            <br>
            <br>


            <center>
            
            
            
            
           
            <div class="ua-content">
                    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit" name="GuardarDatos">
                        <a>      Guardar Datos PCT                                         
                        </a>
                        
                    </button>
            
            </div>


</form>





<form name="datosp2" class="ua-login ua-form" method="POST" action="NutricionistaHistoriaClinica.php" novalidate=""> 
   
                <center>
            
                     <p><div>
                                 <h3> <label>Cedula Del Nutricionista:</label> </h3>
                                    <input name="CDN" />
                                </div></p>
                                
                     <p><div>
                                 <h3> <label>Documento Paciente</label> </h3>
                                    <input name="CC2" />
                                </div></p>
                                
                                
                                
               
                    <br> 
                    <br> 
                    <br>
              <div class="ua-content">
                    <button class="ua-button jui-button-button jui-button-primaryButton jui-button-noGutter" type="submit"  name="GuardarDatosHistoria">
                        <a>      Guardar Datos Historia                                           
                        </a>
                        
                    </button>
            
            </div>
                         
                    <br> 
                    <br> 
                    <br>
            
            <table width="60%" border="2" bordercolor="#000000" cellspacing="10" cellpadding="10">
            
            
            <th>
                    <p><div>
                    
                    <h2>HISTORIA MEDICA</h2>
                    
                    
                    
                    <br>
                    <br>
                    
                    <p><div>
                                 <h3> <label>Motivo Consulta:</label> </h3>
                                    <input name="MC" />
                                </div></p>
                    
                    
                    
                    
                    
        
                    
                    <?php
                            
                             $conexion2 = new usuario;
                    ?>    
                    
                    <h3> <label>Enfermedad Presente:</label> </h3>    
                    <select name="Enfermedades">
        
                    <option><?php ECHO  $conexion2->EnfermedadAdmin($mysqli)[0]; ?></option>
                    <option><?php ECHO  $conexion2->EnfermedadAdmin($mysqli)[1]; ?></option>
                    <option><?php ECHO  $conexion2->EnfermedadAdmin($mysqli)[2]; ?></option>
                    <option>Enfermedad 4</option>
                    <option>Ninguna</option>
                    <option>Otra</option>
                    
                     
                    <br>
                    
                    <p><div>
                            <h3> <label>Cual?:</label> </h3> 
                            <input name="EnfermedadNueva"/>
                     </div></p>
                    
        
                    </select>
                    
                    </div></p>
                    
                    
                    <br>
                    <br>
                    
                    
                    <center>
                    
                    <table width="60%" border="2" bordercolor="#000000" cellspacing="10" cellpadding="10">
                    
                    <th>
            
                    <h3> <label>PREGUNTAS:</label> </h3>
                    <br>
                    <br>
                    
        
        
                    <h3>¿Alergia Alimento? </h3>
        
                    <select>        
                    <option>Si</option>
                    <option>No</option>
                    <p>
                    <div>
                            <input name="AA"/>
                    </div>
                     </p>
                    </select>
                    
                    
                    
                    
                    
                    
                    <h3>¿Alergia Medicamento? </h3>
        
                    <select>        
                    <option>Si</option>
                    <option>No</option>
                    <p>
                    <div>
                            <input name="AM"/>
                    </div>
                     </p>
                    </select>
                    
                    
                    
                    
                    <h3>¿Ingiere Algun Medicamento? </h3>
        
                    <select>        
                    <option>Si</option>
                    <option>No</option>
                    <p>
                    <div>
                            <input name="IM"/>
                    </div>
                     </p>
                    </select>
                    
                    
                    
                    <h3>¿Algun Suplemento? </h3>
        
                    <select>        
                    <option>Si</option>
                    <option>No</option>
                    <p>
                    <div>
                            <input name="AS"/>
                    </div>
                     </p>
                    </select>
                    
                    
                    <h3>¿Algun Anticonsetivo? </h3>
        
                    <select>        
                    <option>Si</option>
                    <option>No</option>
                    <p>
                    <div>
                            <input name="ANT"/>
                    </div>
                     </p>
                    </select>
                    
                    
                    <h3>¿Usted Consume Drogas? </h3>
        
                    <select name"Fuma">        
                    <option>Si</option>
                    <option>No</option>
                    
                    </select>
                    
                    
                    <h3>¿Usted Bebe? </h3>
        
                    <select name"BB">        
                    <option>Si</option>
                    <option>No</option>
                    
                    </select>
                    
                    <h3>¿Usted Hace Ejercicio? </h3>
        
                    <select name"EJ">        
                    <option>Si</option>
                    <option>No</option>
                    
                    </select>
                    
                    
                    <?php          
                            $conexion2 = new Usuario;
                    ?>
                    
                    <h3><?php ECHO  $conexion2->PreguntasAdmin($mysqli)[0]; ?></h3>
        
                    <select name"Ultima">        
                    <option>Si</option>
                    <option>No</option>
                    
                    </select>
                    
                    
                    
                    
                    </th>
                    </table>
            
        
                    </center>
                    
                    
                    <br><br><br>
                    <h3>RECOMENDACIONES</h3>
                    
                    
                    <center>
                    
                    <table width="60%" border="2" bordercolor="#000000" cellspacing="10" cellpadding="10">
                    
                    <th>
                            <h3>Desayuno</h3>
                
                            
                            <p>
                            <div>
                                    <input name="DES"/>
                            </div>
                             </p>
                             
                             
                             <h3>Almuerzo</h3>
                
                            
                            <p>
                            <div>
                                    <input name="ALM"/>
                            </div>
                             </p>
                             
                             <h3>CENA</h3>
                
                            
                            <p>
                            <div>
                                    <input name="CEN"/>
                            </div>
                     </p>
                     
                     <h3>HORAS DE SUEÑO</h3>
                     <p>
                            <div>
                                    <input name="H"/>
                            </div>
                             </p>
                             
                             <h3>INGESTA DE AGUA</h3>
                
                            
                            <p>
                            <div>
                                    <input name="A"/>
                            </div>
                     </p>
                     
                     <br>
                    
                    
                    
                    </th>
                    </table>
            
        
                    </center>
                    
                    
                    
                    <br><br><br>
                    <h3>DIANOSTICO FINAL</h3>
                    
                    
                    
                    <textarea name='DF'>Su dianostico es: </textarea>

            
                    
                    
                    
        
                    </center>
        
                    <br>
                    <br>
                    
                    
                    
            </th>
            
            </table>


            <br>
                    <br>    

            

</form>


</body>






</html>