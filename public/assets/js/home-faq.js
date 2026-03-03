$(document).ready(function(){
  'use strict'

  $(document).on("submit", "#home-enquiry-form", function (event) {

    var form = $(this);
    var formData = new FormData($("#home-enquiry-form")[0]);

    let isValid = true;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Email validation
    let email = $(".aside-email").val().trim();
    if (email === "" || !emailPattern.test(email)) {
        Toast.fire({
            icon: "warning",
            title: "Please Enter valid Email address",
        });
        isValid = false;
    } else {
        isValid = true;
    }

    if (isValid) {
        $(".home-form-loader").css({display:"flex"});
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: formData,
            dataType: "json",
            encode: true,
            processData: false,
            contentType: false,
        })
        .done(function (data) {
            if (data.success == "success") {
                Toast.fire({
                    icon: "success",
                    title: data.message,
                });

                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                  event: "formSubmitEvent",       // Name of your custom event
                });

                setTimeout(function () {
                    location.reload();
                }, 1000);
            } else {
                Toast.fire({
                    icon: "warning",
                    title: data.message,
                });
            }
            $(".home-form-loader").css({display:"none"});
        })
        .fail(function (e) {
            $(".home-form-loader").css({display:"none"});
            Toast.fire({
                icon: "warning",
                title: 'Something went wrong! Try again later.',
            });
        });
    }
    event.preventDefault();
  });
});


const input6 = document.querySelector("#phone-field6");
const hiddenInput6 = document.querySelector("#fullphone-field6");
const iti6 = window.intlTelInput(input6, {
  initialCountry: "ae",
  separateDialCode: true,
});

input6.addEventListener('keyup', () => {
  const fullNumber = iti6.getNumber();
  hiddenInput6.value = fullNumber;
});


/* ── ACCORDION ── */
document.querySelectorAll('.faq-q').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => {
      i.classList.remove('open');
      i.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
    });
    if (!isOpen) {
      item.classList.add('open');
      btn.setAttribute('aria-expanded', 'true');
    }
  });
});

/* ── CATEGORY NAV ── */
document.querySelectorAll('.nav-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const cat = btn.dataset.cat;
    document.querySelectorAll('.faq-group').forEach(g => {
      g.style.display = (cat === 'all' || cat === g.dataset.group) ? '' : 'none';
    });
    // clear search
    const si = document.getElementById('faqSearch');
    si.value = '';
    si.dispatchEvent(new Event('input'));
  });
});

/* ── SEARCH ── */
const si = document.getElementById('faqSearch');
const sc = document.getElementById('sClear');
const fe = document.getElementById('faqEmpty');

function esc(s) { return s.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'); }

si.addEventListener('input', () => {
  const q = si.value.trim();
  sc.classList.toggle('on', q.length > 0);

  if (q) {
    document.querySelectorAll('.nav-btn').forEach(b => b.classList.remove('active'));
    document.querySelector('[data-cat="all"]').classList.add('active');
    document.querySelectorAll('.faq-group').forEach(g => g.style.display = '');
  }

  // remove highlights
  document.querySelectorAll('.q-text').forEach(el => {
    el.innerHTML = el.innerHTML.replace(/<mark>(.*?)<\/mark>/g, '$1');
  });

  if (!q) {
    document.querySelectorAll('.faq-item').forEach(i => i.style.display = '');
    fe.classList.remove('show');
    return;
  }

  const rx = new RegExp(esc(q), 'gi');
  let found = 0;
  document.querySelectorAll('.faq-item').forEach(item => {
    const text = item.dataset.q + ' ' + item.querySelector('.q-text').textContent;
    if (rx.test(text)) {
      item.style.display = '';
      found++;
      const el = item.querySelector('.q-text');
      el.innerHTML = el.textContent.replace(new RegExp(esc(q), 'gi'), m => `<mark>${m}</mark>`);
    } else {
      item.style.display = 'none';
    }
  });

  document.querySelectorAll('.faq-group').forEach(g => {
    const any = [...g.querySelectorAll('.faq-item')].some(i => i.style.display !== 'none');
    g.style.display = any ? '' : 'none';
  });

  fe.classList.toggle('show', found === 0);
});

sc.addEventListener('click', () => {
  si.value = '';
  si.dispatchEvent(new Event('input'));
  si.focus();
});