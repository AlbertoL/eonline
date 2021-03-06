$(document).ready(function(){
	$.validator.addMethod('nombre', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ\s]+$/i.test(value);
	});
	$.validator.addMethod('apellido', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ\s]+$/i.test(value);
	});
	// $.validator.addMethod('rut', function(value, element)
	// {
	// 	return this.optional(element) || /^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$/.test(value);
	// });
	$.validator.addMethod("rut", function(value, element) {
  	return this.optional(element) || $.Rut.validar(value);
	}, "Este campo debe ser un rut valido.");
	$.validator.addMethod('pass', function(value, element)
	{
		return this.optional(element) || /^[a-zA-ZÁáÀàÉéÈèÍíÌìÓóÒòÚúÙùÑñüÜ0-9]+$/i.test(value);
	});
	$.validator.addMethod('direccion', function(value, element)
	{
		return this.optional(element) || /^[a-záéíóúàèìòùäëïöüñ0-9\s]+$/i.test(value);
	});
	$.validator.addMethod('tel', function(value, element)
	{
		return this.optional(element) || /^[0-9\-\s]+$/i.test(value);
	});
	$("#frmRegistro").validate
	({
     		rules:
		{
			nombre: {required: true, nombre: true, minlength: 2, maxlength: 30},
			apellido: {required: true, apellido: true, minlength: 2, maxlength: 30},
			rut_cl: {required: true, rut: true},
			pass: {required: true, pass: true, minlength: 4, maxlength: 11},
			direccion: {required: true, direccion: true, minlength: 5, maxlength: 50},
			email: {required: true, email: true, minlength: 6, maxlength: 40},
			tel: {required: true, tel: true, minlength: 4, maxlength: 20}
		},
		messages:
		{
			nombre: {required: 'Campo requerido', nombre: 'Formato incorrecto', minlength: 'Debe tener al menos 2 letras', maxlength: 'El máximo de caracteres son 30'},
			apellido: {required: 'Campo requerido', apellido: 'Formato incorrecto', minlength: 'Debe tener al menos 2 letras', maxlength: 'El máximo de caracteres son 30'},
			rut_cl: {required: 'Campo requerido', rut: 'Rut invalido'},
			pass: {required: 'Campo requerido', pass: 'Letras y números', minlength: 'minimo 4 caracteres', maxlength: 'máximo de caracteres es de 11'},
			direccion: {required: 'Campo requerido', direccion: 'Letras y numeros', minlength: 'direccion muy corta', maxlength: 'Direccion muy grande'},
			email: {required: 'Campo requerido', email: 'name@micuenta.com', minlength: 'El mínimo de caracteres es 5', maxlength: 'El máximo de caracteres son 40'},
			tel: {required: 'Campo requerido', tel: 'codigo - numero', minlength: 'El mínimo de caracteres es 6', maxlength: 'El máximo de caracteres son 20'}
       	}
    	});
	$('#rut_cl').Rut({
		validation: false
	});
});