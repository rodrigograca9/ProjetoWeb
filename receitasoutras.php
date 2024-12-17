<!DOCTYPE html>
  <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outras receitas</title>
    <?php require ('includes/linkscss.php') ?>
  </head>
  <body>
  <?php require ('includes/header.php') ?>
  <?php require ('includes/connections.php') ?>
  <?php $sql = 'SELECT * FROM receitas WHERE tipo_receita = :tipo_receita';
    $stmt = $dbh->prepare($sql);
    $stmt->execute([':tipo_receita' => 'outras']);
    $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

<section class="receitas-carne mb-5" id="receitas-carne">
    <div class="container text-center">
        <h3 class="fw-bold">Outras receitas</h3>
        <p>Explore outras receitas para impressionar a sua família e amigos.</p>
        <div class="row">
            <?php foreach ($receitas as $receita): ?>
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="imgs/<?php echo $receita['imagem']; ?>" class="card-img-top" alt="<?php echo $receita['titulo']; ?>">
                        <div class="card-body">
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
                            <a href="receita.php?id=<?php echo $receita['id']; ?>" class="btn" style="color: white; background-color: #5b3b1e;">Ver Receita</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

  <?php require ('includes/footer.php') ?>

  <script src="js/bootstrap.bundle.min.js"></script>  

</body>

</html>