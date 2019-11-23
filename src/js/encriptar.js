function encriptar () {
  var password = document.getElementById('_verpass').value

  var hash = CryptoJS.MD5('CryptoKEY').toString()
  console.log('hash = ' + hash)

  var mensajeEncriptado =  CryptoJS.AES.encrypt(password, hash).toString()
  var mensajeDesencriptado = CryptoJS.AES.decrypt(mensajeEncriptado, hash).toString(CryptoJS.enc.Utf8)
  console.log('Mensaje encriptado: ' + mensajeEncriptado)
  console.log('Mensaje desencriptado en el cliente: ' + mensajeDesencriptado)

  var jqxhr = $.ajax({ //Peticion a BD por parte del cliente
    method: 'POST',
    url: '../php/enviar.php',
    data: {
      cryption: mensajeEncriptado
    }
  })
    .done(function (msg) {
      console.log('Mensaje desencriptado en el servidor:' + msg)
    })
    .fail(function (jqxhr, textStatus) {
      console.log('Falla en la peticion del servidor: ' + textStatus)
    })
    
    return false
}
