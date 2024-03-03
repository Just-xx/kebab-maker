const MEAT_TYPES = {
  a: "Wołowina",
  b: "Kurczak",
  c: "Baranina",
  d: "Mieszane",
};

const FOOD_TYPES = {
  roll: "Bułka",
  tortilla: "Rollo",
};

const SALAD_TYPES = {
  yes: "Surówka",
  no: "Bez surówki",
};

const SOUCE_TYPES = {
  spicy: "Sos ostry",
  mixed: "Sos mieszany",
  mild: "Sos łagodny",
};



function createProductEl(type, meat, souce, salad, editable) {
  const containerEl = document.createElement("div");
  containerEl.classList.add("checkout-preview__product");

  const prodNameEl = document.createElement("div");
  prodNameEl.classList.add("checkout-preview__product__name");
  prodNameEl.textContent = type === "roll" ? "Kebab w bułce" : "Kebab rollo";

  const attrsListEl = document.createElement("ul");
  const souceItem = document.createElement("li");
  const meatItem = document.createElement("li");
  const saladItem = document.createElement("li");
  
  const deleteIcon = document.createElement("i");

  deleteIcon.classList.add('fa-solid', 'fa-x', 'checkout-preview__product__delete')
  deleteIcon.dataset.prodId = products.length - 1;
  deleteIcon.addEventListener('click', e => deleteProduct(e.target.dataset.prodId));

  souceItem.textContent = SOUCE_TYPES[souce];
  meatItem.textContent = MEAT_TYPES[meat];
  saladItem.textContent = SALAD_TYPES[salad];

  attrsListEl.insertAdjacentElement("beforeend", souceItem);
  attrsListEl.insertAdjacentElement("beforeend", meatItem);
  attrsListEl.insertAdjacentElement("beforeend", saladItem);

  containerEl.insertAdjacentElement("afterbegin", prodNameEl);
  containerEl.insertAdjacentElement("beforeend", attrsListEl);

  if (editable) containerEl.insertAdjacentElement('beforeend', deleteIcon);

  return containerEl;
}