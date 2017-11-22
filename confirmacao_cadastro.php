<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!doctype html>
<html lang="pt-br">

<head>
	<title>Confirmação</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
	crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body style="background: url(img/fogos.jpg) no-repeat">
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" width="40" height="40" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav float-left">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">voltar para home<span class="sr-only">(current)</span></a>
            </li>
            <li class="<?= $erro ==1 ? 'nav-item dropdown show' : 'nav-item dropdown' ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">entrar</a>
              <ul class="<?= $erro ==1 ? 'dropdown-menu show' : 'dropdown-menu' ?>" aria-labelledby="entrar">
                <div class="col-md-12">
                  <p>Você possui uma conta?</p>
                  <form method="post" action="validar_acesso.php" id="formLogin">
                    <div class="form-group">
                      <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                    </div>
                    <button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
                    <br><br>
                  </form>
                  <?php
                  if ($erro == 1) echo '<font color="#ff0000">Usuário e/ou senha inválido(s)!</font>';
                  ?>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="container">
    <br><br><br><br><br><br><br><br><br><br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h2 class="text-center">Usuário cadastrado com sucesso!!</h2>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>

  <footer class="footer-distributed">
  
    <div class="footer-left">
  
      <h3>Empresa<span>logo</span></h3>
  
      <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">Pricing</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">Faq</a>
        ·
        <a href="#">Contact</a>
      </p>
  
      <p class="footer-company-name">Empresa &copy; 2017</p>
    </div>
  
    <div class="footer-center">
  
      <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Rua Santa Luzia, 735</span> Rio de Janeiro, Brasil</p>
      </div>
  
      <div>
        <i class="fa fa-phone"></i>
        <p>+1 555 123456</p>
      </div>
  
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:suporte@company.com">suporte@empresa.com</a></p>
      </div>
  
    </div>
  
    <div class="footer-right">
  
      <p class="footer-company-about">
        <span>Sobre a Empresa</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
      </p>
  
      <div class="footer-icons">
    
        <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
        <a href="http://www.github.com"><i class="fa fa-github"></i></a>
    
      </div>
  
    </div>
  
  </footer>

  <script src="https://use.fontawesome.com/8da311f277.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
  crossorigin="anonymous"></script>
</body>

</html>
