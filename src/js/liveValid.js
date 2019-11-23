function verificarContraseña() {
  var password = $("#_password2").val();
  var confirmPassword = $("#_verpass").val();

  if (password != confirmPassword) {
    $("#comprobar").html("Contraseñas no coinciden");
  } else {
    $("#comprobar").html("");
  }
}

$(document).ready(function() {
  $("#_password2, #_verpass").keyup(verificarContraseña);
});

// ! Validacion de la matricula
function verificarMatricula() {
  var matricula = $("#matricula").val();

  if (matricula.length > 0) {
    if (parseInt(matricula[0]) != 1) {
      $("#mat").html("La matricula debe de iniciar con 1");
    } else {
      $("#mat").html("");
    }
  }
}

$(document).ready(function() {
  $("#matricula").keyup(verificarMatricula);
});

// ! Validacion de campo vacio

function verificarVacio() {
  var matricula = $("#matricula").val();

  if (matricula.length < 1) {
    $("#vacio").html("Campo vacio");
  }
}

$(document).ready(function() {
  $("#matricula").keyup(verificarVacio);
  $("#matricula").blur(verificarVacio);
});

$("#matricula").on("input", function() {
  if (this.value.charAt(0) != 1) {
    this.value = this.value.replace(/[^1]/g, "");
    alert ('Debe comenzar con un 1')
  }
});
