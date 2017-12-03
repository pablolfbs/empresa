<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>Site</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
  crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
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
              <a class="nav-link" href="index.php">home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="empresa.php">empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produtos.php">produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscrevase.php">inscreva-se</a>
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
                    <br />
                    <br />
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

  <figure id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/empresa1.jpg" alt="First slide" max-width="100%" height="400px">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h3>Empresas parceiras</h3>
        <p>Diversas empresas com parceria e novas a caminho</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/empresa2.jpg" alt="Third slide" width="100%" height="400px">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h3>Realização de metas</h3>
        <p>Todos rumo a vitória</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/empresa3.jpg" alt="Second slide" width="100%" height="400px">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h3>Trabalho em equipe</h3>
        <p>Nossa filosofia é em prol da união</p>
      </div>
    </div>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </figure>

  <section class="texto">
    <div class="container">
      <h1>EMPRESA</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce arcu ante, tempus in ligulavel, vestibulum semper libero. Donec nec consectetur libero. Nulla lectus ante, aliquet vel odio vestibulum, fringilla suscipit sapien. Mauris rutrum commodo urna, a ornare tellus malesuada a. Praesent vitae erat convallis, auctor urna vitae, mattis felis. Mauris ut felis id arcu ornare varius. Integer eu tristique felis, sit amet aliquam ex. In volutpat magna varius dui scelerisque, at tempus augue scelerisque. Duis erat est, blandit suscipit consequat at, laoreet vel purus. Sed molestie aliquet finibus. Maecenas sit amet massa a enim sollicitudin accumsan et vel risus. Aenean ac tortor ex. Praesent massa lorem, molestie id mollis at, ullamcorper et ipsum. Maecenas gravida nulla eu euismod porta.</p>

      <p>eleifend lorem ac ante volutpat ullamcorper. Etiam vestibulum quis nulla sit amet imperdiet. Sed nec augue non augue luctus interdum aliquet pharetra ante. Aenean sed risus sed neque semper gravida. Phasellus ac posuere diam, sed pharetra turpis. Curabitur lobortis augue risus, viverra bibendum nibh interdum id. Nulla consequat tempor massa, vitae tempus turpis sagittis at. Nulla viverra enim sed ante sollicitudin dictum. Duis ac euismod felis, tempor placerat augue. Aenean maximus lectus eros, at feugiat elit cursus et.</p>

      <p>Nulla semper mattis urna, sit amet tristique lectus congue auctor. Aliquam finibus varius felis at sollicitudin. Quisque in elit odio. Aliquam a sodales urna. Quisque vel est ut urna imperdiet sagittis. Sed venenatis ipsum justo, ut tempor massa eleifend sit amet. Nam fringilla blandit condimentum. Etiam et ante nisi.</p>

      <p>Proin a felis sollicitudin, suscipit lectus et, condimentum nisi. Nulla facilisi. Aliquam efficitur, enim mattis mattis semper, metus odio lacinia ligula, id viverra neque mauris eget eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras maximus sagittis tortor et lobortis. Morbi et ligula efficitur, hendrerit enim nec, tincidunt nunc. Aenean efficitur felis eu est tristique, nec sodales sem finibus. Maecenas imperdiet condimentum sem vel ullamcorper. Curabitur urna libero, aliquam eget nisi non, viverra euismod est. Duis imperdiet posuere tellus. Morbi vulputate felis pharetra ante condimentum, non pulvinar ante mollis. Morbi ut molestie nibh, id egestas est. Donec lacus magna, efficitur quis ante vitae, feugiat egestas mi. Sed luctus vitae felis nec pharetra. Nam ante tortor, fermentum nec viverra in, ultricies eu odio.</p>

      <p>Duis pretium, sapien sodales eleifend tristique, ex odio viverra magna, a mattis nibh lectus sed mi. Integer viverra metus ac odio molestie sollicitudin. Pellentesque finibus sapien in turpis condimentum varius. Integer pharetra nunc non enim mattis, quis condimentum dolor dignissim. Integer lacinia felis sapien, a ullamcorper est gravida eget. Morbi pharetra urna vitae convallis euismod. Nam quam ante, vestibulum luctus maximus suscipit, pulvinar sit amet nulla. Ut in purus lectus. Morbi non ante lorem. Nunc sed tellus a nisi accumsan eleifend. Maecenas sollicitudin, risus eu congue sodales, nulla odio pulvinar nisi, vitae accumsan erat augue non eros. Suspendisse potenti. Mauris iaculis est sit amet ligula ornare, sit amet molestie nulla finibus. Nam hendrerit est at lorem varius, a euismod elit varius. Mauris varius enim vel facilisis pellentesque. Etiam malesuada augue tempus velit fringilla pharetra.</p>  
    </div>
  </section>

  <figure class="parallax">
    <figcaption class="figure-caption text-right text-dark">
      <h4>Busque sua oportunidade para vencer.</h4>
    </figcaption>
    <figcaption class="figure-caption text-right text-dark">
      <p>Empresa de desenvolvimento para novos talentos.</p>
    </figcaption>
  </figure>

  <footer class="footer-distributed">
    <article class="footer-left">
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
    </article>
    <article class="footer-center">
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
        <p><a href="mailto:suporte@empresa.com">suporte@empresa.com</a></p>
      </div>
    </article>
    <article class="footer-right">
      <p class="footer-company-about">
        <span>Sobre a Empresa</span>
        Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
      </p>
      <div class="footer-icons">
        <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="http://www.github.com" target="_blank"><i class="fa fa-github"></i></a>
      </div>
    </article>
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

  <script>
    $(document).ready(function() {
      $('#btn_login').click(function() {
        var campo_vazio = false;

        if ($('#campo_usuario').val() == '') {
          $('#campo_usuario').css({'border-color': '#a94442'});
          campo_vazio = true;
        } else {
          $('#campo_usuario').css({'border-color': '#ccc'});
        }
        if ($('#campo_senha').val() == '') {
          $('#campo_senha').css({'border-color': '#a94442'});
          campo_vazio = true;
        } else {
          $('#campo_senha').css({'border-color': '#ccc'});
        }
        if (campo_vazio) return false;
      });
    });
  </script>
</body>

</html>