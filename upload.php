<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio Concluído</title>
    <link rel="stylesheet" href="./css/upload.css">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "imagens";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];

        $folder = "images/"; // folder to store images

        if (move_uploaded_file($tmp_name, $folder. $image)) {
            $sql = "INSERT INTO arquivos (image) VALUES ('$image')";

            if ($conn->query($sql) === TRUE) {
                echo '<p class="success"><h1>Envio Concluído</h1></p>';
            } else {
                echo '<div class="error"><h1>Erro no Envio</h1><p>Tente Novamente</p></div>';
            }
        } else {
            echo '<div class="error"><h1>Erro no Envio</h1><p>Tente Novamente</p></div>';
        }
    }

    $conn->close();
    ?>
</body>
</html>
