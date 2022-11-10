<?php

$mysql  =   mysqli_connect("localhost", "root", "", "form");
$mysql->set_charset("utf8");

$nome   =   $_POST["nome"];
$email  =   $_POST["email"];
$senha  =   md5($_POST["senha"]);

$sql="INSERT INTO users (nome, email, senha) VALUES (
    '$nome', '$email', '$senha');";

if(mysqli_query($mysql, $sql)){
    echo    "User cadastrado";
}else{
    echo    "Erro:" .mysqli_connect_error();
}

mysqli_close($mysql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta   charset="UTF-8">
        <title>Form</title>
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="reset.css">
    </head>

    <body>
        <main>
            <div>

                <form   action="index.php"  method="POST">
                    <label for="nome">Nome e Sobrenome</label>
                    <input type="text"  name="nome"    id="nome" required    class="inputs">
                    
                    <label for="email">Email</label>
                    <input type="email"  name="email"   id="email"  required    class="inputs" placeholder="exemplo@exemplo.com">
                    
                    <label for="senha">Senha</label>
                    <input type="password"  name="senha" id="senha"   required    class="inputs">
                    
                    <input type="submit"    class="enviar">
                </form>
            </div>
        </main>
    </body>

</html>
