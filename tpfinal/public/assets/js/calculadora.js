function sumar() {
    var operador1 = $("#operando1").val();
    var operador2 = $("#operando2").val();
    var resultado = $("#resultado").val();
    var valor = (operador1 * 1) + (operador2 * 1);

    if (Number.isNaN(valor)) {
      $("#resultado").val("Debe insertar números.")
    } else {
      $("#resultado").val(valor)
    }
  }

  function restar() {
    var operador1 = $("#operando1").val();
    var operador2 = $("#operando2").val();
    var resultado = $("#resultado").val();
    var valor = operador1 - operador2;

    if (Number.isNaN(valor)) {
      $("#resultado").val("Debe insertar números.")
    } else {
      $("#resultado").val(valor)
    }
  }

  function multiplicar() {
    var operador1 = $("#operando1").val();
    var operador2 = $("#operando2").val();
    var resultado = $("#resultado").val();
    var valor = operador1 * operador2;

    if (Number.isNaN(valor)) {
      $("#resultado").val("Debe insertar números.")
    } else {
      $("#resultado").val(valor)
    }
  }

  function dividir() {
     var operador1 = $("#operando1").val();
     var operador2 = $("#operando2").val();
     var resultado = $("#resultado").val();
     var valor = operador1 / operador2;

     if (Number.isNaN(valor)) {
       $("#resultado").val("Debe insertar números.")
     } else {
       $("#resultado").val(valor)
     }
   }

  function resetear() {
    $("#operando1").val("");
    $("#operando2").val("");
    $("#resultado").val("");
  }
