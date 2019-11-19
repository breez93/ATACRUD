<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/primitive-ui/dist/css/main.css">
    <title>user</title>
</head>
<body>
<hr>
<div class="container">
<h2>ATA RELATIONSHIPS</h2>
    <?php
    include "config.php";
    ?>
    <p>
    Programa de edição e aprovação de ATAS, porfavor insira os dados de sessão
    </p>
    </div>
    <div class="container">
    <form action="user_profile.php" method="POST">
    <p>
    <label for="email">email :</label>
    <input type="text" name="email" placeholder="introduza email" required>
    </p>
    <p>
    <label for="password">password :</label>
    <input type="password" placeholder="introduza password" required> 
    </p>
    <p>
    <input type="submit" value="Entrar" class="button">
    </p>
    <!-- Comparar a row existente da base de dados para aceitar o log in !-->
    <?php
    if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $pass=$_POST["password"];
    }
    $_SESSION["username"]=$email;
    $_SESSION["password"]=$pass;
    $sql = "SELECT * FROM secretariado";
    $queryselect = mysqli_query($con,$sql);
    if($queryselect){
        $linha = mysqli_fetch_assoc($con,$sql);
    }
    if($linha==$_SESSION["email"] OR $linha==$_SESSION["password"]){
        echo "dados conhecidos";
    }
    ?>
    </form>
    </div>
</body>
</html>