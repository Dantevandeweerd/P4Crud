<script>
function wachtwoordChecker() {
    var wachtwoord = document.getElementById("wachtwoord").value;
    var bevestig = document.getElementById("bevestig-wachtwoord").value

    var minLengte = /.{8,}/;
    var hooftletter = /[A-Z]/;
    var cijfer = /\d/;
    var specialetekens = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;


    var isminLengte = minLengte.test(wachtwoord);
    var hfhooftletter = hooftletter.test(wachtwoord);
    var hfcijfer = cijfer.test(wachtwoord);
    var hfspecialetekens = specialetekens.test(wachtwoord);
    var zelfdeCheck = wachtword === bevestig
    // if(!zelfdeCheck){
    //   alert("wacht is niet het zelfde")
    // }

    return isminLengte && hfhooftletter && hfcijfer && hfspecialetekens;
}

function wachtwoordvalidatie() {
    var isValid = wachtwoordChecker();
    alert("Wachtword heeft niet alle eisen");
    if (isValid) {
        alert("Wachtword heeft niet alle eisen");
    }

}
function poep(){
    alert("Wachtword heeft niet alle eisen");
}
</script>

<form>
        <label for="password">Password:</label>
        <input type="password" id="wachtwoord" name="wachtwoord"><br><br>
        <input type="text" id="bevestig-wachtwoord" placeholder="Bevestig Wachtwoord" />
        <button type="button" onclick="wachtwoordvalidatie()">Validate Password</button>
        
    </form>
