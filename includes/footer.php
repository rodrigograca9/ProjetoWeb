<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef à Paisana</title>
    <?php require ('includes/linkscss.php')?>

</head>

<body>

  <style>
    
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
    }

    .footer {
      background-color: #5b3b1e;
      color: #fff;
      padding: 25px 0;
      text-align: center;
      width: 100%;
      margin: 0;
      bottom: 0;
      position: relative;
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

  </style>

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
        <form id="newsletterForm" action="newsletter.php" method="POST" style="display: flex; justify-content: center; margin-top: 10px;">
          <input type="email" name="email" placeholder="O seu email:" required style="padding: 10px; width: 60%; margin-right: 10px; border: 1px solid #ccc; border-radius: 4px;">
          <button type="submit" style="padding: 10px 20px; background-color:rgb(0, 0, 0); color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">Enviar</button>
        </form>
        <div id="notification" style="display:none; position:fixed; bottom:20px; right:20px; background-color:#808080; color:white; padding:15px; border-radius:5px;"></div>
        </div>
    </footer>
    <script>
  document.getElementById('newsletterForm').addEventListener('submit', function(event) {
      event.preventDefault(); 

      const formData = new FormData(this); 

      fetch('newsletter.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.text())
      .then(data => {
          showNotification(data); 
      })
      .catch(error => console.error('Erro:', error)); 
  });

  function showNotification(message) {
      const notification = document.getElementById('notification');
      notification.innerText = message;
      notification.style.display = 'block';
      setTimeout(() => {
          notification.style.display = 'none';
      }, 3000); //3 segundos
  }
  </script>
</body>
</html>
