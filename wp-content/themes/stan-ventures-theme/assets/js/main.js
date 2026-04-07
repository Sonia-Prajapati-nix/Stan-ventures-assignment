document.addEventListener('DOMContentLoaded', function () {
  var form = document.querySelector('.sv-footer-form');
  var emailInput = document.getElementById('sv-footer-email');
  var errorEl = document.querySelector('.sv-footer-form__error');

  if (form && emailInput && errorEl) {
    form.addEventListener('submit', function (event) {
      var value = emailInput.value.trim();
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!value) {
        event.preventDefault();
        errorEl.textContent = 'Please enter your email address.';
        emailInput.focus();
        return;
      }

      if (!emailPattern.test(value)) {
        event.preventDefault();
        errorEl.textContent = 'Please enter a valid email address.';
        emailInput.focus();
        return;
      }

      errorEl.textContent = '';
    });
  }

  var animated = document.querySelectorAll('[data-animate="fade-up"]');
  if ('IntersectionObserver' in window && animated.length) {
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.15
      }
    );

    animated.forEach(function (el) {
      observer.observe(el);
    });
  } else {
    animated.forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  var header = document.querySelector('.sv-site-header');
  var toggle = document.querySelector('.sv-header-toggle');
  var nav = document.querySelector('.sv-site-header__nav');

  if (header && toggle && nav) {
    toggle.addEventListener('click', function () {
      var isOpen = header.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (header.classList.contains('is-open')) {
          header.classList.remove('is-open');
          toggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }
});

