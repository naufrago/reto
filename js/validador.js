$(function() {

    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'small',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.form-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('#sign-up').validate({
        rules:
        {
            nombre: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            apellido: {
                required: true,
                minlength: 2
            },

            usuario: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 20,
            },
            password_again: {
                required: true,
                equalTo: '#loginpsw1'
            },
        },
        messages:
        {
            nombre: "Ingresa un nombre válido",
            apellido: "Ingresa un apellido válido",
            usuario:{
                required: "Ingresa una usuario",
                minlength: "usuario muy corta (mínimo 6 caracteres)"
            },
            password:{
                required: "Ingresa una contraseña",
                minlength: "Contraseña muy corta (mínimo 6 caracteres)"
            },
            password_again:{
                required: "Confirma su contraseña",
                equalTo: "Las contraseñas no coinciden"
            }
        },
        submitHandler: $(this).submit()
    });

});
