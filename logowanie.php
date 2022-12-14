<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        Strona logowania
    </header>
        <form method="post" action="#">
            <label for="login">Podaj login</label>
            <input type="text" name="login" id="login">
            <br>
            <label for="pass">Podaj hasło</label>
            <input type="password" name="pass" id="pass">
            <br>
            <label for="pass2">Powtórz hasło</label>
            <input type="password" name="pass2" id="pass2">
            <br>
            <input type="submit">
        </form>
        <?php
        if(!empty($_POST['login'])&& empty($_POST['pass'])&& empty($_POST['pass2']))
        {
            echo "<p>Wypełnij WSZYSTKIE dane!!!</p>";
        }else{
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $pass2=$_POST['pass2'];
        echo "<p>$login,$pass,$pass2</p>";
        if($pass!=$pass2){
            echo "<p>hasła są różne</P>";
        }
        }
        ?>
    <footer>
        Stronę wykonał Adrian
    </footer>
</body>
</html>