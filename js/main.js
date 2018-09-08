jQuery(document).on('submit','#formlg', function(event) {
    event.preventDefault();

    jQuery.ajax({
        url:'Main_app/login.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        beforeSend:function () {
          $('.botonlg').val('valdando...');

        }

    })
    .done(function (respuesta) {
       console.log(respuesta);
       if(!respuesta.error){
            if(respuesta.tipo =='Admin'){
              location.href ='main_app/Admin/';
            } else if (respuesta.tipo == 'Usuario'){
              location.href ='main_app/Usuario/';
            }

       }else{
         $('.error').slideDown('slow');
         setTimeout(function() {
           $('.error').slideUp('slow');
         },2000);
         $('.botonlg').val('Iniciando Sesión');


       }
    })
    .fail(function (resp) {
        console.log(resp.responseText);
    })
    .always(function () {
      console.log("complete");
    });
});
