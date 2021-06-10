$(function(){
		$('input:radio').change(function(){
			if ($('input:radio:checked').length > 0) {
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
        fabricante[5].style.display = "none";
        fabricante[4].style.display = "block";

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
        fabricante[5].style.display = "block";
        fabricante[4].style.display = "none";
    		
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