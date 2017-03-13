var flag1=0;
var flag2=0;
var flag3=0;
var flag4=0;


$('#desc').keydown( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
		if( texto.match(regexp)&&texto!=""){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			flag3=1;
			check();
		}
		else if(texto==""){
			
			$('#desc').removeClass('correcto');
			$('#desc').removeClass('error');
			flag3=0;
			check();
		}
		else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			flag3=0;
			check();
		}
		
	});

$('#desc').keypress( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
			if( texto.match(regexp)&&texto!=""){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			flag3=1;
			check();
		}
		else if(texto==""){
			
			$('#desc').removeClass('correcto');
			$('#desc').removeClass('error');
			flag3=0;
			check();
		}
		else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			flag3=0;
			check();
		}
		
	});

$('#desc').keyup( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
			if( texto.match(regexp)&&texto!=""){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			flag3=1;
			check();
		}
		else if(texto==""){
			
			$('#desc').removeClass('correcto');
			$('#desc').removeClass('error');
			flag3=0;
			check();
		}
		else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			flag3=0;
			check();
		}
		
	});

$('#materia').keydown( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]+[1-9]*)$/;
		if( texto.match(regexp)&&texto!=""){
			
			$('#materia').removeClass('error');
			$('#materia').addClass('correcto');
			flag2=1;
			check();
		}
		else if(texto==""){
			
			$('#materia').removeClass('correcto');
			$('#materia').removeClass('error');
			flag2=0;
			check();
		}
		else{
			
			$('#materia').removeClass('correcto');
			$('#materia').addClass('error');
			flag2=0;
			check();
		}
		
	});

$('#materia').keypress( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]+[1-9]*)$/;
			if( texto.match(regexp)&&texto!=""){
			
			$('#materia').removeClass('error');
			$('#materia').addClass('correcto');
			flag2=1;
			check();
		}
		else if(texto==""){
			
			$('#materia').removeClass('correcto');
			$('#materia').removeClass('error');
			flag2=0;
			check();
		}
		else{
			
			$('#materia').removeClass('correcto');
			$('#materia').addClass('error');
			flag2=0;
			check();
		}
		
	});

$('#materia').keyup( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]+[1-9]*)$/;
			if( texto.match(regexp)&&texto!=""){
			
			$('#materia').removeClass('error');
			$('#materia').addClass('correcto');
			flag2=1;
			check();
		}
		else if(texto==""){
			
			$('#materia').removeClass('correcto');
			$('#materia').removeClass('error');
			flag2=0;
			check();
		}
		else{
			
			$('#materia').removeClass('correcto');
			$('#materia').addClass('error');
			flag2=0;
			check();
		}
		
	});

document.getElementsByName('carrera')[0].onchange = function() {
     if (this.value!=''){
     		 flag1=1;
     		check();
     	}
     else{
			flag1=0;
			check();
		}
}

document.getElementsByName('cargaHoraria')[0].onchange = function() {
      if (this.value!=''){
     		flag4=1;
     		check();
     	}
     else{
			flag4=0;
			check();
		}
}

function check() {
    if (flag1==1 && flag2==1 && flag3==1 && flag4==1){
    	$('#env').prop('disabled', false);
    }
    else{
		$('#env').prop('disabled', true);
	}
}