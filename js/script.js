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

const brandsMenu = document.querySelector('.menu-item.dropdown');

const brandsDropdown = brandsMenu.querySelector('.dropdown-content');

brandsMenu.addEventListener('click', function(event) {
    event.stopPropagation();

    brandsDropdown.classList.toggle('show');
});

document.addEventListener('click', function(event) {
    if (!brandsMenu.contains(event.target)) {
        brandsDropdown.classList.remove('show');
    }
});

let counter = 1;
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 3) {
    counter = 1;
  }
}, 4000);
