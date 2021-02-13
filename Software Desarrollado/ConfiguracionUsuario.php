<?php
    include("conexion.php");


    if(isset($_POST['Guardar'])) {
    

        $Vcedula =  $_POST['Cedula'];
        $VPrimerNombre =  $_POST['VPrimerNombre'];
        $VSegundoNombre =  $_POST['VSegundoNombre'];
        $VPrimerApellido =  $_POST['VPrimerApellido'];
        $VSegundoApellido =  $_POST['VSegundoApellido'];
        
        $VTelefono =  $_POST['VTelefono'];


        $sql = "UPDATE usuario SET PrimerNombre= '$VPrimerNombre', SegundoNombre= '$VSegundoNombre', PrimerApellido= '$VPrimerApellido',SegundoApellido= '$VSegundoApellido' ,Telefono= '$VTelefono'  WHERE usuario.cedula='$Vcedula'";
        
        $query= mysqli_query($mysqli, $sql);

        
    }
    
?>

<!DOCTYPE html>
<html lang="es">

<head>


	


	<title>Configuracion</title>


	<link href="https://assets.jimstatic.com/dash/static/css/10.85336241.chunk.css" rel="stylesheet"><link href="https://assets.jimstatic.com/dash/static/css/main.c8a96e0f.chunk.css" rel="stylesheet"></head>




<body class="is-brandon-loaded">


	<div id="root">
		<div class="SnackbarContainer">
			<div class="topbar_root__3LZWV">

				<a class="topbar_backButton__M86qn" href="Menu.php">
				<span class="Icon-module_icon__36Zez topbar_backButtonIcon__3EbJE Icon-module_icon20__3lNo0">
					<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
	  					<path d="M8.614 16.65a1.206 1.206 0 0 0-.025-1.671l-3.956-3.995h12.999a1.005 1.005 0 1 0 0-2.01L4.633 8.972l3.971-4.01c.446-.45.45-1.173.01-1.628a1.099 1.099 0 0 0-1.582.002l-5.753 5.98a1 1 0 0 0 0 1.387l5.738 5.959a1.1 1.1 0 0 0 1.597-.012z" fill="currentColor" fill-rule="nonzero"></path>
					</svg>
				</span>


				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Volver
					</font>
				</font></a>
			</div>


	<div class="contentPage_root__3PaEY contentPage_noSidebar__3iQNb">
		<div><div class="ProfileAvatar_root__3i76G">
			<label class="EditAvatar_root__1aNsi ProfileAvatar_editAvatar__2D1_c" for="profile-image-input" title="Carga tu imagen">
				<input type="file" id="profile-image-input" hidden="" accept="image/png, image/jpeg" size="5242880">
				<div role="img" aria-label="Tu imagen cargada" class="RoundedAvatar_root__3u6dq EditAvatar_avatar__3aAe6" style="background-image: url(&quot;https://jimdo-user-account-service-storage-prod.s3.amazonaws.com/avatars/eb6bb8b1-d1e9-46db-a9cf-6b9b5fdc1600/resized/400/avatar?AWSAccessKeyId=AKIAIHZUFNLFTKECTSFA&amp;Signature=XIVd12SkWdiZFBSMn%2FH27jUp0mk%3D&amp;Expires=1585530269&quot;);"></div>
				<span class="Typography-module_typography__1aUok Typography-module_bodySmall__1w-26 EditAvatar_hoverText__2_qQV useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO useStyles-module_color-systemColorGrey-000__31svS">
					<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carga tu imagen</font>
				</font>
			</span><div class="EditAvatar_editIcon__2B5D9"><span class="Icon-module_icon__36Zez Icon-module_icon20__3lNo0"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
<path fill="currentColor" d="M11.074 7.488L4.92 13.642l-.364 1.802 1.803-.363 6.154-6.154-1.439-1.439zm1.414-1.414l1.44 1.439 1.244-1.244-1.44-1.44-1.244 1.245zM2 18l1.08-5.345L13.732 2.001 18 6.27 7.346 16.922 2 18z"></path>
</svg></span></div></label><div class="ProfileAvatar_userInformation__2iN38"><h1 class="Typography-module_typography__1aUok Typography-module_heading1__3ODK9 useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO"><font style="vertical-align: inherit;">

	<font style="vertical-align: inherit;">Nutricionista</font></font></h1><a class="Link-module_link__zhb0A ProfileAvatar_logoutLink__2Cnna" href="index.php">
	<font style="vertical-align: inherit;">
		<font style="vertical-align: inherit;">

			Cerrar sesión

		</font>
	</font></a></div></div><div class="tabs_root__3qH7q"><font style="vertical-align: inherit;"><a aria-current="page" class="tab_root__39uhv tab_selected__2Oh_V" href="/profile/"><font style="vertical-align: inherit;">Generales</font></a></font></div>







<form  method="post" action="ConfiguracionUsuario.php">






<div class="profileRow_root__bv8R8">
	<p class="Typography-module_typography__1aUok Typography-module_bodyDefault__H2nhY Typography-module_fontWeightBold__PPKYR profileRow_label__2b9hr useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO">

		<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">Cedula</font>
		</font></p>


<div class="profileRow_content__1DxAY">
	<div class="Input-module_inputWrapper__15iRB profileGeneralFirstNameInput">
		<label class="Input-module_inputLabel__1c1JC" for="firstName">
			<font style="vertical-align: inherit;">
				<font style="vertical-align: inherit;">Cedula
				</font>
			</font>
		</label>
	<div class="Input-module_inputFieldWrapper__2w64c">
		<input type="text" name="Cedula" class="Input-module_input__3MBkT Input-module_inputRightElement__2dLA3" ">

		
	</div>
</div>




<div class="profileRow_root__bv8R8">
	<p class="Typography-module_typography__1aUok Typography-module_bodyDefault__H2nhY Typography-module_fontWeightBold__PPKYR profileRow_label__2b9hr useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO">

		<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">Nombres</font>
		</font></p>


<div class="profileRow_content__1DxAY">
	<div class="Input-module_inputWrapper__15iRB profileGeneralFirstNameInput">
		<label class="Input-module_inputLabel__1c1JC" for="firstName">
			<font style="vertical-align: inherit;">
				<font style="vertical-align: inherit;">Nombres
				</font>
			</font>
		</label>
	<div class="Input-module_inputFieldWrapper__2w64c">
		<input type="text" name="VPrimerNombre" class="Input-module_input__3MBkT Input-module_inputRightElement__2dLA3" value="jeison">

		<input type="text" name="VSegundoNombre" class="Input-module_input__3MBkT Input-module_inputRightElement__2dLA3" value="fernando">

		
	</div>
</div>




<div class="Input-module_inputWrapper__15iRB">
			<label class="Input-module_inputLabel__1c1JC" for="lastName">

				<font style="vertical-align: inherit;">

					<font style="vertical-align: inherit;">Apellidos
					</font>
				</font>
			</label>

			<div class="Input-module_inputFieldWrapper__2w64c">
				<input  type="text" name="VPrimerApellido" class="Input-module_input__3MBkT" >

				<input  type="text" name="VSegundoApellido" class="Input-module_input__3MBkT" >
			</div>
		</div>
	</div>
</div>


<div class="profileRow_root__bv8R8">
	<p class="Typography-module_typography__1aUok Typography-module_bodyDefault__H2nhY Typography-module_fontWeightBold__PPKYR profileRow_label__2b9hr useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO">

		<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit;">Telefono
			</font>
		</font>
	</p>

	<div class="profileRow_content__1DxAY">

		<div class="Input-module_inputWrapper__15iRB profileGeneralFirstNameInput">
			<label class="Input-module_inputLabel__1c1JC" for="firstName">
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Telefono
					</font>
				</font>
			</label>
			<div class="Input-module_inputFieldWrapper__2w64c">
				<input id="VTelefono" type="text" name="VTelefono" class="Input-module_input__3MBkT Input-module_inputRightElement__2dLA3" >
			</div>
		</div>
	</div>




</div>




</div></div></div></div>











<div class="profileRow_root__bv8R8">
	<p class="Typography-module_typography__1aUok Typography-module_bodyDefault__H2nhY Typography-module_fontWeightBold__PPKYR profileRow_label__2b9hr useStyles-module_margin-bottom-zero__19osT useStyles-module_margin-zero__2pH6A useStyles-module_padding-zero__2HMDO">

		
	</p>

	<div class="profileRow_content__1DxAY">
			<button class="Button-module_button__8UevY Button-module_primaryButton__2bBcI profileGeneralPasswordButton" name="Guardar">
				<span class="Button-module_children__1xD2P">
					<font style="vertical-align: inherit;">
						<font  style="vertical-align: inherit;">Guardar Informacion
						</font>
					</font>
				</span>

			</button>

	</div>




</div>
</form>







</body>








</html>
