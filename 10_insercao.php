<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h2>Tela de cadastro</h2>
    <!-- método POST -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Conecta ao banco de dados
        $servername = "localhost:3309";
        $username = "root";
        $password = "";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Insere o registro no banco de dados
        // Insere na tabela clientes os seguintes valores
        $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";


        // Confere se a variável 'sql' esta correta
        if ($conn->query($sql) === TRUE){

            // exibe a mensagem
            echo "<p style='color: green;'>Cliente cadastrado com sucesso!</p>";
        } else{
            echo "<p style='color: red;'>Erro ao cadastrar" . $conn->error . "</p>";
        }

        // Encerra a conexão
        $conn->close();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Valida de os campos não estão vazios e o email é válido
        if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<p style= 'color: green;'>Feedback enviado com sucesso!</p>";
        } else{
            echo "<p style='color: red;'>Por favor, preencha todos os campos coretamente</p>";
        }
    }
    ?>
</body>
</html>
