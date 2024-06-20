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
                            9:00-21:00F
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
                        <form action="database/review.php" class="contact-formulier" method="post">
                            <input type="text" id="email" placeholder="E-mailadres" name="email" />
                            <input type="text" id="onderwerp" placeholder="Onderwerp" name="onderwerp" />
                            <textarea name="bericht" id="bericht" placeholder="Bericht" ></textarea>
                            <input type="submit" id="verzenden" value="Verzenden" />
                        </form>
                        <!-- <form action="database/review.php" class="contact-formulier" method="post">
                            <input type="email" id="email" placeholder="E-mailadres" name="email" required />
                            <input type="text" id="onderwerp" placeholder="Onderwerp" name="onderwerp" required />
                            <textarea name="bericht" id="bericht" placeholder="Bericht" required></textarea>
                            <input type="submit" value="Verzenden" />
                        </form> -->
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </main>
    <script src="assets/javascript/script.js"></script>
</body>

</html>