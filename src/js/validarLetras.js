window.addEventListener('load', function() {
    formulario.name.addEventListener('keypress',soloLetras, false)
})
window.addEventListener('load', function() {
    formulario.Apaterno.addEventListener('keypress',soloLetras, false)
})
window.addEventListener('load', function() {
    formulario.Amaterno.addEventListener('keypress',soloLetras, false)
})

function soloLetras(e) {
    var tecla = window.event ? e.which : e.keycode
    if (tecla > 48 && tecla < 57) {
        e.preventDefault()
    }
}