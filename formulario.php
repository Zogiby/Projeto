<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Foto e Vídeo</title>
    <link rel="stylesheet" type="text/css" href="./css/formulario.css">
</head>
<body>
  <div class="container">
    <h2>Envie sua Foto ou Vídeo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label for="image" class="button">Escolher Arquivo</label>
      <input type="file" name="image" id="image">
      <input type="submit" value="Enviar" name="submit" class="button">
    </form>
  </div>
</body>
</html>