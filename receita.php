<?php
$user ='projeto';
$pass = 'web';
$database = 'projetoweb';

try{
  $dbh = new PDO('mysql:host=localhost:3307;charset=utf8;dbname='.$database, $user, $pass);
}catch(PDOException $e){
  echo $e;
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = 'SELECT * FROM receitas WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->execute([':id' => $id]);
$receita = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$receita) {
    echo "Receita não encontrada.";
    exit;
}

$tipoReceitaAtual = $receita['tipo_receita'];

$sqlRelacionadas = 'SELECT * FROM receitas WHERE tipo_receita = :tipo_receita AND id != :id LIMIT 3';
$stmtRelacionadas = $dbh->prepare($sqlRelacionadas);
$stmtRelacionadas->execute([':tipo_receita' => $tipoReceitaAtual, ':id' => $receita['id']]);
$receitasRelacionadas = $stmtRelacionadas->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $receita['titulo']; ?></title>
    <?php require ('includes/linkscss.php') ?>
</head>
<body>

<?php require ('includes/header.php') ?>
<?php require ('includes/connections.php') ?>

<div id="parteImprimir" class="container mt-4 mb-5">
    <div class="text-center">
        <h1 class="fw-bold" style="margin-top: 90px"><?php echo $receita['titulo']; ?></h1>
        <img src="imgs/<?php echo $receita['imagem']; ?>" alt="<?php echo $receita['titulo']; ?>" class="img-fluid my-4">
        
        <h3 style="text-align: left" class="fw-bold mt-5 mb-4">Vais precisar dos seguintes ingredientes:</h3>
        <ul class="list-group ms-4">
            <?php 
            $ingredientes = explode(',', $receita['ingredientes']);
            foreach ($ingredientes as $ingrediente): ?>
                <li style="text-align: left"><?php echo trim($ingrediente); ?></li>
            <?php endforeach; ?>
        </ul>

        <h3 style="text-align: left" class="fw-bold mt-5 mb-4">Preparação:</h3>
        <div>
            <?php 
            $preparacao = explode(';', $receita['preparacao']);
            foreach ($preparacao as $preparacao): 
                preg_match('/(Passo \d+:)(.*)/', $preparacao, $matches);
                ?>
                <p style="text-align: left">
                    <strong><?php echo htmlspecialchars($matches[1]); ?></strong><span style="margin-left: 5px;"></span><?php echo htmlspecialchars(trim($matches[2])); ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</div>

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



        <div class="text-center mt-3 mb-5">
            <button onclick="history.back()" class="btn" style="color: white; background-color: #5b3b1e;">Voltar</button>
            <style>
                .btn:hover {
                    text-decoration: underline;
                }
            </style>
        </div>

        <section class="bg-light py-5">
            <div class="container">
                <h3 class="text-start fw-bold mb-5" style="color: #5b3b1e;">Receitas relacionadas:</h3>
                <div class="row g-4">
                    <?php if (!empty($receitasRelacionadas)): ?>
                    <?php foreach ($receitasRelacionadas as $receitaRelacionada): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="imgs/<?php echo $receitaRelacionada['imagem']; ?>" class="card-img-top" alt="<?php echo $receitaRelacionada['titulo']; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $receitaRelacionada['titulo']; ?></h5>
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <div class="me-5 mb-2"><i class="bi bi-clock"></i> <?php echo $receitaRelacionada['temp_prep']; ?> min</div>
                                    <div class="me-5 mb-2"><i class="bi bi-star"></i> <?php echo $receitaRelacionada['dificuldade']; ?></div>
                                    <div><i class="bi bi-person"></i> <?php echo $receitaRelacionada['n_pessoas']; ?> pessoas</div>
                                </div>
                                <a href="receita.php?id=<?php echo $receitaRelacionada['id']; ?>" class="btn" 
                                    style="border: 1px solid #5b3b1e; color: #5b3b1e; background-color: transparent;"
                                    onmouseover="this.style.backgroundColor='#5b3b1e'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#5b3b1e';">
                                    Ver Receita
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <h4>Nenhuma receita relacionada encontrada.</h4>
                    <?php endif; ?>
                </div>
            </div>
        </section>

<?php require ('includes/footer.php') ?>

<script>
      function copiarLink() {
        const link = window.location.href;
        navigator.clipboard.writeText(link)
          .then(() => {
            alert("Link copiado!"); 
          })
          .catch(err => {
            console.error("Erro ao copiar o link: ", err);
          });
    }
</script>

    <script>
    function downloadReceita() {
        const recipeTitle = <?php echo json_encode($receita['titulo']); ?>;
        const ingredients = <?php echo json_encode($ingredientes); ?>;
        const steps = <?php echo json_encode($preparacao); ?>;

        // Formatar o texto da receita
        let recipeText = `${recipeTitle}\n\nIngredientes:\n`;
        
        ingredients.forEach(ingrediente => {
            recipeText += `${ingrediente}\n`;
        });

        recipeText += `\nPreparação:\n`;
        steps.forEach(preparacao => {
            recipeText += `${preparacao}\n`;
        });

        // Criar o arquivo de texto
        const blob = new Blob([recipeText], { type: 'text/plain' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = `${recipeTitle}.txt`;
        link.click();
      }
    </script>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>