(function () {
  if (!window.location.hash) return;
  var fixAnchor = function () {
    var target = document.querySelector(window.location.hash);
    if (target) target.scrollIntoView({ behavior: "auto", block: "start" });
  };
  window.addEventListener("load", function () {
    fixAnchor();
    if (document.fonts && document.fonts.ready) {
      document.fonts.ready.then(fixAnchor);
    }
    setTimeout(fixAnchor, 400);
  });
})();

document.addEventListener("DOMContentLoaded", function () {
  var skipLink = document.querySelector(".skip-link");
  if (skipLink) {
    skipLink.addEventListener("click", function (e) {
      var target = document.querySelector(skipLink.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.focus();
      }
    });
  }

  var heroHeader = document.querySelector(".site-header--hero");
  if (heroHeader) {
    var revealHeader = function () {
      var scrolled = window.scrollY > 60;
      heroHeader.classList.toggle("visible", scrolled);
      document.body.classList.toggle("hero-scrolled", scrolled);
    };
    window.addEventListener("scroll", revealHeader, { passive: true });
    revealHeader();
  }

  var toggle = document.querySelector(".nav-toggle");
  var links = document.querySelector(".nav-links");
  if (toggle && links) {
    var setNavOpen = function (open) {
      links.classList.toggle("open", open);
      toggle.classList.toggle("open", open);
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
      toggle.setAttribute("aria-label", open ? "Fechar menu" : "Abrir menu");
      document.body.classList.toggle("nav-locked", open);
    };
    toggle.addEventListener("click", function () {
      setNavOpen(!links.classList.contains("open"));
    });
    links.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () { setNavOpen(false); });
    });
  }

  var track = document.querySelector(".t-track");
  var prev = document.querySelector(".t-prev");
  var next = document.querySelector(".t-next");
  if (track && prev && next) {
    var scrollAmount = function () {
      var card = track.querySelector(".t-card");
      return card ? card.getBoundingClientRect().width + 24 : 360;
    };
    prev.addEventListener("click", function () {
      track.scrollBy({ left: -scrollAmount(), behavior: "smooth" });
    });
    next.addEventListener("click", function () {
      track.scrollBy({ left: scrollAmount(), behavior: "smooth" });
    });
  }

  var form = document.getElementById("contact-form");
  var messageDiv = document.getElementById("form-message");
  if (form && messageDiv) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var formData = new FormData(form);
      messageDiv.style.color = "";
      messageDiv.textContent = "Enviando...";
      fetch("php/send-email.php", { method: "POST", body: formData })
        .then(function (response) { return response.text(); })
        .then(function (text) {
          messageDiv.style.color = "#2f7d5c";
          messageDiv.textContent = text || "Mensagem enviada com sucesso!";
          form.reset();
        })
        .catch(function () {
          messageDiv.style.color = "#b3402f";
          messageDiv.textContent = "Erro ao enviar a mensagem. Tente novamente ou fale no WhatsApp.";
        });
    });
  }
});
