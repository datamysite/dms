var element =  document.getElementById('phone-field2');
var element2 =  document.getElementById('phone-field3');
var element3 =  document.getElementById('phone-field4');
var element4 =  document.getElementById('phone-field');


if (typeof(element) != 'undefined' && element != null){
  const input = document.querySelector("#phone-field2");
  input.removeAttribute('placeholder');
  const hiddenInput = document.querySelector("#fullphone-field2");
  const iti = window.intlTelInput(input, {
    initialCountry: "ae",
    separateDialCode: true,
  });

  input.addEventListener('keyup', () => {
    const fullNumber = iti.getNumber();
    hiddenInput.value = fullNumber;
  });
}

if (typeof(element2) != 'undefined' && element2 != null){
  const inputh = document.querySelector("#phone-field3");
  inputh.removeAttribute('placeholder');
  const hiddenInputh = document.querySelector("#fullphone-field3");
  const itih = window.intlTelInput(inputh, {
    initialCountry: "ae",
    separateDialCode: true,
  });

  inputh.addEventListener('keyup', () => {
    const fullNumber = itih.getNumber();
    hiddenInputh.value = fullNumber;
  });
}

if (typeof(element3) != 'undefined' && element3 != null){
  const inputh4 = document.querySelector("#phone-field4");
  inputh4.removeAttribute('placeholder');
  const hiddenInputh4 = document.querySelector("#fullphone-field4");
  const itih4 = window.intlTelInput(inputh4, {
    initialCountry: "ae",
    separateDialCode: true,
  });

  inputh4.addEventListener('keyup', () => {
    const fullNumber = itih4.getNumber();
    hiddenInputh4.value = fullNumber;
  });
}

if (typeof(element4) != 'undefined' && element4 != null){
  const inputh5 = document.querySelector("#phone-field");
  inputh5.removeAttribute('placeholder');
  const hiddenInputh5 = document.querySelector("#fullphone-field");
  const itih5 = window.intlTelInput(inputh5, {
    initialCountry: "ae",
    separateDialCode: true,
  });

  inputh5.addEventListener('keyup', () => {
    const fullNumber = itih5.getNumber();
    hiddenInputh5.value = fullNumber;
  });
}