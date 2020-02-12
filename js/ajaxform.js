$('.modal__button').click(function (evt) {
  evt.preventDefault();
        $.post(
          "php/submit.php",
          {
          name: $('[name="name"]').val(),
          phone: $('[name="phone"]').val(),
          message: $('[name="message"]').val()
            },
          
          function( data ) {
        $('#order_form')[0].reset();
        $( ".result" ).html( data );
      }
          );
    });
