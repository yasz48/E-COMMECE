<?php>
    include 'bd.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, telefone, senha)
    VALUES ('$nome', '$email', '$telefone', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
            header("Location: index.html");
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }

    $conn->close();
    ?>