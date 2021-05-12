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

				<table border="1">
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
							<h4>Fallas Seleccionadas: </h4>
						</td>
						<td style="width:300px;" align="center">
							<?php
							if (isset($_POST['sub'])) {
								if (is_array($_POST['falla'])) {
									$selected = '';
									$num_fallas = count($_POST['falla']);
									$current = 0;
									foreach ($_POST['falla'] as $key => $value) {
										if ($current != $num_fallas-1)
											$selected .= '■ '.$value.'.<br>';
										else
											$selected .= '■ '.$value.'.';
										$current++;
									}
								}
								echo '<p>'.$selected.'</p>';
							}?>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

	


