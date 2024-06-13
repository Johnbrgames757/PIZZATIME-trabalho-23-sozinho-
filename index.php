<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6978/6978255.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dominus Pizza</title>
</head>
<body>

<header> 

</header>



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzatime";

$conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Telefone = $_POST["Telefone"];
    $Endereço = $_POST["Endereço"];
    $Pagamento = $_POST["Pagamento"];
        

    $sql = "INSERT INTO cliente (Telefone, Endereço) VALUES ('$Telefone', '$Endereço', '$Pagamento')";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $Sabor = $_POST["Sabor"];
        $Tamanho = $_POST["Tamanho"];
        $Refri = $_POST["Refri"];
        $Preferencia = $_POST["Preferencia"];
        $Nome = $_POST["Nome"];

    $sql = "INSERT INTO pizza (Sabor, Tamanho, Refri, Preferencia, Nome) VALUES ('$Sabor', '$Tamanho', '$Refri', '$Preferencia', '$Nome')";

    if($conn->query($sql) === true){
        echo "Obrigado pelo pedido Seu pedido esta sendo feito e logo chegara quentinho em sua casa!";
    } else{
        echo "infelizmente ocorreu um erro" . $sql . "<br>" . $conn->error;
    }

}
}

$conn->close();

?>
<button id="toggle-mode">Modo Escuro</button>
<h1>Bem vindo ao Dominus Pizza!</h1>
<div class="box">
<form action="" method="post">

Nome: <input type="text" name="Nome" id="" required autocomplete="off" ><br><br>
Telefone: <input type="number" name="Telefone" id="" required autocomplete="off"><br><br>
Local: <input type="text" name="Endereço" id="" required autocomplete="off"><br><br>
Forma de pagamento: <input type="text" name="Pagamento" id="" required autocomplete="off"><br><br>
Preferência: <input type="text" name="Preferencia" id="" required autocomplete="off"><br><br>
<label for="Sabor">Sabor:</label>
        <select name="Sabor" id="Sabor">
            <option value="Calabresa">Calabresa</option>
            <option value="Queijo">4 Queijos</option>
            <option value="Frango">Frango</option>
            <option value="Portu">Portuguesa</option>
            <option value="Chocolate">Chocolate</option>
            <option value="Sorvete">Sorvete</option>

            </select>

      <label for="Tamanho">Tamanho:</label>
        <select name="Tamanho" id="Tamanho">
            <option value="P">Pequena</option>
            <option value="M">Média</option>
            <option value="G">Grande</option>
            <option value="F">Família</option>
            </select>

            <label for="Refri">Bebida:</label>
        <select name="Refri" id="Refri">
            <option value="Coca">Coca-cola</option>
            <option value="Fruki">Fruki</option>
            <option value="Uva">Fanta Uva</option>
            <option value="Laranja">Fanta laranja</option>
            <option value="Pepsi">Pepsi</option>
            <option value="Sprite">Sprite</option>
            <option value="S">Sem Refri</option>
            </select>
            
            
<input type="submit" value="Pedir!">
</div>

<footer>


<div class="bx">
    <h2>Redes Sociais</h2>
    
   <a href="https://github.com/Johnbrgames757"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="" height="75px" 
   width="75px"></a>

    <p>Desenvolvido por John Fardin | 2024 &copy;</p>
</div>

</footer>

<script src="main.js"></script>
</body>
</html>

