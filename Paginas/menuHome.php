<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>

</head>
<body>
  <!-- Contêiner com fundo laranja e padding vertical -->
  <div class="fundo  py-4" style="background-color: #FF6B01;">
    <div class="container mt-4 mb-0">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <!-- Search bar com botões -->
          <div class="input-group">
            <!-- Dropdown para estado -->
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              PR
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">PR</a></li>
              <li><a class="dropdown-item" href="#">SP</a></li>
              <li><a class="dropdown-item" href="#">RJ</a></li>
              <li><a class="dropdown-item" href="#">MG</a></li>
              <li><a class="dropdown-item" href="#">RS</a></li>
            </ul>

            <!-- Dropdown para categoria -->
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Eletrônicos
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Eletrônicos</a></li>
              <li><a class="dropdown-item" href="#">Imóveis</a></li>
              <li><a class="dropdown-item" href="#">Veículos</a></li>
              <li><a class="dropdown-item" href="#">Móveis</a></li>
              <li><a class="dropdown-item" href="#">Roupas</a></li>
            </ul>

            <!-- Campo de pesquisa -->
            <input type="text" class="form-control" placeholder="Estou procurando por..." aria-label="Campo de pesquisa">

            <!-- Botão de pesquisa -->
            <button class="btn btn-light" type="button">
              <i class="bi bi-search"></i> <!-- Ícone de lupa -->
            </button>
          </div>

          <!-- Navegação com links -->
          <ul class="nav nav-pills mt-3">
            <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle "style="color: white;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: white;" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link "style="color: white;" href="#">Todos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
