function registrojs() {

  var nombre = $("#nombre").val();
  var email = $("#email").val();
  var telefono = $("#telefono").val();
  var contraseña = $("#contraseña").val();
  var confirmar = $("#confirmar").val();
  var formatoemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var numerico = /^[0-9]+$/;
  var alpha = /^[A-Za-z]+$/;

  if (nombre == "") {
    $("#errornombre").html("Este campo es obligatorio.")
    error = 1;
  } else if (!alpha.test(nombre)) {
    $("#errornombre").html("Su nombre sólo puede contener letras.")
    error = 1;
  }

  if (email == "") {
    $("#erroremail").html("Este campo es obligatorio.")
    error = 1;
  } else if (!formatoemail.test(email)) {
    $("#erroremail").html("Su email no cumple con el formato convencional.")
    error = 1;
  }

  if (telefono.length >= 1 && !numerico.test(telefono)) {
    $("#errortelefono").html("Su teléfono sólo puede contener números.")
    error = 1;
  } else if (telefono.length > 10) {
    $("#errortelefono").html("Su teléfono debe contener 10 números.")
    error = 1;
  }

  if (contraseña == "") {
    $("#errorcontraseña").html("Este campo es obligatorio.")
    error = 1;
  } else if (contraseña.length < 5) {
    $("#errorcontraseña").html("Su contraseña debe tener más de 4 caracteres.")
    error = 1;
  }

  if (confirmar == "") {
    $("#errorconfirmar").html("Debe confirmar su contraseña.")
    error = 1;
  } else if (confirmar != contraseña) {
    $("#errorconfirmar").html("Las contraseñas no coinciden.")
    error = 1;
  }

  if(error == 0) { document.registro_form.submit(); }

  }

function iniciarjs() {

  var email = $("#email").val();
  var contraseña = $("#contraseña").val();
  var error = 0;

  if (email == "" || contraseña == "") {
      $("#erroremail").html("Ingrese sus credeciales.")
      $("#errorcontraseña").html("Ingrese sus credeciales.")
      error = 1;
  }

  if(error == 0) { document.registro_form.submit(); }

}

function iniciarAjax() {

  var url = $("#iniciar_form").attr("action");
  var email = $("#email").val();
  var contraseña = $("#contraseña").val();

  $.ajax ({
        url:url,
        type:"POST",
        data:"email="+email+"&contraseña="+contraseña,
        dataType:"json",
        success:function(response){
          console.log(response)
          if (response.Estado == "Ok") {
            window.location.href = "http://localhost/tpfinal/index.php/PanelDeControl";
          } else if (response.Estado == "Incorrecto") {
            $("#erroremail").html("");
            $("#email").css("border-color", "#ced4da");
            $("#errorcontraseña").html(response.Mensaje);
            $("#contraseña").css("border-color", "red");
            $("#contraseña").val("");

          } else if (response.Estado == "Inexistente") {
            $("#contraseña").val("");
            $("#errorcontraseña").html("");
            $("#contraseña").css("border-color", "#ced4da");
            $("#erroremail").html(response.Mensaje);
            $("#email").css("border-color", "red");

          } else if (response.Estado == "Incompleto") {
            $("#contraseña").val("");
            $("#erroremail").html(response.Mensaje);
            $("#email").css("border-color", "red");
            $("#errorcontraseña").html(response.Mensaje);
            $("#contraseña").css("border-color", "red");
          }
        }
  })

}

function cargarjs() {

  var nombre = $("#nombre").val();
  var precio = $("#precio").val();
  var tipo = $("#tipo").val();
  var descripcion = $("#descripcion").val();
  var imagen = $("#imagen").val();
  var numerico = /^[0-9]+$/;
  var alpha = /^[A-Za-z\s]+$/;
  var error = 0;



  if (nombre == "") {
    $("#errornombre").html("Este campo es obligatorio.")
    error = 1;
  } else if (!alpha.test(nombre)) {
    $("#errornombre").html("El nombre sólo puede contener letras.")
    error = 1;
  }

  if (precio == "") {
    $("#errorprecio").html("Este campo es obligatorio.")
    error = 1;
  } else if (!numerico.test(precio)) {
    $("#errorprecio").html("El precio sólo debe contener números.")
    error = 1;
  }

  if (tipo == "") {
    $("#errortipo").html("Este campo es obligatorio.")
    error = 1;
  }

  if (descripcion == "") {
    $("#errordescripcion").html("Este campo es obligatorio.")
    error = 1;
  }

  // if (imagen == "") {
  //   $("#errorimagen").html("Este campo es obligatorio.")
  //   error = 1;
  // }

  if(error == 0) { document.registro_form.submit(); }
}
