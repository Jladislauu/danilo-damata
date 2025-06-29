document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const messageDiv = document.getElementById("form-message");
  
    form.addEventListener("submit", function (e) {
      e.preventDefault();
  
      const formData = new FormData(form);
  
      fetch("php/send-email.php", {
        method: "POST",
        body: formData
      })
      .then(response => response.text())
      .then(text => {
        messageDiv.style.color = "green";
        messageDiv.textContent = text;
        form.reset();
      })
      .catch(error => {
        messageDiv.style.color = "red";
        messageDiv.textContent = "Erro ao enviar a mensagem. Tente novamente.";
      });
    });
  });
  