$(document).ready(function() {

  $('.custom-file-input').on('change', function(event) {
      var inputFile = event.currentTarget;
      $(inputFile).parent()
          .find('.custom-file-label')
          .html(inputFile.files[0].name);
  });

  var menuButton = $("#iconoabrir");
  var menu = $(".navegador ul");

  menuButton.click(function() {
    if (menu.hasClass("show")) {
      menu.removeClass("show");
    } else {
      menu.addClass("show");
    }
  });

  var filtrarJean = $("#filtrarjean");
  var lista = $("#lista");

  filtrarJean.click(function() {
    if (lista.hasClass("ver")) {
      lista.removeClass("ver")
    } else {
    lista.addClass("ver");
    }

  });


});
