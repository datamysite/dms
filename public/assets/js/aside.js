var host = $("meta[name='home_url']").attr("content");


(function() {
  "use strict";


  $.get(host+"/get-aside", function(data, status){
      $('.aside-block').html(data);
      
      const input = document.querySelector("#phone-field2");
      const hiddenInput = document.querySelector("#fullphone-field2");
      const iti = window.intlTelInput(input, {
        initialCountry: "ae",
        separateDialCode: true,
      });

      input.addEventListener('keyup', () => {
        const fullNumber = iti.getNumber();
        hiddenInput.value = fullNumber;
      });
  });



})();
