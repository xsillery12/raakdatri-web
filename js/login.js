const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("passwordInput");

togglePassword.addEventListener("click", function () {
  const type =
    passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);

  if (type === "password") {
    passwordInput.classList.remove("visible-password");
  } else {
    passwordInput.classList.add("visible-password");
  }

  this.classList.toggle("bx-show-alt");
  this.classList.toggle("bx-hide");
});
