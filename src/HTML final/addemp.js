$(document).ready(() => {

  $(".DNI").click(() => {
    ID();
  });
  $(".Add").click(() => {
    validar();
  });
});

function validar(){
  var nombre = $('.Nombre').val();
  var nameReg = new RegExp('^\s*([A-Za-z]{1,}([\.,] |[-]| ))+[A-Za-z]+\.?\s*$');

  if(nameReg.test(nombre))
  {
alert('sta bien ');
  }
  else
  {
    alert('sta mal');
  }

  var dni = $('.DNI').val();
  var dniReg = new RegExp('^[0-9]{8}+$');
  if(dniReg.test(dni))
  {
    alert('bien DNI');
  }
  else
  {
    alert('NO dni');
  }
