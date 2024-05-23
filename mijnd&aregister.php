<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <main>
      <?php include 'header.php'?>
      <img
        src="assets/img/achtergrond.png"
        alt="achtergrond"
        id="inlog-achtergrond"
      />
      <div class="inlog-container">
        <div id="inlog-form">
          <img src="assets/img/logolos.png" alt="logolos" id="inlog-logo" />
          <h1>welkom bij mijn D&A</h1>
          <h2>
            Log in om jouw boekingen te beheren en <br />
            te bewerken, je vakantie om te boeken en <br />
            reisdocumenten te downloaden.
          </h2>
          <form action="" class="register-form">
            <input type="text" id="email" placeholder="E-mailadres" />
            <input type="password" id="wachtword" placeholder="Wachtwoord" />
            <h3>Wachtword vergeten</h3>
            <input type="submit" id="versturen" placeholder="inloggen" />
            <h3>geen account? Creëer een account</h3>
          </form>
        </div>
      </div>
      <?php include 'footer.php'?>
    </main>
  </body>
</html>
