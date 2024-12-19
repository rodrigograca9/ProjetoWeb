<?php require ('includes/connections.php') ?>
<?php
$query = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT * FROM receitas WHERE titulo LIKE :query OR ingredientes LIKE :query OR tipo_receita LIKE :query";
$stmt = $dbh->prepare($sql);
$stmt->execute([':query' => '%' . $query . '%']);
$receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados da Pesquisa</title>
  <?php require ('includes/linkscss.php'); ?>
</head>
<body>
    <?php require ('includes/header.php'); ?>

    <div class="container mt-4">
  <h3 style="margin-top: 100px">Resultados da pesquisa para "<?php echo htmlspecialchars($query); ?>"</h3>
  <div class="row">
      <?php if (count($receitas) > 0): ?>
          <?php foreach ($receitas as $receita): ?>
            <div class="col-md-4 mt-4 mb-5">
              <div class="card">
                  <img src="imgs/<?php echo $receita['imagem']; ?>" class="card-img-top" alt="<?php echo $receita['titulo']; ?>">
                  <div class="card-body text-center">
                      <h5 class="card-title mb-2"><?php echo $receita['titulo']; ?></h5>
                      <div class="d-flex justify-content-center align-items-center mb-3">
                          <div class="me-5 mb-2">
                              <i class="bi bi-clock"></i> <?php echo $receita['temp_prep']; ?> min
                          </div>
                          <div class="me-5">
                              <i class="bi bi-star"></i> <?php echo $receita['dificuldade']; ?>
                          </div>
                          <div>
                              <i class="bi bi-person"></i> <?php echo $receita['n_pessoas']; ?> pessoas
                          </div>
                      </div>
                        <a href="receita.php?id=<?php echo $receita['id']; ?>" class="btn" 
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
          <p>Nenhuma receita encontrada.</p>
      <?php endif; ?>
    </div>
</div>
    
    <?php require ('includes/footer.php') ?>          
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>