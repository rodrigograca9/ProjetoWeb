<!DOCTYPE html>
  <html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef à Paisana</title>
    <?php require ('includes/linkscss.php'); ?>
  </head>
  <body>
  <?php require ('includes/header.php'); ?>

     <!--CAROUSEL  DE SUGESTÕES-->
    <div class="container-fluid" style="margin-top: 100px">
      <div class="row mb-5 mt-5">
        <div class="col-12 col-md-10 col-lg-6 offset-md-1 offset-md-3">
          <div class="carousel slide" id="galeria-principal" data-bs-ride="carousel">
            <button class="carousel-control-prev" type="button" data-bs-target="#galeria-principal" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeria-principal" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
              <button type="button" data-bs-slide-to="0" data-bs-target="#galeria-principal" class="active"></button>
              <button type="button" data-bs-slide-to="1" data-bs-target="#galeria-principal"></button>
              <button type="button" data-bs-slide-to="2" data-bs-target="#galeria-principal"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
            <a href="receita.php?id=13"><img src="imgs/ovos-benedict-legumes-pao-cereais.jpeg" alt="Imagem do carousel" class="d-block w-100"></a>
              <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Transforme o Brunch em Arte!</h2>
                <h5>Ovos Benedict com legumes e pão de cereais</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <a href="receita.php?id=4"><img src="imgs/batatas-recheadas-com-carne.jpeg" alt="Imagem do carousel" class="d-block w-100"></a>
              <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Receitas que aquecem a alma!</h2>
                <h5>Batatas recheadas com carne</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <a href="receita.php?id=7"><img src="imgs/lasagna-de-sardinha-e-curgete.jpg" alt="Imagem do carousel" class="d-block w-100"></a>
              <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Inove com sabores tradicionais!</h2>
                <h5>Lasanha de sardinha e curgete</h5>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- SUGESTÕES DE RECEITAS-->
    <section class="inicio mb-3">
      <div class="inicio-content">
        <h3 class="fw-bold mb-5 ms-5">Sugestões de Receitas:</h3>
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold">Ovos Benedict com legumes no pão</h5>
              <p class="text-start">Esta versão mais portuguesa de ovos Benedict, com azeite, legumes frescos e pão de cereais, vai transformar os seus pequenos-almoços de fim de semana numa verdadeira experiência gastronómica. O sabor suave dos ovos escalfados combinado com a crocância do pão de cereais e a frescura dos legumes salteados cria um prato equilibrado e delicioso. Ideal para quem procura uma refeição nutritiva e cheia de sabor.
                Uma receita rápida e fácil, que se faz em menos de 30 minutos, perfeita para reunir a família à mesa.</p>
                <a href="receita.php?id=13" class="btn mt-3" style="background-color:#5b3b1e; color:white;">Ver Mais</a>
            </div>
            <div class="col-md-6 mb-4">
              <div class="imagemReceita"><img class="img-fluid" src="imgs/ovos-benedict-legumes-pao-cereais.jpeg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inicio mt-5 mb-3" id="inicio">
      <div class="inicio-content">
        <div class="container text-center">
          <div class="row align.items-center">
            <div class="col-md-6 mb-4">
              <div class="imagemReceita"><img class="img-fluid" src="imgs/batatas-recheadas-com-carne.jpeg" alt=""></div>
            </div>
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold">Batatas recheadas com carne</h5>
              <p class="text-start">Bem tostadas no forno, estas batatinhas recheadas com carne, espinafres frescos e queijo são um verdadeiro petisco equilibrado e delicioso. O sabor robusto da carne combina perfeitamente com a suavidade dos espinafres e a cremosidade do queijo, criando uma explosão de sabores em cada mordida.
                Além de deliciosas, são fáceis de preparar, tornando-se a escolha perfeita para uma refeição prática e saborosa, sem perder a qualidade. Ideal para servir como aperitivo em festas, ou para um jantar descontraído em família.</p>
                <a href="receita.php?id=4" class="btn mt-3" style="background-color:#5b3b1e; color:white;">Ver Mais</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="inicio mt-5 mb-5" id="inicio">
      <div class="inicio-content">
        <div class="container text-center">
          <div class="row align.items-center">
            <div class="col-md-6 mb-4">
              <h5 class="fw-bold">Lasanha de sardinhas e curgete</h5>
              <p class="text-start">Descubra a fusão perfeita entre a clássica lasanha italiana e o sabor autêntico da sardinha portuguesa nesta deliciosa lasanha de sardinha e curgete. A combinação da sardinha, rica em sabor e benefícios para a saúde, com a leveza da curgete e a suavidade do queijo derretido, cria uma experiência gastronómica única.
                Esta receita inovadora mantém o conforto e a tradição da lasanha, com um toque fresco e contemporâneo, ideal para quem procura novos sabores sem abrir mão da simplicidade e do prazer de uma boa refeição.</p>
                <a href="receita.php?id=7" class="btn mt-3" style="background-color:#5b3b1e; color:white;">Ver Mais</a>
            </div>
            <div class="col-md-6 col-sm-12 mb-4">
              <div class="imagemReceita"><img class="img-fluid" src="imgs/lasagna-de-sardinha-e-curgete.jpg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- MAIS SUGESTÕES -->
    <section class="maisSugestoes bg-light py-5">
      <div class="container">
        <h3 class="text-center fw-bold mb-5" style="color: #5b3b1e;">Outras receitas que poderás gostar</h3>
        <div class="row g-4">
          <!-- Receita 1 -->
          <div class="col-md-4">
            <div class="card border-0 shadow h-100">
              <img src="imgs/salada-de-bagos-com-camarao.jpg" class="card-img-top rounded" alt="">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Salada de bagos com camarão</h5>
                <p class="card-text">Mantenha a forma e sacie a sua fome com esta salada de bagos com camarão, rica em proteínas e repleta de sabores frescos. Uma opção deliciosa e nutritiva para quem busca uma alimentação equilibrada.</p>
                <a href="receita.php?id=11" class="btn btn-sm btn-outline-dark btn-ver-mais" style="border: 1px solid #5b3b1e; color: #5b3b1e; background-color: transparent;"
                                    onmouseover="this.style.backgroundColor='#5b3b1e'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#5b3b1e';">Ver Mais</a>
              </div>
            </div>
          </div>
    
          <!-- Receita 2 -->
          <div class="col-md-4">
            <div class="card border-0 shadow h-100">
              <img src="imgs/pesto-de-iogurte-hortela-e-manjericao-617.jpg" class="card-img-top rounded" alt="Batatas Recheadas">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Massa com pesto de iogurte</h5>
                <p class="card-text">Prepare um refeição de massa integral em apenas 30 minutos, envolvida num pesto de iogurte, com o sabor fresco da hortelã e do manjericão. Simples e muito saboroso!</p>
                <a href="receita.php?id=10" class="btn btn-sm btn-outline-dark btn-ver-mais" style="border: 1px solid #5b3b1e; color: #5b3b1e; background-color: transparent;"
                                    onmouseover="this.style.backgroundColor='#5b3b1e'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#5b3b1e';">Ver Mais</a>
              </div>
            </div>
          </div>
    
          <!-- Receita 3 -->
          <div class="col-md-4">
            <div class="card border-0 shadow h-100">
              <img src="imgs/pasta-de-beterraba.jpg" class="card-img-top rounded" alt="">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">Pasta de beterraba</h5>
                <p class="card-text">O sabor extremamente forte da beterraba não agrada a todos, mas esta receita de pasta de beterraba é capaz de mudar opiniões. Experimente e comprove por si prórpio.</p>
                <a href="receita.php?id=12" class="btn btn-sm btn-outline-dark btn-ver-mais" style="border: 1px solid #5b3b1e; color: #5b3b1e; background-color: transparent;"
                                    onmouseover="this.style.backgroundColor='#5b3b1e'; this.style.color='white';" 
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#5b3b1e';">Ver Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require ('includes/footer.php') ?>

  <script src="js/bootstrap.bundle.min.js"></script>  

</body>

</html>