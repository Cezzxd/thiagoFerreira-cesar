<!DOCTYPE html>	
<html>
    <meta charset="utf-8"/>
        <head>
            <title>Veneza Restaurante- Venha nos conheçer</title>
            <link rel="stylesheet" type="text/css" href="style/style.css"/>	
        </head>
<body>
    <div class="geral">
        <?php include "directives/navView.php";?>
            <section class="center">
                <form action="login.php" method="POST">
                    <p>Usuário:<br/><input type="text" name="usuario" value="" id="usuario"/></p>
                    <p>Senha:<br/><input type="password" name="senha" value="" id="senha"/></p>
                    <p><input type="submit" value="LOGIN"/></p>
                </form>
            </section>
        <?php include "directives/footerView.php";?>
        </div>
    </body>
</html>
