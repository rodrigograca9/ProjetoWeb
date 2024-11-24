<!DOCTYPE html>
  <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef à Paisana</title>
    <?php require ('linkscss.php') ?>
  </head>
  <body>

  <?php require ('header.php') ?>

        <!-- Página de Receita -->
    <div id="parteImprimir" class="container mt-4 mb-5">
      <!-- Título e Imagem Principal -->
      <div class="text-center">
        <h1 class="fw-bold">Ovos Benedict com legumes e pão de cereais</h1>
        <img src="imgs/ovos-benedict-legumes-pao-cereais.jpeg" alt="" class="img-fluid my-4">

      <!-- Descrição da Receita -->
        <p class="mt-3">
          Esta versão mais portuguesa de ovos Benedict, aqui com azeite, legumes e pão de cereais, vai transformar os seus pequenos-almoços de fim de semana. Uma receita rápida e fácil, para apreciar em família.
        </p>
      </div>
      

      <!-- Ingredientes -->
      <h3 class="fw-bold mt-5 mb-4">Vais precisar dos seguintes ingredientes:</h3>
      <ul class="list-group ms-4">
        <li>400g de vegetais</li>
        <li>4 ovos</li>
        <li>Pão de trigo e centeio</li>
        <li>2 colheres de sopa de azeite</li>
        <li>Pimenta moída</li>
        <li>Alho em pó</li>
        <li>Flor de sal</li>
      </ul>

      <h3 class="fw-bold mt-5 mb-5">Preparação:</h3>
      <div>
        <p><strong>Passo 1:</strong></p>
        <p>Salteie os legumes numa colher de sopa de azeite e tempere a gosto com pimenta, alho em pó e metade da flor de sal.</p>

        <p><strong>Passo 2:</strong></p>
        <p>Ponha água a ferver numa frigideira alta. Abra um ovo para dentro de uma taça e coloque-o numa concha de sopa. Introduza-o cuidadosamente na água fervente, mantendo o ovo dentro dela até a clara coagular e o ovo estar escalfado. Reserve-o e repita este processo com os restantes ovos.</p>

        <p><strong>Passo 3:</strong></p>
        <p>Torre ligeiramente as fatias de pão.</p>

        <p><strong>Passo 4:</strong></p>
        <p>Divida os legumes salteados pelas fatias de pão, regue com o restante azeite e tempere com a restante flor de sal e pimenta.</p>

        <p><strong>Passo 5:</strong></p>
        <p>Coloque por cima de cada fatia um ovo escalfado e tempere com pimenta a gosto. <strong><em>Bon appetit!</em></strong></p>
      </div>

    </div>
      <!-- Botões de baixo -->
      <div class="text-center mt-3 mb-5">
        <div class="tooltip-container">
          <button class="btn-print me-2" onclick="window.print()">
            <i class="bi bi-printer"></i>
          </button>
          <span class="tooltip-text">Imprimir receita</span>
        </div>
        <div class="tooltip-container">
          <button class="btn-copy me-2" onclick="copiarLink()">
            <i class="bi bi-link-45deg"></i>
          </button>
          <span class="tooltip-text">Copiar link</span>
        </div>
        <div class="tooltip-container">
          <button class="btn-download" onclick="downloadReceita()">
            <i class="bi bi-download"></i>
          </button>
          <span class="tooltip-text">Download</span>
        </div>      
      </div>

      <?php require ('footer.php') ?>

    <script>
    // Função para copiar o link da página
      function copiarLink() {
        const link = window.location.href;  // Obter link
        navigator.clipboard.writeText(link)  // Copia o link
          .then(() => {
            alert("Link copiado!");  // Alertar o utilizador
          })
          .catch(err => {
            console.error("Erro ao copiar o link: ", err);  // Erro
          });
    }
    </script>

    <script>
    // Função para fazer o download da receita
      function downloadReceita() {
        const recipeText = `
          Ovos Benedict com legumes e pão de cereais

          Ingredientes:
          - 400g de vegetais
          - 4 ovos
          - Pão de trigo e centeio
          - 2 colheres de sopa de azeite
          - Pimenta moída
          - Alho em pó
          - Flor de sal

          Preparação:
          Passo 1: Salteie os legumes numa colher de sopa de azeite e tempere a gosto com pimenta, alho em pó e metade da flor de sal.
          Passo 2: Ponha água a ferver numa frigideira alta. Abra um ovo para dentro de uma taça e coloque-o numa concha de sopa. Introduza-o cuidadosamente na água fervente, mantendo o ovo dentro dela até a clara coagular e o ovo estar escalfado. Reserve-o e repita este processo com os restantes ovos.
          Passo 3: Torre ligeiramente as fatias de pão.
          Passo 4: Divida os legumes salteados pelas fatias de pão, regue com o restante azeite e tempere com a restante flor de sal e pimenta.
          Passo 5: Coloque por cima de cada fatia um ovo escalfado e tempere com pimenta a gosto. Bon appetit!
        `;

        const blob = new Blob([recipeText], { type: 'text/plain' });  // Cria o ficheiro de texto
        const link = document.createElement('a');  // Cria um link de download
        link.href = URL.createObjectURL(blob);
        link.download = 'Ovos_Benedict_Receita.txt';  // Nome do ficheiro para download
        link.click();
      }
      </script>



  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>