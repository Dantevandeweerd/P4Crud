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
        <section class="contact-pagina">
            <div class="contact-container">
                <div class="contact-tijd">
                    <h1>Bel of Mail ons!</h1>
                </div>
                <div class="bellen-mailen">
                    <div class="bellen">
                        <h2 class="koptekts-bellen">Bellen</h2>
                        <p>
                            Maandag-Vrijdag:<br />
                            9:00-19:00
                        </p>
                        <p>
                            Zaterdag: <br />
                            11:00-18:00
                        </p>
                        <p>
                            Zondag: <br />
                            gesloten
                        </p>
                    </div>
                    <div class="mailen">
                        <h2 class="koptekts-bellen">Mailen</h2>
                        <p>
                            Maandag-Vrijdag:<br />
                            9:00-21:00
                        </p>
                        <p>
                            Zaterdag: <br />
                            11:00-20:00
                        </p>
                        <p>
                            Zondag: <br />
                            gesloten
                        </p>
                    </div>
                </div>
                <div>
                    <img id="strand" src="assets/img/strand-wijn.png" alt="strand-wijn" />
                </div>
            </div>
            <div>
                <div class="contact-container">
                    <div id="contact-form">
                        <img src="assets/img/logolos.png" alt="logolos" id="inlog-logo" />
                        <h1>Contact Form </h1>
                        <h2>
                            Vul onderstaande gegevens in.
                        </h2>
                        <form action="" class="contact-formulier">
                            <input type="text" id="E-mail" placeholder="E-mailadres" />
                            <input type="password" id="onderwerp" placeholder="Wachtwoord" />
                            <textarea name="" id="Bericht"></textarea>
                        </form>
                        <div class="inloggen">
                            <input type="submit" id="versturen" value="Inloggen" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </main>
    <script src="assets/javascript/script.js"></script>
</body>

</html>