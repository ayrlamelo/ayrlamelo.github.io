const form = document.getElementById("email-form");

form.addEventListener("submit", (event) => {
  // Validação básica (pode ser estendida)
  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const subject = form.subject.value.trim();
  const message = form.message.value.trim();

  if (!name || !email || !subject || !message) {
    alert("Por favor, preencha todos os campos!");
    event.preventDefault(); // Impede o envio do formulário
  } else {
    alert("Enviando...");
  }
});
