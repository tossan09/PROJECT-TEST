<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formularioDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO candidatos (nome, email, telefone, genero, data_nascimento, cidade, estado, endereco) 
            VALUES ('$nome', '$email', '$telefone', '$genero', '$data_nascimento', '$cidade', '$estado', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
