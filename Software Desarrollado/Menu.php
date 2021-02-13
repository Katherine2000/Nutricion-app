<?php
    include("conexion.php");

    
?>
<!DOCTYPE html>
<html lang="es">

<head>
    
    
    <title>Menu del Nutricionista</title>


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
        </style>

    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    
<style>.links[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:end;justify-content:flex-end;-ms-flex-positive:1;flex-grow:1}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{color:#fff;text-decoration:none;font-size:16px;letter-spacing:1px;text-transform:uppercase;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;white-space:nowrap}.links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #1071e5 solid;margin-bottom:-2px;padding:5px 0}.drop-down-label[_ngcontent-fuk-c1], .user-email[_ngcontent-fuk-c1]{cursor:pointer;padding:6px 0}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:32px}.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:32px}.links[_ngcontent-fuk-c1]   .link-icon[_ngcontent-fuk-c1]{margin-left:5px}.username[_ngcontent-fuk-c1]{max-width:184px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.notification-bell[_ngcontent-fuk-c1]{margin-left:32px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 32px}@media only screen and (max-width:1024px){.links[_ngcontent-fuk-c1]   .nav-link[_ngcontent-fuk-c1] + .nav-link[_ngcontent-fuk-c1]{margin-left:24px}.links[_ngcontent-fuk-c1]   .team-inviter[_ngcontent-fuk-c1]{margin-right:24px}.seperator[_ngcontent-fuk-c1]{height:28px;width:1px;background-color:#dfe3e8;margin:0 16px 0 24px}.notification-bell[_ngcontent-fuk-c1]{margin-left:24px}.username[_ngcontent-fuk-c1]{max-width:152px}}@media only screen and (max-width:1210px){.team-inviter[_ngcontent-fuk-c1]{display:none}}.press[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .press   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #00c2a8 solid}.chart[_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1], .chart   [_nghost-fuk-c1]   .links[_ngcontent-fuk-c1]   .nav-link.active[_ngcontent-fuk-c1]{border-bottom:2px #f96b13 solid}.enforce-sans-serif[_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1], .enforce-sans-serif   [_nghost-fuk-c1]   .nav-link[_ngcontent-fuk-c1]{font-family:"Source Sans Pro",sans-serif}.user-email[_ngcontent-fuk-c1]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-align:center;align-items:center}.drop-down-label[_ngcontent-fuk-c1]{margin-left:5px;font-size:14px;white-space:nowrap;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-webkit-user-select:none;-ms-user-select:none;user-select:none}.drop-down-label[_ngcontent-fuk-c1]   .drop-down-triangle[_ngcontent-fuk-c1]{content:"";display:block;width:0;height:0;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #fff;margin-left:5px}</style><style>[_nghost-fuk-c7]{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-align:center;align-items:center;background-color:#282c33;min-height:62px;max-height:62px;padding:0 30px;color:#fff}</style>


</head>


<body background="https://us.123rf.com/450wm/nikol85/nikol851708/nikol85170800008/83296543-textura-del-viejo-primer-de-papel-azul-claro-estructura-de-un-cart%C3%B3n-denso-el-fondo-turquesa-.jpg?ver=6" >
    


        
    <lucid-user-settings-app _nghost-fuk-c0="" ng-version="9.0.0">

        <div _ngcontent-fuk-c0="" class="app" lucidpopupanchor="">

            <lucid-navigation-header _ngcontent-fuk-c0="" class="enforce-sans-serif chart" _nghost-fuk-c1="">
        <lucid-navigation-header-bar _ngcontent-fuk-c1="" _nghost-fuk-c7="">
            <lucid-navigation-header-logo _ngcontent-fuk-c1="" _nghost-fuk-c8="">
                <a _ngcontent-fuk-c8="" class="product-icon" href="Menu.php">
                    <lucid-icon _ngcontent-fuk-c8="" _nghost-fuk-c10="">

                        <svg width="0" height="26" viewBox="0 0 20 20" fill="none">
                            <img src="http://centrojade.com/wp-content/uploads/2018/07/habitos-nutricion-fruta-1.jpg"   height="40"  width="150" >
        
                        </svg>
                    </lucid-icon><!---->
                </a><!---->
            </lucid-navigation-header-logo><!---->



 <div _ngcontent-fuk-c1="" class="links" data-selenium-id="navigation-links">
    <a _ngcontent-fuk-c1="" class="nav-link" lucidnavigationlink="" id="documents" href="NutricionistaHistoriaClinica.php"> Documentos: Historias Clinicas</a>

    <a _ngcontent-fuk-c1="" class="nav-link" href="ConfiguracionUsuario.php"> Cuenta </a>

 </div>

 <lucid-activity-feed _ngcontent-fuk-c1="" class="notification-bell" _nghost-fuk-c12="">
    <span _ngcontent-fuk-c12="" lucidcallout="">
        <lucid-icon _ngcontent-fuk-c12="" class="bell" _nghost-fuk-c10="">
            
                
            
        </lucid-icon>

        <lucid-badge _ngcontent-fuk-c12="" class="badge lucid-blue hide" _nghost-fuk-c11="">

        </lucid-badge>
    </span></lucid-activity-feed>
<div _ngcontent-fuk-c1="" class="seperator">
    
</div>

<div _ngcontent-fuk-c1="" calloutadditionalclasses="white" >
    <div _ngcontent-fuk-c1="" class="drop-down-label">

            <a href="index.php">SALIR</a>

            
        
    <div _ngcontent-fuk-c1="" class="drop-down-triangle">                
                
    </div>
</div>
</div>

</lucid-navigation-header-bar>
</lucid-navigation-header>
</div>
</lucid-user-settings-app>

    
<div>
    

</div>




  




  




</body>






</html>