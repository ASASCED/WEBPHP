window.addEventListener('load', function() {
    formulario.matricula.addEventListener('keypress', soloNumeros, false)
})

function soloNumeros(e) {
    var tecla = window.event ? e.which : e.keycode
    if (tecla < 48 || tecla > 57) {
        e.preventDefault()
        alert('Solo numeros')
    } 
}