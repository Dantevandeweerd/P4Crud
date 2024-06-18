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
        <!-- Display error message -->
        <?php session_start(); ?>
        <?php if (isset($_SESSION['error'])): ?>
          <div class="error">
            <?php echo $_SESSION['error'];
            unset($_SESSION['error']); ?>
          </div>
        <?php endif; ?>
        <!-- Form with onsubmit validation -->
        <form action="database/register.php" class="register-form" method="post"
          onsubmit="return wachtwoordvalidatie()">
          <input type="text" name="email" id="email" placeholder="E-mailadres" />
          <input type="password" name="wachtwoord" id="wachtwoord" placeholder="Wachtwoord" />
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
            <input type="text" name="bevestig-wachtwoord" id="bevestig-wachtwoord" placeholder="Bevestig Wachtwoord" />
            <input type="submit" id="versturen" value="Account Creëer" />
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