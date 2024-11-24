<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef à Paisana</title>
    <?php require ('linkscss.php')?>
    <style>
      .footer {
        background-color: #5b3b1e;
        color: #fff;
        padding: 20px;
        text-align: center;
      }

      .footer-content {
        max-width: 800px;
        margin: 0 auto;
      }

      .footer .social-icons a {
        color: #fff;
        margin: 0 10px;
        font-size: 24px;
        text-decoration: none;
      }

      .footer .newsletter-form {
        margin-top: 10px;
      }

      .footer .newsletter-form input[type="email"] {
        padding: 10px;
        width: 60%;
        margin-right: 5px;
        border: none;
        border-radius: 4px;
      }

      .footer .newsletter-form button {
        padding: 10px 20px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      html, body {
        height: 100%; /* Garante que a página use 100% da altura da janela */
        margin: 0; /* Remove margens padrão */
        display: flex;
        flex-direction: column; /* Coloca o conteúdo em coluna */
      }

      body {
        flex: 1; /* Permite que o conteúdo principal ocupe a altura restante */
      }

      footer {
        background-color: #5b3b1e;
        padding: 20px;
        text-align: center;
        margin-top: auto; /* Empurra o rodapé para o fim da página */
      }
    </style>
</head>
<footer class="footer mt-3">
    <div class="footer-content">
      <p>Acompanha nas redes sociais que preferires!</p>
      <div class="social-icons">
        <a href="#"><i class="bi bi-youtube"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-tiktok"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></i></a>
      </div>
      <p>Subscreva a newsletter para não perder nenhuma receita</p>
      <form class="newsletter-form">
        <input type="email" placeholder="O seu email:" required>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </footer>
</body>
</html>
