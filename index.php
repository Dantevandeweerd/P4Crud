<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet" />
  </head>

  <body>
    <main>
      <?php include 'header.php' ?>
      <section>
        <div class="boeking">
          <img
            src="assets/img/landingpagefoto.png"
            alt="landingpagefoto"
            id="landingpagefoto" />
          <form action="" class="boeking-form">
            <input type="text" placeholder="Bestemming" />
            <input type="text" name="daterange"  />
            <input type="text" placeholder="kamer(s), Reizigers" />
            <input type="text" placeholder="Luchthaven" />
            <input
              type="submit"
              value="Bekijk resultaten"
              id="boeking-resultaat" />
          </form>
        </div>
      </section>

      <section class="vakantie-locaties">
        <button
          class="prev active"
          id="showslide1-button"
          onclick="showSlide1()">
          ❮
        </button>

        <div class="hotel" id="hotel-slide1">
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img
                  class="ster-boeking"
                  src="assets/img/4ster.png"
                  alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">testpagina</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img src="assets/img/4ster.png" alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">€ 865</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img src="assets/img/4ster.png" alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">€ 865</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
        </div>
        <div class="hotel active" id="hotel-slide2">
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img src="assets/img/4ster.png" alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">€ 865</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img src="assets/img/4ster.png" alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">€ 865</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
          <div class="boeking-blok">
            <div class="vakantie-foto">
              <img
                class="boeking-foto"
                src="assets/img/doryssa.png"
                alt="doryssa" />
            </div>
            <div class="vakantie-container">
              <div class="vakantie-naam">
                <img src="assets/img/4ster.png" alt="4ster" />
                <h2>Appartementen Doryssa Coast</h2>
                <p class="vakantie-bestemming">Griekenland Samos Pythagorion</p>
              </div>
              <div class="kosten">
                <p>
                  vanafprijs p.p
                  <img id="info" src="assets/img/info.png" alt="info" />
                </p>
                <p class="prijs">€ 865</p>
                <p class="verborgen-kosten">*Geen verborgen kosten</p>
              </div>
            </div>
          </div>
        </div>
        <button class="next" id="showslide2-button" onclick="showSlide2()">
          ❯
        </button>
      </section>
      <?php include 'footer.php' ?>
    </main>
    <script src="assets/javascript/script.js"></script>
    <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  </body>
</html>
