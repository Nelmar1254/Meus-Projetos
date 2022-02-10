<?php
$error="";
if(isset($_POST["registrar"])){
$nome= $_POST["nome"];
$email= $_POST["email"];
$apelido= $_POST["apelido"];
$pass= $_POST["pass"];
$cpass= $_POST["cpass"];
$notify= $_POST["notify"];

$verify= mysqli_query("SELECT * FROM users WHERE email= '$email'");
$verifytn= mysqli_query("SELECT * FROM users , WHERE apelido= '$apelido'");


 if(strlen($nome) <4 ){
     $error= "<h2 style='color: red'>Nome muito pequeno</h2>";
}else if (strlen($email) <8){
        $error= "<h2 style='color: red'>Email muito pequeno</h2>";
}else if (strlen($apelido) <1){
        $error= "<h2 style='color: red'>Apelido muito pequeno</h2>";
}else if (strlen($pass)){
        $error= "<h2 style='color: red'>Senha muito fraca</h2>";
}else if ($pass != $cpass){
        $error= "<h2 style='color: red'>Senhas não condizem</h2>";
     }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro - Site Top</title>
    <link rels="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <center>
        <h1>
            Registre-se
        </h1>
        <div class="painel">
        <form method="POST">
            <table width="75%">
                <tr>
                 <td class="white" style="float: right;">
                   Nome:
                 </td>
                 <td>
                  <input type="name"  name="none"> 
                 </td>
                </tr>
                <tr>
                 <td class="white" style="float: right;">
                 Email:</td>
                 <td><input type="email"  name="email"> </td>
                </tr>
                <tr>
                 <td class="white" style="float: right;">
                 Apelido:
                </td>
                 <td><input type="name"  name="apelido"> </td>
                </tr>
                <tr>
                 <td class="white" style="float: right;">
                 Senha:
                </td>
                 <td><input type="password"  name="pass"> </td>
                </tr>
                <tr>
                 <td class="white" style="float: right;">
                 Confirmar Senha:
                </td>
                 <td>
                     <input type="passord"  name="pass"> 
                    </td>
                </tr>
                <tr>
                 <td class="white" style="float: right;">
                   Receba Novidades via email:
                 </td>
                 <td>
                     <input type="checkbox"  name="notify">
                     <input type="hidden"  name="registrar"> 
                 </td>
                </tr>
                
            </table>
            <button type="submit">
                registrar
            </button>
        </form>
        </div>
    </center>
</body>
</html>