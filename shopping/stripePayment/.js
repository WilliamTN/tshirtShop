$('#custom-donation').onchange(function(){
      // Stripe accepts payment amounts in cents so we have to convert dollars to cents by multiplying by 100
     var amount = parseInt( $(this).val()*100);
     $(".stripe-button").attr( "data-amount", amount );
}
