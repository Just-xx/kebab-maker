let products = [];

const configuratorForm = document.querySelector(".order__configurator__form");
const checkoutSec = document.querySelector(".checkout-preview");
const checkoutTitleEl = document.querySelector(".checkout-preview h2");
const checkoutEmptyText = document.querySelector(".checkout-preview__empty-text");
const checkoutBtn = document.querySelector(".checkout-preview__button");

document.addEventListener("DOMContentLoaded", () => checkCheckoutEmptyness());

configuratorForm.addEventListener("submit", e => {
  e.preventDefault();

  const meat = document.getElementById("meat-type").value;
  const type = document.getElementById("food-type").value;
  const souce = document.getElementById("souce").value;
  const salad = document.getElementById("salad").value;

  products.push({
    type,
    meat,
    souce,
    salad,
  });

  prodEl = createProductEl(type, meat, souce, salad, true);
  checkoutTitleEl.insertAdjacentElement("afterend", prodEl);
  checkCheckoutEmptyness();
});

function checkCheckoutEmptyness() {
  if (products.length === 0) {
    checkoutEmptyText.style.display = "block";
    checkoutBtn.style.display = "none";
  } else {
    checkoutEmptyText.style.display = "none";
    checkoutBtn.style.display = "";
  }
}

function deleteProduct(id) {
  products.splice(id, 1);

  document.querySelectorAll(".checkout-preview__product").forEach(prod => prod.remove());

  products.forEach(product => {
    checkoutTitleEl.insertAdjacentElement(
      "afterend",
      createProductEl(product.type, product.meat, product.souce, product.salad, true)
    );
  });

  checkCheckoutEmptyness();
}

document.querySelector(".checkout-preview__form").addEventListener("click", orderListener);

function orderListener(e) {
  e.preventDefault();
  sessionStorage.setItem("products", JSON.stringify(products));
  window.location.replace("/order.php");
}
