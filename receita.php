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
        <h1 class="fw-bold"><?php echo $receita['titulo']; ?></h1>
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