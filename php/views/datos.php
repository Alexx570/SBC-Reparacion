<?php include "php/source/conexion.php"; ?>

<br><section>
	<div class="container" align="center">
		<div class="row contact-warp">
			<div class="col-md-12 col-md-offset">
		<form  name="todo" action="sbc" enctype="multipart/form-data" method="post">
			<table width="60%">
				<tr>
					<td style="width:300px;" align="center">
						<label for="tipo">Aparato</label>
					</td>
					<td>
						<select style="width: 220px" id="tipo" name="tipo" required>
							<option id="0" value="0" disabled selected>Seleccione el aparato</option>
			     			<option id="1" value="television">Televisión</option>
                            <option id="2" value="estereo">Estéreo</option>
                        </select>
					</td>
				</tr>
				<tr>
					<td style="width:300px;" align="center">
						<label for="fabricante">Fabricante</label>
					</td>
					<td style="width:300px;">
						<select style="width: 220px" id="fabricante" name="fabricante" required disabled>
							<option id="0" value="0" disabled selected >Seleccione el fabricante</option>
							<?php
								$sql="SELECT * FROM fabricante";
								$query = $con ->query($sql);
								while ($fab=$query ->fetch_array()){
							?>
			     			<option  id="<?php echo $fab['id_fabricante']?>"  value="<?php echo $fab['fabricante']?>">
			     				<?php echo $fab['fabricante']?></option>

			     			<?php } ?>
                        </select>
					</td>
				</tr>
				<tr>
					<td style="width:300px;" align="center">
						<label for="modelo">Modelo</label>
					</td>
					<td style="width:300px;">
						<select style="width: 220px;" id="modeloT" name="modeloT" required disabled>
							<option id="0" value="0" disabled selected>Seleccione el modelo</option>

			     			<?php
								$sql="SELECT * FROM aparato WHERE tipo = 'Televisión'";
								$query = $con ->query($sql);
								while ($mod=$query ->fetch_array()){
							?>
			     			<option id="<?php echo $mod['id_aparato']?>" value="<?php echo $mod['modelo']?>">
			     				<?php echo $mod['modelo']?></option>
			     			<?php } ?>

                        </select>

                        <select style="width: 220px; display: none;" id="modeloE" name="modeloE" required disabled>
							<option id="0" value="0" disabled selected>Seleccione el modelo</option>

			     			<?php
								$sql="SELECT * FROM aparato WHERE tipo = 'Estéreo'";
								$query = $con ->query($sql);
								while ($mod=$query ->fetch_array()){
							?>
			     			<option id="<?php echo $mod['id_aparato']?>" value="<?php echo $mod['modelo']?>">
			     				<?php echo $mod['modelo']?></option>
			     			<?php } ?>

                        </select>
					</td>
				</tr>
				<tr>
					<td style="width:300px;" align="center">
						<b>Fallas</b>
					</td>
					<td style="width:300px;">
						<input type="radio" id="falla1" name="falla" value="1" style="display: none;" disabled>
						<label id="lf1" for="falla1" style="display: none; color: grey;">El aparato no enciende</label><br>
						<br>
						<input type="radio" id="falla2" name="falla" value="2" style="display: none;" disabled>
						<label id="lf2" for="falla2" style="display: none; color: grey;">Enciende sin dar video</label><br>
						<br>
						<input type="radio" id="falla3" name="falla" value="3" style="display: none;" disabled>
						<label id="lf3" for="falla3" style="display: none; color: grey;">La TV se ve en blanco y negro</label><br>
						<br>
						<input type="radio" id="falla4" name="falla" value="4" style="display: none;" disabled>
						<label id="lf4" for="falla4" style="display: none; color: grey;">No tiene audio</label><br>
						<br>
						<input type="radio" id="falla5" name="falla" value="5" style="display: none;" disabled>
						<label id="lf5" for="falla5" style="display: none; color: grey;">video</label><br>
						<br>
					</td>
			    </tr>
			    <tr align="center">
					<td  colspan="2">
						<input id="sub" type="submit" name="sub" value="Obtener Diagnóstico" class="btn btn-lg" disabled>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</div>
</section>
