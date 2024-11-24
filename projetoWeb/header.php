<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef à Paisana</title>
    <?php require ('linkscss.php')?>
</head>
<body>

    <!-- BARRA DE NAVEGAÇÃO-->
    <nav class="navbar navbar-expand-lg navbar-expand-md" id="navbar">
      <a href="index.php" class="navbar-brand ms-3 me-5" id="logo"><img src="imgs/logonb1.png" alt=""></a>
      <button class="navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-controls="mynavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
      </button>
      <div class="collapse navbar-collapse ms-5" id="mynavbar">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Início</a>
          </li>

         <!-- "Entradas" pelo menu dropdown -->
         <li class="nav-item dropdown">
          <a 
            href="#" 
            class="nav-link dropdown-toggle" 
            id="entradasDropdown" 
            role="button" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
            Entradas
          </a>
          <ul class="dropdown-menu" aria-labelledby="entradasDropdown">
            <li><a class="dropdown-item" href="#">Patês</a></li>
            <li><a class="dropdown-item" href="#">Tostas</a></li>
            <li><a class="dropdown-item" href="#">Outras</a></li>
          </ul>
        </li>         
          <!-- "Pratos Principais" pelo menu dropdown -->
          <li class="nav-item dropdown">
            <a 
              href="#" 
              class="nav-link dropdown-toggle" 
              id="pratosPrincipaisDropdown" 
              role="button" 
              data-bs-toggle="dropdown" 
              aria-expanded="false">
              Pratos Principais
            </a>
            <ul class="dropdown-menu" aria-labelledby="pratosPrincipaisDropdown">
              <li><a class="dropdown-item" href="receitascarne.php">Carne</a></li>
              <li><a class="dropdown-item" href="receitaspeixe.php">Peixe</a></li>
              <li><a class="dropdown-item" href="#">Saladas</a></li>
              <li><a class="dropdown-item" href="#">Massas</a></li>
            </ul>
          </li>
          
         <!-- "Sobremesas" pelo menu dropdown -->
         <li class="nav-item dropdown">
          <a 
            href="#" 
            class="nav-link dropdown-toggle" 
            id="sobremesasDropdown"
            role="button" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
            Sobremesas
          </a>
          <ul class="dropdown-menu" aria-labelledby="sobremesasDropdown">
            <li><a class="dropdown-item" href="#">Doces</a></li>
            <li><a class="dropdown-item" href="#">Fruta</a></li>
          </ul>
        </li>
        </ul>

        <form class="d-flex">
          <input type="text" class="form-control me-2" placeholder="Pesquisar..." required>
          <button type="button" class="me-2" id="btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
          </button>
        </form>

      </div>
    </nav>
</body>
</html>