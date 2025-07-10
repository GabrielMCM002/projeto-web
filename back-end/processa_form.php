<?php
    //print_r($_GET);
    $nome= $_GET['nome'];
    $idade = $_GET['idade'];

    echo '<h1>Dados do Usuario</h1>';
    echo'<hr>';

    echo "<p>O usuário $nome tem $idade anos.</p>";
    
    echo'<a href="http://localhost/projeto-web/index.html"><button>Home Page</button></a>';
    echo '<button type="button onclick="javascript:history.back()">Voltar</button>';
    echo '<button onclick="window.locations.href=\'https:\\\\www.udesc.br\'">Vai para a Udesc<button>';