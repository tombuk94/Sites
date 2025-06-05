$(document).ready(function () {

    var ALFANUMERICS_WITH_ACCENTUATION = "[0-9A-Za-zàèìòùÀÈÌÒÙáéíóúÁÉÍÓÚâêîôûÂÊÎÔÛãõÃÕçÇäëïöüÄËÏÖÜ";

    // regex de validação de nome
    var NO_PRECEDING_AND_FOLLOWING_SPACES = "^(\\S.*\\S|\\S)$";
    var NAME_PERSON = "^"+ALFANUMERICS_WITH_ACCENTUATION+"\\(\\) ]+$";
    var NAME_REGEX = [NO_PRECEDING_AND_FOLLOWING_SPACES, NAME_PERSON];

    // regex de validação de email
    var EMAIL_REGEX = ["([0-9A-za-z\\.\\_\\-\\+])+@(([0-9a-z\\-]+[\\.])+)([a-z]+)"];

    // regex de validação de telefone
    var PHONE_HOME_NUMBER = "^\\(\\d{2}\\) ?(?:(2|3|4|5)\\d{3}\\-\\d{4})$";
    var PHONE_CELL_NUMBER = "^\\(\\d{2}\\) ?(?:((5|6|7|8|9)\\d{3}\\-\\d{4})|(9\\d{3}\\-\\d{5})|9\\d{4}\\-\\d{4})$";
    var PHONE_REGEX = [PHONE_HOME_NUMBER+"|"+PHONE_CELL_NUMBER];

    $("#phone").mask("(99) 9999-9999");
    $("#phone").on("keydown", function (key) {
        if (($(this).val().length >= 14) && ((key.keyCode >= 48 && key.keyCode <= 57) || (key.keyCode >= 96 && key.keyCode <= 105))) {
            $("#phone").unmask().mask("(99) 99999-9999");
        } else if ($(this).val().length <= 14) {
            $("#phone").unmask().mask("(99) 9999-9999");
        }
    });

    $('input').keyup(function () {
        $(this).valid();
    });

    $.validator.addMethod("regex", function(value, element, regexArray) {
      // ser opcional deve permitir que seja vazio, mas ainda sim impedir que seja inválido
      return ((this.optional(element) && value == "") || regexArrayValidator(value, regexArray));
    });

    function regexArrayValidator(value, regexArray) {
      var valid = true;
      for (var i in regexArray) {
        var re = new RegExp(regexArray[i]);
        valid = valid && re.test(value)
      }
      return valid;
    }

    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    });

    $("#form-contato").validate({
        debug: true,
        onkeyup: false,
        onfocusout: function (element) {
            $(element).valid();
        },
        focusInvalid: true,
        errorElement: "em",
        errorClass: "invalid",
        rules: {
            name: {
                required: true,
                regex: NAME_REGEX,
                minlength: 3
            },
            mail: {
                required: true,
                email: true,
                regex: EMAIL_REGEX,
                maxlength: 200
            },
            phone: {
                regex: PHONE_REGEX
            }
        },
        submitHandler: function () {
            $('.overlay').fadeIn();

            if ($("#phone").val() == "") {
              $("#phone").val("(22) 2222-2222");
            }
            if ($("#mail").val() == "") {
              $("#mail").val("a@a.com");
            }
            // ---
            var dataObject = {
                name: $("#name").val(),
                email: $("#mail").val(),
                phone: $("#phone").val(),
                message: $("#message").val()
            };
            $.ajax({
                url: 'php/ControllerContato.php',
                dataType: 'json',
                data: dataObject,
                success: function (message) {
                  $('.overlay').fadeOut();
                  if (message.success) {
                    window.location.assign("/agradecimento-contato");
                  } else {
                      // erro na validação ou no envio de email
                      if (message.error == "INVALID_FORM") {
                        // mostrar mensagem de formulário inválido
                        $('#contato-invalid').modal("show");
                      } else {
                        // erro genérico, no envio provavelmente
                        $('#contato-error').modal("show");
                      }
                  }
                },
                error: function () {
                  $('.overlay').fadeOut();
                  $('#contato-error').modal("show");
                }
            });
        } // submit handler end
    }); // form contato validate end

});
