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
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/media.css" />
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
          <a href="" class="nav__link">Zamów</a>
          <a href="" class="nav__link">Menu</a>
          <a href="" class="nav__link">O nas</a>
        </nav>
      </header>
      <section class="order" id="order">
        <section class="order__details">
          <form class="order__details__form">
            <h2>Adres dostawy</h2>
            <div class="input">
              <label for="place">Miejscowość</label>
              <input class="input" type="text" name="place" id="place">
            </div>
            <div class="input">
              <label for="street">Ulica</label>
              <input class="input" type="text" name="street" id="street">
            </div>
            <div class="input">
              <label for="number">Numer lokalu</label>
              <input class="input" type="text" name="number" id="number">
            </div>
            <div class="input">
              <label for="phone">Numer telefonu</label>
              <input class="input" type="text" name="phone" id="phone">
            </div>
            <button class="btn--primary order__details__btn">Złóż zamówienie</button>
          </form>
        </section>
        <section class="checkout-preview">
          <h2>Twoje zamówienie</h2>
        </section>
      </section>
      <footer class="footer">
        <span class="footer__copy">Kebab Maker 2024 ©</span>
        <span class="footer__author">Created by Jakub D.</span>
        <i class="fa-solid fa-utensils footer__logo"></i>
      </footer>
    </div>
    <script src="./scripts/createProductEl.js"></script>
    <script src="./scripts/order.js"></script>
  </body>
</html>
