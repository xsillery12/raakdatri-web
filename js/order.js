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

document.getElementById('openPopupButton').addEventListener('click', function() {
    document.getElementById('popupContainer').style.display = 'block';
  });

  document.getElementById('closePopupButton').addEventListener('click', function() {
    document.getElementById('popupContainer').style.display = 'none';
  });