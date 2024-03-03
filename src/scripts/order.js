const orderContentEl = document.querySelector(".checkout-preview");
const orderForm = document.querySelector(".order__details__form");

const products = JSON.parse(sessionStorage.getItem("products"));

products.forEach(product => {
  orderContentEl.insertAdjacentElement(
    "beforeend",
    createProductEl(product.type, product.meat, product.souce, product.salad)
  );
});

orderForm.addEventListener("submit", validateOrderDetails);

const placeInput = document.getElementById("place");
const streetInput = document.getElementById("street");
const numberInput = document.getElementById("number");
const phoneInput = document.getElementById("phone");

function highlight(...elems) {
  let el = null;

  if (elems.length > 1) {
    elems.forEach(arrEl => highlight(arrEl));
    return;
  } else {
    el = elems[0];
  }

  el.style.borderColor = "#c78888";

  el.addEventListener("focus", () => {
    el.style.borderColor = "";
    el.removeEventListener("focus");
  });
}

function validateOrderDetails(e) {
  e.preventDefault();

  let vaild = true;

  [placeInput, streetInput, numberInput, phoneInput].forEach(input => {
    if (input.value === "") {
      highlight(input);
      vaild = false;
    }
  });

  if (new RegExp(/[0-9]/).test(placeInput.value)) {
    highlight(placeInput);
    vaild = false;
  }

  if (new RegExp(/[a-z]|[A-Z]/).test(phoneInput.value)) {
    highlight(phoneInput);
    vaild = false;
  }

  if (vaild) {

    const data = {
      phone: phoneInput.value,
      number: numberInput.value,
      street: streetInput.value,
      place: placeInput.value
    };


    fetch("api/handle_order.php", {
      method: "post",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: JSON.stringify({ 'msg': 'BBB' }),
    })
    .then(res => console.log(res))
  }
}
