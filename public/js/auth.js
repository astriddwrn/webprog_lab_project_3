$(document).ready(function(){

    function isEmpty(str) {
        return (!str || str.length === 0 );
    }

    $('input:not([type=radio], [type=checkbox])').focus(function(){
        $(this).prev().addClass('label-on').removeClass('label-off');
    });

    $('input:not([type=radio], [type=checkbox])').blur(function(){
        if(isEmpty($(this).val())){
            $(this).prev().addClass('label-off').removeClass('label-on');
           
        }
        else{
            $(this).prev().addClass('label-on').removeClass('label-off');
        }
    });

    $.validator.addMethod("letters", function (value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
    });
    $.validator.addMethod("emailPattern", function (value, element) {
        return (
            this.optional(element) ||
            value == value.match(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i)
        );
    });
    $.validator.addMethod("passwordPattern", function (value, element) {
        return (
            this.optional(element) ||
            (/[A-Z]/.test(value) && /[a-z]/.test(value) && /\d/.test(value))
        );
    });

    $('.form-signup').validate({
        rules:{
            name: {
                required: true,
                minlength: 3,
                letters: true,
            },
            email: {
                required: true,
                emailPattern: true,
            },
            password: {
                required: true,
                passwordPattern: true,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password",
            },
            radio:{
                required: true,
            }
        },
        messages:{
            name: {
                required: "Please fill out this field.",
                min: "Name must contains minimum 3 characters.",
                letters: "Name must contains alphabet only. ",
            },
            email: {
                required: "Please fill out this field.",
                emailPattern: "Plase input a valid email address.",
            },
            password: {
                required: "Please fill out this field.",
                passwordPattern:"Password must contains minimum eight characters, at least one uppercase letter, one lowercase letter and one number.",
            },
            password_confirmation: {
                required: "Please fill out this field.",
                equalTo: "Confirm password does not match.",
            },
            radio: {
                required: "Please check this field.",
            }
        },
        errorPlacement: function(error, element) {
            if(element.attr("name")=="radio"){
                error.insertAfter(".radio-error").addClass("radioErrorCss");
            }
            else{
                error.insertAfter(element);
                $(element).addClass('border-error').removeClass('border-success');
                console.log('3');
            }
        },
        highlight: function(element){
            $(element).addClass('border-error').removeClass('border-success');
        },
        unhighlight: function(element){
            $(element).addClass('border-success').removeClass('border-error');          
        },
        
    });

});