
  <!-- Vendor JS Files -->
  <script src="{{URL::to('/public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
  <script src="{{URL::to('/public')}}/assets/vendor/glightbox/js/glightbox.min.js" defer></script>
  <script src="{{URL::to('/public')}}/assets/vendor/swiper/swiper-bundle.min.js" defer></script>

  <!-- Main JS File -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="{{URL::to('/public')}}/assets/input-master/js/intlTelInputWithUtils.js" defer></script>

  

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script> -->
  <script src="{{URL::to('/public')}}/assets/js/main.js"></script>
 <!--  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
  
  <!-- <script src="{{URL::to('/public')}}/assets/js/spinner.js" defer></script> -->
<!--   <script src="{{URL::to('/public')}}/assets/js/counter.js" defer></script> -->
  <script src="{{URL::to('/public')}}/assets/js/faq.js" defer></script>
  <script src="{{URL::to('/public')}}/assets/js/newsletter.js" defer></script>
  
  <script>
    
    const inputh = document.querySelector("#phone-field3");
    const hiddenInputh = document.querySelector("#fullphone-field3");
    const itih = window.intlTelInput(inputh, {
      initialCountry: "ae",
      separateDialCode: true,
    });

    inputh.addEventListener('keyup', () => {
      const fullNumber = itih.getNumber();
      hiddenInputh.value = fullNumber;
    });

    const inputh4 = document.querySelector("#phone-field4");
    const hiddenInputh4 = document.querySelector("#fullphone-field4");
    const itih4 = window.intlTelInput(inputh4, {
      initialCountry: "ae",
      separateDialCode: true,
    });

    inputh4.addEventListener('keyup', () => {
      const fullNumber = itih4.getNumber();
      hiddenInputh4.value = fullNumber;
    });
  </script>

  <script src="{{URL::to('/public')}}/assets/js/enquiry.js" defer></script>