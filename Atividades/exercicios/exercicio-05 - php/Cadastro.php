<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Cadastro Php</title>

</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#c53336;">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.jpg" width="30" height="30" alt="" loading="lazy">
          </a>
        
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link active " href="Home.html" >Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Perfil.html" >Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Cadastro.html" >Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Relatorio.html">Relatório</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Grid.html"  >Grid</a>
          </li>
  
        
        </ul>
      </div>
    </nav>

    <form method="post" action="/login/validar.php">

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Digite aqui seu nome"
             class="form-control">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="add" placeholder="Digite aqui seu endereço"
            class="form-control">
        </div>

        <div class="form-group">
            <label for="user">Usuário</label>
            <input type="text" name="usuario" id="user" placeholder="Digite aqui sua senha"
            class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">senha</label>
            <input type="password" name="senha" id="pass" placeholder="Digite aqui sua senha"
            class="form-control">
        </div>


        <div>
            <label>Gênero:</label>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="feminino" value="1"
                class="form-check-input">
                <label for="feminino" 
                class="form-check-label">Feminino</label>
            </div>

            <div class="form-group form-check">
                <input type="radio" name="genero" id="masculino" value="2"
                class="form-check-input">
                <label for="masculino"
                class="form-check-label">Masculino</label>
            </div>
       
       
            
        </div>

        <div>
            <label>Áreas de interesse:</label>

            <div class="form-group form-check">
                <input type="checkbox" name="area[0]" id="web"
                class="form-check-input">
                <label for="web" class="form-check-label">Sistemas Web</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="area[1]" id="bd"
                class="form-check-input">
                <label for="bd" class="form-check-label">Banco de Dados</label>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="area[2]" id="redes"
                class="form-check-input">
                <label for="redes" class="form-check-label">Redes</label>
            </div>

        </div>



        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">

    </form>

</body>

</html>