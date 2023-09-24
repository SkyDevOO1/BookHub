export function submit_ins_form(e) {
  const registerForm = document.forms["inscription"];
  const modal = document.querySelector(".modal");
  const err = modal.querySelector(".err");
  const inputs = registerForm.getElementsByTagName("input");
  for (const input of inputs) {
    if (!input.value.trim()) {
      e.preventDefault();
      modal.style.display = "block";
      err.textContent = `le champ ${input.name} ne doit pas être vide...`;
      setTimeout(() => {
        modal.style.display = "none";
      }, 3000);
      break;
    }
  }
}
