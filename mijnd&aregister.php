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
    <img src="assets/img/achtergrond.png" alt="achtergrond" id="inlog-achtergrond" />
    <div class="inlog-container">
      <div class="register-blok">
        <img src="assets/img/logolos.png" alt="logolos" id="inlog-logo" />
        <h1>welkom bij mijn D&A</h1>
        <h2>Vul onderstaande gegevens in.</h2>
        <form action="" class="register-form" onsubmit="">
          <input type="text" id="email" placeholder="E-mailadres" />
          <input type="password" id="wachtwoord" placeholder="Wachtwoord" />
          <div class="wachtwoord-info">
            <ul>
              <li>Minimaal 8 tekens</li>
              <li>Cijfer</li>
            </ul>
            <ul>
              <li>Speciale karaktes</li>
              <li>Grote letter</li>
            </ul>
          </div>
          <div class="register">
            <input type="text" id="bevestig-wachtwoord" placeholder="Bevestig Wachtwoord" />
            <input onclick="wachtwoordvalidatie()" type="submit" id="versturen" value="Account Creëer" />
          </div>
        </form>

        <div id="login-link">
          <a href="mijnd&a.php"><button>
              Al een account? <span id="Creëer">inloggen</span>
            </button></a>
        </div>
      </div>
    </div>
    <?php include 'footer.php' ?>
  </main>
</body>

</html>