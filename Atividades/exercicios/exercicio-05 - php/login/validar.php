<?php

    echo "Post";
    var_dump($_POST);

    $user= $_POST['usuario'];
    $pass= $_POST['senha'];

    //Controle
    if( $user=="admin" && $pass=="123456"){

        echo "<h1>Olá, $user</h1>";
        echo "<p>Senha: $pass</p>";

    }else{
        echo "<h1>Usuário e senha inválidos!</h1>";

    }
    echo "<a href=\"/login/index.php\">Voltar</a>";
    echo '<a href="../Cadastro.php">Voltar</a>';


  
