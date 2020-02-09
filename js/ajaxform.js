$('.modal__button').click(function() {
        $.post(
          "submit.php",
          {
          name: $('[name="name"]').val(),
          phone: $('[name="phone"]').val(),
          message: $('[name="message"]').val()
            },
          
          function( data ) {
        $( ".result" ).html( data );
      }
          );
    });