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
  const quantityInput = document.getElementById('quantity');
  const minusButton = document.querySelector('.minus');
  const plusButton = document.querySelector('.plus');

  minusButton.addEventListener('click', function() {
      let value = parseInt(quantityInput.value) || 1;
      value = value <= 1 ? 1 : value - 1;
      quantityInput.value = value;
  });

  plusButton.addEventListener('click', function() {
      let value = parseInt(quantityInput.value) || 1;
      value++;
      quantityInput.value = value;
  });
});

var ProductImg = document.getElementById("product-img");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function () {
  ProductImg.src = SmallImg[0].src;
};
SmallImg[1].onclick = function () {
  ProductImg.src = SmallImg[1].src;
};
SmallImg[2].onclick = function () {
  ProductImg.src = SmallImg[2].src;
};
SmallImg[3].onclick = function () {
  ProductImg.src = SmallImg[3].src;
};


