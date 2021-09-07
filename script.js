$(document).ready(function(e) {
	$('.classModal').click(function(){
	    var id      = 	$(this).attr('id');
	    var acao    = 	$(this).attr('acao');
	    var origem 	=	$(this).attr('origem');
	    $.ajax({
	        type: 'POST',
	        url: $(this).attr('url'),
	        data: {'id' : id, 'acao': acao, 'origem' : origem},
	        success: function(response) {
	            $('#modal-corpo').html(response);
	        }
	    });
	});

	$('#myModal').on('shown.bs.modal', function () {
		$(this).find('.modal-dialog').css({
			width	:	'auto',
			height	:	'auto',
			'max-width':'90%'
		});
	});

	$('#pbEnviar').click(function(){
		var formData = $('#frmBoleto').serialize(); 	
		$.ajax({
			type		:	'POST',
			url			: 	'pesquisarBoleto.php',
			data		:	formData,
			dataType	: 	'html',
			success		:	function(json){
				
				$('#msg').html(json);

			}

		});
	});
});