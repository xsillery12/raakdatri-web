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
    const filters = document.querySelectorAll('.filter');
    const products = document.querySelectorAll('.row');

    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            filterProducts(category);
        });
    });

    function filterProducts(category) {
        products.forEach(product => {
            const isNew = product.querySelector('.product-text h5')?.innerText === 'New';
            const isSale = product.querySelector('.product-text h5')?.innerText === 'Sale';
    
            if (category === 'all') {
                product.style.display = 'block';
            } else if (category === 'best-seller') {
                if (!product.querySelector('.product-text') && !product.querySelector('.product-text1')) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            } else if (category === 'new-arrivals') {
                if (isNew) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            } else if (category === 'on-sale') {
                if (isSale) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            }
        });
    }     
});

document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('.filter');

    filters.forEach(filter => {
        filter.addEventListener('click', function() {

            filters.forEach(f => f.classList.remove('active'));

            this.classList.add('active');

            const category = this.getAttribute('data-category');
            filterProducts(category);
        });
    });

    function filterProducts(category) {
    }
});
