$('#contacta-conmigo').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 nombre: {
			 validators: {
				 notEmpty: {
					 message: 'Necesitas introducir un nombre.'
				 },
				 stringLength: {
                     min: 5,
                     max: 50,
                     message: 'El nombre debe tener más de 5 caracteres.'
                 }
			 }
		 },
		 email: {
			 validators: {
				 notEmpty: {
					 message: 'El correo no puede estar vacío.'
				 },
				 emailAddress: {
					 message: 'Este correo no es valido.'
				 }
			 }
		 },
		 mensaje: {
			 validators: {
				 notEmpty: {
					 message: 'Debes introducir un mensaje.'
				 },
				 stringLength: {
                     min: 1,
                     max: 1000,
                     message: 'El mensaje debe tener entre 1 y 1000 caracteres'
                 }
			 }
		 }
	 }
});

jQuery(document).ready(function() {
    $('.contact-form form').submit(function() {
        var postdata = $('.contacto-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'sendMail.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form mensaje-enviado').append('<div class="alert alert-nolo"><i aria-hidden="true" data-icon="&#xe82c;"></i> Tu email ha sido enviado! Gracias por escribir. Te responder&eacute; lo antes posible</div>');
                    });
                }
        });
        return false;
    });
});
