$(document).ready(function() {
  function hideShowContainers() {
     
    if ($('#contenido2').hasClass('jsHideContainer')) {
     
      $('#contenido2').removeClass('jsHideContainer');
   
      $('#contenido').hide(1000);

      $('#contenido2').show(1000);
    }
  }
  setInterval(hideShowContainers, 2000);

  $(document).ready(function() {
    setTimeout(function() {
      // Declaramos la capa mediante una clase para ocultarlo
      $("#precarga").fadeOut(1000);
    },4000);
  });

  $(document).ready(function() {
    setTimeout(function() {
      // Declaramos la capa  mediante una clase para ocultarlo
      $("#carga").fadeIn(1000);
      // Transcurridos 5 aparece el div
    },5000);
  });

});