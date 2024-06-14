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
      <?php include 'header.php'?>
      <img
        src="assets/img/achtergrond.png"
        alt="achtergrond"
        id="inlog-achtergrond" />
      <div class="inlog-container">
        <div class="inlog-form">
          <img src="assets/img/logolos.png" alt="logolos" id="inlog-logo" />
          <h1>welkom bij mijn D&A</h1>
          <h2>
            Log in om jouw boekingen te beheren en <br />
            te bewerken, je vakantie om te boeken en <br />
            reisdocumenten te downloaden.
          </h2>
          <form action="" class="register-form" onsubmit="return inlogCheck()">
            <input type="text" id="email" placeholder="E-mailadres" />

            <input type="password" id="wachtwoord" placeholder="Wachtwoord" />
            <div class="inloggen">
              <input type="submit" id="versturen" value="Inloggen" />
            </div>
          </form>
          <div class="wachtwoord-vergeten">
            <button><h3>Wachtword vergeten</h3></button>
          </div>
          <div id="register-link">
            <a href="mijnd&aregister.php"
              ><button>
                geen account? <span id="Creëer">Creëer een account</span>
              </button></a
            >
          </div>
        </div>
      </div>
      <?php include 'footer.php'?>
    </main>
  </body>
</html>
