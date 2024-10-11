<?php
snippets('Header');
snippets('AdminNav');
?>
<form method="POST">
    <div class="control-group">
        <label to="firstname">Vorname:</label>
        <input id="firstname" type="text" name="firstname" placeholder="Vorname">
    </div>
    <div class="control-group">
        <label to="lastname">Nachname:</label>
        <input id="lastname" type="text" name="lastname" placeholder="Nachname">
    </div>
    <div class="control-group">
        <label to="email">Email:</label>
        <input id="email" type="email" name="email" placeholder="Email">
    </div>
    <div class="control-group">
        <label to="password">Passwort:</label>
        <input id="password" type="password" name="password" placeholder="Passwort">
    </div>
    <div class="control-group">
        <label to="confirm_password">Passwort wiederholen:</label>
        <input id="confirm_password" type="password" name="confirm_password" placeholder="Passwort wiederholen">
    </div>
    <div class="control-group">
        <p>Ich habe schon ein Account <a href="#">Login</a></p>
    </div>
    <button type="submit" value="submit">Registrieren</button>
</form>

<?php
snippets('Footer');
?>