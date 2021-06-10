<?php include "php/source/conexion.php"; ?>

<div class="containter" align="center" id="precarga">
	<br><br><br><br><br>
	<div class="preloader" style="margin-top: 10px"></div>
	<br>
	<div id="contenido">
		<p style="color: #207575; font-size: 20px; font-weight: bold;">Analizando información</p>
	</div>
	<div id="contenido2" class="jsHideContainer" style=";display:none">
		<p style="color: #207575; font-size: 20px; font-weight: bold;">Cargando Diagnóstico</p>
	</div>	
</div>
<?php
	$fab=$_POST['fabricante'];
	$mT=$_POST['modeloT'];
	$falla=$_POST['falla'];

?>
<br>
<section id="carga" style="display: none;">
	<div class="container" align="center">
		<div class="row contact-warp">
			<div class="col-md-12 col-md-offset">
				<h3 style="color: #2fa8a8;">El diagnóstico para tu televisión es el siguiente:</h3>

				<table border="1" width="70%">
					<tr>
						<td style="width:300px;" align="center">
							<h4>Fabricante: </h4>
						</td>
						<td style="width:300px;" align="center">
							<h4><?php echo $fab; ?></h4>
						</td>
					</tr>
					<tr>
						<td style="width: 300px" align="center">
							<h4>Modelo: </h4>
						</td>
						<td align="center">
							<h4><?php echo $mT; ?></h4>
						</td>
					</tr>
					<tr>
						<td align="center">
							<h4>Falla seleccionada:</h4>
						</td>
						<td style="width:300px;" align="center">
							<?php
							if ($falla == "1") {
								echo"<h4>El aparato no enciende</h4>";
							}else if ($falla == "2"){
								echo"<h4>Enciede sin dar video</h4>";
							}else if ($falla == "3"){
								echo"<h4>La TV se ve en blanco y negro</h4>";
							}else{
								echo"<h4>No tiene audio</h4>";
							}
							?>
						</td>
					</tr>
					<?php
						if ($fab == "Panasonic" && $mT == "CT-772" && $falla == "1")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Posible corto circuito en los diodos rectificadores de la fuente de poder: D801, D802, D803 y D804.
							</p>
							<b>Causa 2: </b><br>
							<p>Regulador TR851 (2SC901A) abierto que no ofrece 110VCD en el colector.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Revisar sin corriente electríca que los diodos tengan una impedancia de 15 Ohms en sentido  negativo a positivo,  cambiar el que no lo cumpla.
							</p>
							<b>Solución 2:</b><br>
							<p>Revisar que el regulador tenga 110 VCD en la base y en el colector. de no cumplirse, es necesario reemplazarlo.</p>
						</td>
					</tr>
				<?php }else if ($fab == "Panasonic" && $mT == "CT-772" && $falla == "2")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Capacitor C305 10uF a 15VCD sin aceite dielectríco.</p>
							<b>Causa 2: </b><br>
							<p>Circuito integrado IC301 abierto.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Revisar circuito integrado IC301 (AN229), el pin 2 (entrada) debe tener 9.84 VCD y el pin 15 (salida) debe ofrecer 10 VCD. Si se cumple, reemplazar el capacitor C305 10uF a 15 VCD.
							</p>
							<b>Solución 2:</b><br>
							<p>Sí el circuito integrado no presenta el voltaje mencionado y el capacitor C305 hace el efecto de carga y descarga, la falla se localiza en el circuito IC301 y requiere reemplazo.</p>
						</td>
					</tr>
				<?php }else if ($fab == "Panasonic" && $mT == "CT-772" && $falla == "3")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Los pines 11, 13 y 15 del circuito integrado IC451 (AN242) no tienen una salida de 5.6 VCD.</p>
							<b>Causa 2: </b><br>
							<p>El colector de los transistores de color TR452 Blue Drive, TR453 Red Drive y TR454 Green Drive (2SA564) no ofrece 7.5 VCD.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Sí tenemos 11 VCD en el pin 6 (entrada) en el circuito integrado pero no los 5.6 VCD en las salidas, es necesario reemplazar el circuito.</p>
							<b>Solución 2:</b><br>
							<p>Si se cumple lo anterior y la salida es la correcta, revisar que  no exista corto circuito o apertura en los transistores de color, reemplazar los que presenten esa falla.</p>
						</td>
					</tr>
				<?php }else if ($fab == "Panasonic" && $mT == "CT-772" && $falla == "4")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Falla del transistor TR251 (2SC582) Salida de audio.</p>
							<b>Causa 2: </b><br>
							<p>Resistencia R204 de 47K dañada por pico de voltaje o por el uso.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2" >
							<b>Solución 1: </b><br>
							<p>Revisar que el transistor TR251 tenga un voltaje de 4.1 VCD en la base, 15 VCD  en el colector y 5.5 VCD en el emisor, si el voltaje de la base es el  correcto pero no el del colector, cambiar el transistor.</p>
							<b>Solución 2:</b><br>
							<p>La resistencia recibe 4.4 VCD del pin 14 del circuito IC201, debe reducir el voltaje a 4.1, si no hay voltaje, quiere decir que está abierta y  necesita ser reemplazada. </p>
						</td>
					</tr>
				<?php } ?>
				<?php
						if ($fab == "Sony" && $mT == "KV-20FV10" && $falla == "1")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa</b><br>
							<p>No se activa el Relay RY601 por la apertura del diodo 601 o del transistor drive Q644 (2SC3211A).
							</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Revisar sin corriente electríca y desconectado del anodo del circuito electríco, el diodo 601 para
							asegurarse de que no esté abierto o en corto circuito. Si no hay una impedancia de 15 Ohms, reemplazarlo.
							</p>
							<b>Solución 2:</b><br>
							<p>Revisar que el transistor Q644 cuente con 12VCD en la base y en el colector, si no se cumple, reemplazar el transistor, pues está abierto.</p>
						</td>
					</tr>
				<?php }else if ($fab == "Sony" && $mT == "KV-20FV10" && $falla == "2")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Falla la resistencia RO02 de 10 Ohms, alimenta al circuito integrado CXA2135S "Chroma.Jungla" en el pin 5</p>
							<b>Causa 2: </b><br>
							<p>Transistor Q302 (2SD601A) abierto por sobrecalentamiento</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Revisar la resistencia RO02, si no ofrece 2.2 VCD de alimentación reemplazarla por una de la misma impedancia.</p>
							<b>Solución 2:</b><br>
							<p>Cambiar el transistor Q302 dañado junto con la resistencia R377 de 2.2K a 1/8 W</p>
						</td>
					</tr>
				<?php }else if ($fab == "Sony" && $mT == "KV-20FV10" && $falla == "3")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Los pines 11, 13 y 15 del circuito integrado IC451 (AN242) no tienen una salida de 5.6 VCD.</p>
							<b>Causa 2: </b><br>
							<p>El colector de los transistores de color TR452 Blue Drive, TR453 Red Drive y TR454 Green Drive (2SA564) no ofrece 7.5 VCD.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Solución 1: </b><br>
							<p>Sí tenemos 11 VCD en el pin 6 (entrada) en el circuito integrado pero no los 5.6 VCD en las salidas, es necesario reemplazar el circuito.</p>
							<b>Solución 2:</b><br>
							<p>Si se cumple lo anterior y la salida es la correcta, revisar que  no exista corto circuito o apertura en los transistores de color, reemplazar los que presenten esa falla.</p>
						</td>
					</tr>
				<?php }else if ($fab == "Sony" && $mT == "KV-20FV10" && $falla == "4")
						{
							?>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles causas</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2">
							<b>Causa 1: </b><br>
							<p>Falla del transistor TR251 (2SC582) Salida de audio.</p>
							<b>Causa 2: </b><br>
							<p>Resistencia R204 de 47K dañada por pico de voltaje o por el uso.</p>
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<h4>Posibles soluciones</h4>
						</td>
					</tr>
					<tr>
						<td align="justify" colspan="2" >
							<b>Solución 1: </b><br>
							<p>Revisar que el transistor TR251 tenga un voltaje de 4.1 VCD en la base, 15 VCD  en el colector y 5.5 VCD en el emisor, si el voltaje de la base es el  correcto pero no el del colector, cambiar el transistor.</p>
							<b>Solución 2:</b><br>
							<p>La resistencia recibe 4.4 VCD del pin 14 del circuito IC201, debe reducir el voltaje a 4.1, si no hay voltaje, quiere decir que está abierta y  necesita ser reemplazada. </p>
						</td>
					</tr>
				<?php } ?>
				</table>
				<br><br><br>
			</div>
		</div>
	</div>
</section>

	


