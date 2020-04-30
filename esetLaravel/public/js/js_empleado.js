$(document).ready(function(){

	$('#puesto').on('change',function(){

		var selectValor = '#'+$(this).val();

		  $('#disenador').hide();
		  $('#programador').hide();
		  $(selectValor).show();

	});

});