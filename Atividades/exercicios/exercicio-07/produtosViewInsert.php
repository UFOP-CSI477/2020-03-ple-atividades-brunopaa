<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir produtos</title>
</head>

<body>

  <form action="produtosControllerInsert.php" method="post">


    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">

    <label for="um">Unidade de Medida</label>
    <select id="um" name="um">
      <option value="pç">Peça</option>
      <option value="kg">Quilo</option>
      <option value="l">Litro</option>
      <option value="m">Metro</option>
    </select>
    <input type="submit" value="Inserir">

  </form>

</body>

</html>