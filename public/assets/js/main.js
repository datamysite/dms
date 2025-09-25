var host = $("meta[name='home_url']").attr("content");


(function() {
  "use strict";



  $(".home-service-btn button").click(function() {

      document.getElementById("services").scrollIntoView({ behavior: "smooth" });
      
  });

  $(".home-service-mob-btn button").click(function() {

      document.getElementById("services").scrollIntoView({ behavior: "smooth" });
      
  });

  $(".open-service-menu").click(function() {

      $('.service-menu-main').addClass('show');
      
  });

  $(".open-service-second-menu").click(function() {
    let val = $(this).data('id');
    $('.open-service-second-menu .service-sub-menu').css({display: 'none'});

    $("."+val).css({display: 'block'});

      $('.service-menu-second').addClass('show');
      
  });

  $(".open-service-third-menu").click(function() {
    let val = $(this).data('id');
    $('.open-service-third-menu .service-sub-menu').css({display: 'none'});

    $("."+val+"-third-menu").css({display: 'block'});

      $('.service-menu-third').addClass('show');
      
  });

  $(".close-menu").click(function() {

      $(this).parent().removeClass('show');
      $(this).parent().children('.service-sub-menu').css({display: 'none'});
      
  });



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



  $('.pub-see-more button').click(function(){
    $('.pub-see-more').css({display: 'none'});
    $('.publications-logos').css({height: 'auto'});
  });

  $('.ser-see-more button').click(function(){
    $('.ser-see-more').css({display: 'none'});
    $('.about-service-section').css({height: 'auto'});
  });


  $('.uni-strip-see-more button').click(function(){
    $('.uni-strip-see-more').css({display: 'none'});
    var val = $(this).data('class');

    $('.'+val).css({height: 'auto'});
  });


  $('.scroll-up').click(function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  $('.share-copy').click(function(){
    var $temp = $("<input>");
    var val = $(this).data('link');
    $("body").append($temp);
    $temp.val(val).select();
    document.execCommand("copy");
    $temp.remove();

    Toast.fire({
        icon: "success",
        title: "Link Copied",
    });
  });

  $('.seo-cta a').click(function(){
    $('#seo-ads-cta-modal-u').addClass('show');
    $('#seo-ads-cta-modal-u').css({display: 'block'});
  });

  $('#seo-ads-cta-modal-u .close').click(function(){
    $('#seo-ads-cta-modal-u').removeClass('show');
    $('#seo-ads-cta-modal-u').css({display: 'none'});
  });

  $('.open-newsletter').click(function(){
    openNewsletterModal();
  });

  $('.open-seo-cta').click(function(){
    openSEOModal();
  });
  
  $('.close').click(function(){
    closeNewsletterModal();
    closeSEOModal();
  });
  $('.cancel').click(function(){
    closeNewsletterModal();
    closeSEOModal();
  });

  function closeNewsletterModal(){

    $('#newsletter-modal-u').removeClass('show');
    $('#newsletter-modal-u').css({display: 'none'});
  }
  function openNewsletterModal(){
    $('#newsletter-modal-u').addClass('show');
    $('#newsletter-modal-u').css({display: 'block'});
  }


  function closeSEOModal(){

    $('#seo-cta-modal-u').removeClass('show');
    $('#seo-cta-modal-u').css({display: 'none'});
  }
  function openSEOModal(){
    $('#seo-cta-modal-u').addClass('show');
    $('#seo-cta-modal-u').css({display: 'block'});
  }

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
 

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);


})();

function copyEmail(copytext, ele){
  var $temp = $("<div>");
  $("body").append($temp);
  $temp.attr("contenteditable", true)
       .html(copytext).select()
       .on("focus", function() { document.execCommand('selectAll',false,null); })
       .focus();
  document.execCommand("copy");
  $temp.remove();
  $(ele).html('<span class="bi bi-check"></span>&nbsp;&nbsp;Copied.');
  setTimeout(function(){
    $(ele).html('<span class="bi bi-copy"></span>&nbsp;&nbsp;Copy');
  }, 5000);
}