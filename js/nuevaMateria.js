$('#desc').keydown( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
		if( texto.match(regexp)){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			$('#env').prop('disabled', false);
		}else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			$('#env').prop('disabled', true);
		}
		
	});

$('#desc').keypress( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
		if( texto.match(regexp)){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			$('#env').prop('disabled', false);
		}else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			$('#env').prop('disabled', true);
		}
		
	});

$('#desc').keyup( function(){
		var texto = $(this).val();
		var regexp=/^([A-Za-zÑñáéíóúÁÉÍÓÚ ]*)$/;
		if( texto.match(regexp)){
			
			$('#desc').removeClass('error');
			$('#desc').addClass('correcto');
			$('#env').prop('disabled', false);
		}else{
			
			$('#desc').removeClass('correcto');
			$('#desc').addClass('error');
			$('#env').prop('disabled', true);
		}
		
	});

