<?php
require('includes/connections.php');

if (isset($_GET['tipo'])) {
    $tipoReceita = htmlspecialchars($_GET['tipo']);
    
    $sql = 'SELECT * FROM receitas WHERE tipo_receita = :tipo_receita';
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':tipo_receita' => $tipoReceita]);
    $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <?php require('includes/linkscss.php'); ?>
</head>
<body>
    <?php require('includes/header.php'); ?>

    <div class="container text-center">
      <?php if (!empty($receitas)): ?>
          <h3 class="fw-bold">Receitas de <?php echo ucfirst($tipoReceita); ?></h3>
          <p>Explore e aprenda as melhores receitas de <?php echo $tipoReceita; ?> para impressionar a sua família e amigos.</p>
          <div class="row">
              <?php foreach ($receitas as $receita): ?>
                  <div class="col-md-4 mt-4 mb-5">
                      <div class="card">
                          <img src="imgs/<?php echo $receita['imagem']; ?>" class="card-img-top" alt="<?php echo $receita['titulo']; ?>">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $receita['titulo']; ?></h5>
                              <div class="d-flex justify-content-center align-items-center mb-3">
                                  <div class="me-5 mb-2"><i class="bi bi-clock"></i> <?php echo $receita['temp_prep']; ?> min</div>
                                  <div class="me-5 mb-2"><i class="bi bi-star"></i> <?php echo $receita['dificuldade']; ?></div>
                                  <div><i class="bi bi-person"></i> <?php echo $receita['n_pessoas']; ?> pessoas</div>
                              </div>
                              <a href="receita.php?id=<?php echo $receita['id']; ?>" class="btn btn-outline-dark">Ver Receita</a>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      <?php else: ?>
          <h4>Nenhuma receita encontrada para esta categoria.</h4>
          <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
      <?php endif; ?>
    </div>

    <?php require('includes/footer.php'); ?>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>