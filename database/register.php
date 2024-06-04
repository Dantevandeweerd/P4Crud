<script>
function wachtwoordChecker() {
    const wachtwoord = document.getElementById("wachtwoord").value;
    const bevestig = document.getElementById("bevestig-wachtwoord").value

    const minLengte = /.{8,}/;
    const hooftletter = /[A-Z]/;
    const cijfer = /\d/;
    const specialetekens = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;


    const isminLengte = minLengte.test(wachtwoord);
    const hfhooftletter = hooftletter.test(wachtwoord);
    const hfcijfer = cijfer.test(wachtwoord);
    const hfspecialetekens = specialetekens.test(wachtwoord);
    const zelfdeCheck = wachtwoord === bevestig

    return isminLengte && hfhooftletter && hfcijfer && hfspecialetekens && zelfdeCheck;
}

function wachtwoordvalidatie() {
    const isValid = wachtwoordChecker();
    if (!isValid) {
        alert("Wachtword heeft niet alle eisen of wachtwoord is niet het zelfde");
    }
    else{
        alert("mooi")
    }

}
</script>

<form>
        <label for="password">Password:</label>
        <input type="password" id="wachtwoord" name="wachtwoord"><br><br>
        <input type="text" id="bevestig-wachtwoord" placeholder="Bevestig Wachtwoord" />
        <button type="button" onclick="wachtwoordvalidatie()">Validate Password</button>
        
    </form>
