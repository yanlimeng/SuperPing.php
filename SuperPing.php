<html>
<div id="ip4" style="font-size:12px">
<div class='col-md-3'>
<br><br>
<h6 style='color:#ffffff;'>Datos del encabezado o HTTP</h6>
<?php 
if($_SERVER["HTTP_X_FORWARDED_FOR"]){ 
echo "&#10132; La direcciÃ³n Ip de tu proxy es: {$_SERVER['REMOTE_ADDR']}<br>"; 
echo "&#10132; Tu direcciÃ³n IP real es: {$_SERVER['HTTP_X_FORWARDED_FOR']}<br>";
}else{ 
echo "&#10132; Tu direcciÃ³n IP es: {$_SERVER['REMOTE_ADDR']}<br>";}

/*echo '&#10132; Tu IP registrada: '; echo $ip=$row["ip"];	
echo '<br>';*/				
echo "&#10132; La direcciÃ³n Ip de tu proxy es: {$_SERVER['REMOTE_ADDR']}<br>";
echo "&#10132; Server software: {$_SERVER['SERVER_SOFTWARE']}<br>";
/*echo "&#10132; Tu direcciÃ³n IP es: {$_SERVER['REMOTE_ADDR']}<br>";
echo "&#10132; Tu direcciÃ³n IP tras Proxy: {$_SERVER['HTTP_X_FORWARDED_FOR']}<br>";
*/echo "&#10132; El servidor es: {$_SERVER['SERVER_NAME']}<br>"; 
echo "&#10132; Puerto del servidor web: {$_SERVER['SERVER_PORT']}<br>";
echo "&#10132; Te has conectado usando el puerto: {$_SERVER['REMOTE_PORT']}<br>"; 
echo "&#10132; IP servidor donde se ejecuta el script: {$_SERVER['SERVER_ADDR']}<br>"; 
?>



<br><br><br>
<h6 style='color:#ffffff;'>Datos del navegador de usuari@</h6>
<div class="marco2">
<!-- Nombre y version del navegador -->
<script type="text/javascript">
//<![CDATA[
var nVer = navigator.appVersion;
var nAgt = navigator.userAgent;
var browserName  = navigator.appName;
var fullVersion  = ''+parseFloat(navigator.appVersion); 
var majorVersion = parseInt(navigator.appVersion,10);
var nameOffset,verOffset,ix;
if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
 browserName = "Microsoft Internet Explorer";
 fullVersion = nAgt.substring(verOffset+5);}
else if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
 browserName = "Opera";
 fullVersion = nAgt.substring(verOffset+6);}
else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
 browserName = "Chrome";
 fullVersion = nAgt.substring(verOffset+7);}
else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
 browserName = "Safari";
 fullVersion = nAgt.substring(verOffset+7);}
else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
 browserName = "Firefox";
 fullVersion = nAgt.substring(verOffset+8);}
else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < (verOffset=nAgt.lastIndexOf('/')) ) 
{browserName = nAgt.substring(nameOffset,verOffset);
 fullVersion = nAgt.substring(verOffset+1);
 if (browserName.toLowerCase()==browserName.toUpperCase()) {
  browserName = navigator.appName;}}
if ((ix=fullVersion.indexOf(";"))!=-1) fullVersion=fullVersion.substring(0,ix);
if ((ix=fullVersion.indexOf(" "))!=-1) fullVersion=fullVersion.substring(0,ix);
majorVersion = parseInt(''+fullVersion,10);
if (isNaN(majorVersion)) {
 fullVersion  = ''+parseFloat(navigator.appVersion); 
 majorVersion = parseInt(navigator.appVersion,10);}
document.write('&#10132;  Usas el navegador: '+browserName+', la versiÃ³n: '+fullVersion);
//]]>
</script><br>
<!-- Hasta aqui nombre y version del navegador -->

  
  
<!-- Tu agente de usuario es -->
&#10132; Agente:
<script type="text/javascript">document.write(navigator.userAgent);</script><br>
<!-- Hasta aqui Tu agente de usuario es -->


<!-- Medida de la pantalla del navegador web -->
&#10132; Medida de la pantalla del navegador web:
<script type="text/javascript">document.write (document.documentElement.clientWidth,' x ',document.documentElement.clientHeight,' pixeles ');
</script><br>
<!-- Hasta aqui Medida de la pantalla del navegador web -->


<!-- ¿Tu Navegador acepta Cooookies? -->
&#10132; Â¿Tu Navegador acepta Cookies?
<script type="text/javascript">
if(navigator.cookieEnabled==true)
cookiesok="EstÃ¡ permitido";else if(navigator.cookieEnabled==false)
cookiesok="OlvÃ­dalo";else
cookiesok="Respuesta desconocida";
document.write (cookiesok);
</script><br>
<!-- Hasta aqui ¿Tu Navegador acepta Cooookies? -->

<!-- Â¿Tu Navegador acepta Java? -->
&#10132; Â¿Tu Navegador acepta Java?
<script type="text/javascript">
if(navigator.javaEnabled()==true)
javaok="Java estÃ¡ activa";else if(navigator.javaEnabled()==false)
javaok="Java estÃ¡ desactivada";else
javaok="Respuesta desconocida";
document.write (javaok);
</script><br>
<!-- Hasta aqui Â¿Tu Navegador acepta Java? -->

<!-- Pluggins instalados en el navegador -->
&#10132; Pluggins instalados en el navegador:
<a style='color:#ffffff;' href="javascript:pinst();">Ver lista</a><br>
<div id="pl"></div>
<script type="text/javascript">
//<![CDATA[
function pinst(){
if(navigator.appName.indexOf("Microsoft Internet Explorer") != -1){
alert('Lo siento, solo esta disponible esa informaciÃ³n para Firefox y Chrome');}
else{
var num_of_plugins=navigator.plugins.length;
var ventana=window.open('','w','width=400,height=600,left=50,top=50');
for(var i=0;i<num_of_plugins;i++){var list_number=i+1;
ventana.document.write(""+list_number+"- "+navigator.plugins[i].name+"  <br />")}}}
//]]>
</script>
<!-- Hasta aqui Pluggins instalados en el navegador -->
</div>
<br><br><br>
</div>
  
<div class='col-md-3'>
<br>
<h6 style='color:#ffffff;'>Datos del equipo de usuari@</h6>

<div class="marco2">
<!-- Ancho de la resoluciÃ³n de tu pantalla -->
&#10132; Ancho de la resoluciÃ³n de tu pantalla: 
<script type="text/javascript">document.write(window.screen.width, " pixeles")
</script><br>
<!-- Hasta aqui Ancho de la resoluciÃ³n de tu pantalla -->

<!-- Altura de la resoluciÃ³n de tu pantalla -->
&#10132; Altura de la resoluciÃ³n de tu pantalla:
<script type="text/javascript">document.write(window.screen.height, " pixeles")
</script><br>
<!-- Hasta aqui Altura de la resoluciÃ³n de tu pantalla -->

<!-- Profundidad del color en Bits -->
&#10132; Profundidad del color en Bits:
<script type="text/javascript">
//<![CDATA[
var colorDepth = window.screen.colorDepth;
if (colorDepth == 4)
	document.write("16 colors");
else if (colorDepth == 8)	
	document.write("256 colors");
else if (colorDepth > 8)
	document.write(colorDepth + " bits");
else
	document.write("Unknown");
//]]>
</script><br>
<!-- Hasta aqui Profundidad del color en Bits -->

<!-- Fecha actual -->
&#10132; Fecha actual:
<script type="text/javascript">document.write (fechahoy());
ahora=new Date();function fechahoy(){var diasemana=new Array('Domingo','Lunes','Martes','MiÃ©rcoles','Jueves','Viernes','SÃ¡bado');var nombremes=new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');var ahora;var fecha=new Date();var ano=fecha.getFullYear();var mes=fecha.getMonth();var dia=fecha.getDay();var num=fecha.getDate();ahora=diasemana[dia]+", "+num+" de "+nombremes[mes]+" de "+ano;return ahora;}
</script><br>
<!-- Hasta aqui Fecha actual -->


<!-- REloj -->
<div id='reloj'></div>	
<!-- //REloj -->

<!-- Tu zona horaria es -->
&#10132; Zona horaria:
<script type="text/javascript">checkTimeZone();
function checkTimeZone(){var rightNow=new Date();var rightNowString=rightNow.toString();var lastColon=rightNowString.lastIndexOf(":");var rightNowZone=rightNowString.substring(lastColon+4,rightNowString.length);var rightNowZone=rightNowZone.replace(/ \d\d\d\d$/,"");var rightNowZone=rightNowZone.replace(/ \d\d\d\d $/,"");var date1=new Date(rightNow.getFullYear(),0,1,0,0,0,0);var date2=new Date(rightNow.getFullYear(),6,1,0,0,0,0);var temp=date1.toGMTString();var date3=new Date(temp.substring(0,temp.lastIndexOf(" ")-1));var temp=date2.toGMTString();var date4=new Date(temp.substring(0,temp.lastIndexOf(" ")-1));var hoursDiffStdTime=(date1-date3)/(1000*60*60);var hoursDiffDaylightTime=(date2-date4)/(1000*60*60);if(hoursDiffDaylightTime==hoursDiffStdTime){document.writeln(rightNowZone+", Horario normal");}else{document.writeln(rightNowZone+", Horario de verano");}}
</script><br>
<!-- Hasta aqui Tu zona horaria es -->

<!-- Sistema operativo -->
&#10132; Sistema operativo:
<script type="text/javascript">
var OSName="Unknown OS";
if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
document.write(OSName);
</script><br>
<?php 
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getPlatform($user_agent) {
   $plataformas = array(
      'Windows 10' => 'Windows NT 10.0+',
      'Windows 8.1' => 'Windows NT 6.3+',
      'Windows 8' => 'Windows NT 6.2+',
      'Windows 7' => 'Windows NT 6.1+',
      'Windows Vista' => 'Windows NT 6.0+',
      'Windows XP' => 'Windows NT 5.1+',
      'Windows 2003' => 'Windows NT 5.2+',
      'Windows' => 'Windows otros',
      'iPhone' => 'iPhone',
      'iPad' => 'iPad',
      'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
      'Mac otros' => 'Macintosh',
      'Android' => 'Android',
      'BlackBerry' => 'BlackBerry',
      'Linux' => 'Linux',
      'Ubuntu' => 'Ubuntu',
      'Xubuntu' => 'Xubuntu',
      'Manjaro' => 'Manjaro',
   );
   foreach($plataformas as $plataforma=>$pattern){
      if (eregi($pattern, $user_agent))
         return $plataforma;
   }
   return 'Otras';
}
$SO = getPlatform($user_agent);
echo "&#10132; Plataforma del Sistema Operativo: ".$SO;
?>
<!-- Hasta aqui Sistema operativo -->
</div><br>






<br><br>
<h6 style='color:#ffffff;'>Datos web de esta pÃ¡gina URL</h6>
<div class="marco2"> 
&#10132; TÃ­tulo de la pÃ¡gina:<br>github.com/yanlimeng
<!--<script type="text/javascript">document.write(document.title);</script>--><br>

&#10132; Ãltima actualizaciÃ³n:
<script type="text/javascript">document.write(document.lastModified);</script><br>
<!--&#10132; DirecciÃ³n URL completa de esta pÃ¡gina:<br>
<script type="text/javascript">document.write(document.URL);</script><br>

&#10132; Nombre del dominio:
<script type="text/javascript">document.write(document.domain);</script><br>-->  


<!-- Historial de navegaciÃ³n en este sitio -->
&#10132; Historial de navegaciÃ³n en este sitio:
<script type="text/javascript">var times=history.length; document.write(+times+' paginas en esta sesiÃ³n');</script><br>
<!-- Hasta aqui Historial de navegaciÃ³n en este sitio -->


<?php
echo "&#10132; Vienes de: {$_SERVER['HTTP_REFERER']}<br>";
?>
</div><br>
</div>


</div>

</html>
