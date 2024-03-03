<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kebab Maker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kufam:wght@500;700;800;900&family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/630bf8c257.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/media.css" />
    <link rel="shortcut icon" href="./assets/kmicon.ico" type="image/x-icon" />
  </head>
  <body>
    <div id="app">
      <header>
        <a class="logo" href="/">
          <i class="fa-solid fa-utensils logo__icon"></i>
          <span class="logo__text">Kebab Maker</span>
        </a>
        <nav class="nav">
          <a href="#order" class="nav__link">Zamów</a>
          <a href="#meat-cards" class="nav__link">Menu</a>
          <a href="" class="nav__link">O nas</a>
        </nav>
      </header>
      <main class="hero">
        <div class="hero__action">
          <div class="hero__action__title">Kebab Maker,<br />najlepszy kebab<br />w mieście</div>
          <div class="hero__action__text">
            Nasze kebaby robione są z najlpeszych składników. Zdrowo oraz smacznie. Zamów teraz i skosztuj za kwadrans.
          </div>
          <div class="hero__action__buttons">
            <a href="#order" class="btn--primary">Złóż zamówienie</a>
            <a href="#meat-cards" class="btn--secondary">Menu</a>
          </div>
        </div>
        <img class="hero__img" src="./assets/heroill.svg" alt="shop" />
      </main>
      <section class="meat-cards" id="meat-cards">
        <div class="meat-cards__card">
          <img class="meat-cards__card__img" src="./assets/meat_icons/v2.svg" alt="" />
          <span class="meat-cards__card__name">Wołowina</span>
        </div>
        <div class="meat-cards__card">
          <img class="meat-cards__card__img" src="./assets/meat_icons/v4.svg" alt="" />
          <span class="meat-cards__card__name">Kurczak</span>
        </div>
        <div class="meat-cards__card">
          <img class="meat-cards__card__img" src="./assets/meat_icons/v3.svg" alt="" />
          <span class="meat-cards__card__name">Baranina</span>
        </div>
        <div class="meat-cards__card">
          <img class="meat-cards__card__img" src="./assets/meat_icons/v1.svg" alt="" />
          <span class="meat-cards__card__name">Mieszane</span>
        </div>
      </section>
      <section class="order" id="order">
        <section class="order__configurator">
          <form class="order__configurator__form">
            <h2>Konfigurator kebaba</h2>
            <div class="input">
              <label for="meat-type">Mięso</label>
              <div class="select">
                <select name="meat-type" id="meat-type">
                  <option value="a">Wołowina</option>
                  <option value="b">Kurczak</option>
                  <option value="c">Baranina</option>
                  <option value="d">Mieszane</option>
                </select>
                <i class="fa-solid fa-angle-down select__icon"></i>
              </div>
            </div>
            <div class="input">
              <label for="food-type">Typ</label>
              <div class="select">
                <select name="food-type" id="food-type">
                  <option value="roll">Bułka</option>
                  <option value="tortilla">Tortilla</option>
                </select>
                <i class="fa-solid fa-angle-down select__icon"></i>
              </div>
            </div>
            <div class="input">
              <label for="souce">Sos</label>
              <div class="select">
                <select name="souce" id="souce">
                  <option value="spicy">Ostry</option>
                  <option value="mixed">Mieszany</option>
                  <option value="mild">Łagodny</option>
                </select>
                <i class="fa-solid fa-angle-down select__icon"></i>
              </div>
            </div>
            <div class="input">
              <label for="salad">Surówka</label>
              <div class="select">
                <select name="salad" id="salad">
                  <option value="yes">Tak</option>
                  <option value="no">Nie</option>
                </select>
                <i class="fa-solid fa-angle-down select__icon"></i>
              </div>
            </div>
            <button class="btn--primary order__configurator__btn">Dodaj do zamówienia</button>
          </form>
        </section>
        <section class="checkout-preview">
          <h2>Twoje zamówienie</h2>
          <div class="checkout-preview__empty-text">Brak produktów</div>
          <!-- <div class="checkout-preview__product">
            <div class="checkout-preview__product__name">Kebab Rollo</div>
            <ul>
              <li>Mięso mieszane</li>
              <li>Surówka</li>
              <li>Sos mieszany</li>
              <i class="fa-solid fa-x"></i>
            </ul>
          </div> -->
          <form class="checkout-preview__form">
            <input type="submit" class="btn--secondary checkout-preview__button" value="Złóż zamówienie" />
          </form>
        </section>
      </section>
      <footer class="footer">
        <span class="footer__copy">Kebab Maker 2024 ©</span>
        <span class="footer__author">Created by Jakub D.</span>
        <i class="fa-solid fa-utensils footer__logo"></i>
      </footer>
    </div>
    <script src="./scripts/createProductEl.js"></script>
    <script src="./scripts/orderConfigurator.js"></script>
  </body>
</html>
