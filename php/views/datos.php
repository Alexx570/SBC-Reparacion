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
						<label for="nombre producto">Fallas</label>
					</td>
					<td style="width:300px;">
						<?php
								$sql="SELECT * FROM falla";
								$query = $con ->query($sql);
								while ($falla=$query ->fetch_array()){
							?>
						<input type="checkbox" id="falla<?php echo$falla['id_falla']?>" name="falla[]" value="<?php echo $falla['falla'] ?>" style="display: none;" disabled>
						<label id="lf<?php echo$falla['id_falla']?>" for="falla<?php echo$falla['id_falla']?>" style="display: none; color: grey;"><?php echo $falla['falla']; ?></label><br>
						<?php } ?>
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
<script>
	$(function(){
		$('input:checkbox').change(function(){
			if ($('input:checkbox:checked').length > 0) {
				$('input:submit').prop({disabled: false}); 
			} else {
				$('input:submit').prop({disabled: true}); 
			}
		});
	});

	let tipo = document.getElementById("tipo");
    let fabricante = document.getElementById("fabricante");
    let modeloT = document.getElementById("modeloT");
    let modeloE = document.getElementById("modeloE");


    let falla1 = document.getElementById("falla1");
    let falla2 = document.getElementById("falla2");
    let falla3 = document.getElementById("falla3");
    let falla4 = document.getElementById("falla4");

    let lf1 = document.getElementById("lf1");
    let lf2 = document.getElementById("lf2");
    let lf3 = document.getElementById("lf3");
    let lf4 = document.getElementById("lf4");
    
    tipo.addEventListener("change", () => {
    	let texto = tipo.options[tipo.selectedIndex].text
    	fabricante.removeAttribute("disabled");

    	if (texto === "Televisión") {
    		fabricante[6].style.display = "none";


    		falla1.style.display = "inline-block";
    		falla2.style.display = "inline-block";
      		falla3.style.display = "inline-block";
      		falla4.style.display = "inline-block";
      		falla5.style.display = "none";

      		lf1.style.display = "inline-block";
      		lf2.style.display = "inline-block";
      		lf3.style.display = "inline-block";
      		lf4.style.display = "inline-block";
      		lf5.style.display = "none";

      		modeloT.style.display= "block";
      		modeloE.style.display= "none";
    	}

    	else{
    		fabricante[6].style.display = "block";

      		falla1.style.display = "inline-block";
    		falla2.style.display = "none";
      		falla3.style.display = "none";
      		falla4.style.display = "none";
      		falla5.style.display = "inline-block";

      		lf1.style.display = "inline-block";
      		lf2.style.display = "none";
      		lf3.style.display = "none";
      		lf4.style.display = "none";
      		lf5.style.display = "inline-block";

      		modeloE.style.display = "block";
      		modeloT.style.display = "none";
    	}
    })

    fabricante.addEventListener("change", () => {
    	let text = fabricante.options[fabricante.selectedIndex].text
    	modeloT.removeAttribute("disabled");
    	modeloE.removeAttribute("disabled");
      		
    })

    modeloT.addEventListener("change", () => {

    	falla1.removeAttribute("disabled");
    	falla2.removeAttribute("disabled");
    	falla3.removeAttribute("disabled");
    	falla4.removeAttribute("disabled");
    	falla5.removeAttribute("disabled");

    	lf1.style.color = "black";
      	lf2.style.color = "black";
      	lf3.style.color = "black";
      	lf4.style.color = "black";
      	lf5.style.color = "black";
    })

    modeloE.addEventListener("change", () => {

    	falla1.removeAttribute("disabled");
    	falla2.removeAttribute("disabled");
    	falla3.removeAttribute("disabled");
    	falla4.removeAttribute("disabled");
    	falla5.removeAttribute("disabled");

    	lf1.style.color = "black";
      	lf2.style.color = "black";
      	lf3.style.color = "black";
      	lf4.style.color = "black";
      	lf5.style.color = "black";
    })
</script>