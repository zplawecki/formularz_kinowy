<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form class="login" method = "post" action = "">
                <label>login</label><br>
                <input name = "login" type = "text" maxlength = "255" value = ""/><br>
                <label>haslo</label><br>
                <input name = "password" type = "password" maxlength = "255" value = ""/><br>
                <input type="submit" name="zaloguj" value="zaloguj">


            </form>
        </div>        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ((isset($_POST['login'])) && (isset($_POST['password']))) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        };

        if (($password == 'admin') && ($password == 'admin')) {
        echo "Witaj, zostales zalogowany. Przejdz do <a href=\"adminPanel.php\">Panelu Admina</a>";
        } else {
        echo "Niewlasciwe dane logowania, wpisz jeszcze raz lub wejdz <a href=\"ticketShop.php\">jako niezarejestrowany uzytkownik</a>";
        };
        };
        ?>
    </body>
</html>
