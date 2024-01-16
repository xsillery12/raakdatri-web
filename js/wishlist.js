let profileDropdownlist = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

const toggleDropdown = () => {
  profileDropdownlist.classList.toggle("active");
};

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) {
    profileDropdownlist.classList.remove("active");
  }
});

document.querySelector("#search-icon").addEventListener("click", (event) => {
  event.preventDefault();
  document.querySelector("#search-form").classList.toggle("active");
});

function closeSearchForm() {
  event.preventDefault();
  document.querySelector("#search-form").classList.remove("active");
}

document.addEventListener('DOMContentLoaded', function() {
  const quantityInputs = document.querySelectorAll('.number-input input[type="text"]');
  quantityInputs.forEach(function(input) {
      const minusButton = input.parentNode.querySelector('.minus');
      const plusButton = input.parentNode.querySelector('.plus');

      minusButton.addEventListener('click', function() {
          let value = parseInt(input.value) || 0;
          value = value <= 1 ? 1 : value - 1;
          input.value = value;
      });

      plusButton.addEventListener('click', function() {
          let value = parseInt(input.value) || 0;
          value++;
          input.value = value;
      });
  });
});
