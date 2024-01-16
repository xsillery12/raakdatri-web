const togglePassword = document.querySelectorAll(".toggle-password");
togglePassword.forEach(function (toggle) {
  toggle.addEventListener("click", function () {
    const passwordInput = this.previousElementSibling;
    const type =
      passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    this.classList.toggle("bx-show-alt");
    this.classList.toggle("bx-hide");
  });
});

function showNotification() {
  document.getElementById("registrationNotification").style.display = "block";
}

function closeNotification() {
  document.getElementById("registrationNotification").style.display = "none";
}