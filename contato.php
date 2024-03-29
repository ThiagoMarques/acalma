<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Conheça o aplicativo Acalma">
  <meta name="author" content="Thiago Santana Marques">
  <meta name="generator" content="Jekyll v3.8.5">
  <link rel="icon" href="assets/imgs/logo.png">
  <title>Aplicativo Acalma</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="acalma.css" rel="stylesheet">
</head>

<body class="background-acalma">
  <nav class="site-header sticky-top py-1">
    <div class="container nav-bar d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2 d-none nav-acalma d-md-inline-block" href="index.php">Home</a>
      <a class="py-2 d-none nav-acalma d-md-inline-block" href="#">Sobre nós</a>
      <a class="py-2 d-none nav-acalma d-md-inline-block" href="contato.php">Contato</a>
    </div>
  </nav>

  <div class="position-relative overflow-hidden p-5 p-md-5 m-md-5 text-center background-acalma">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h3 class="display-4 font-weight-bold" style="margin:20px; color: rgba(0,44,74);">Fale Conosco</h3>
      <form action="mail/contatoemail.php" method="post">
        <div class="form-group">
          <div class="form-group">
            <!-- <label for="txtnome">Nome</label> -->
            <input type="input" name="txtNome" class="form-control box-contato" id="txtNome" placeholder="Digite seu nome">
          </div>

          <!-- <label for="exampleInputEmail1">Endereço de email</label> -->
          <input type="email" name="txtEmail" class="form-control box-contato" id="txtEmail" aria-describedby="Email"
            placeholder="Digite seu e-mail"><br>
          <!-- <label for="txtMensagem">Mensagem</label><br> -->
          <textarea class="form-control box-contato" placeholder="Deixe sua mensagem" name="txtMensagem" id="txtMensagem" rows="8" cols="40"></textarea>
        </div>
        <button type="submit" name="Enviar" class="btn btn-acalma btn-primary">Enviar e-mail</button>
      </form>
    </div>


    <footer class="container py-5">
      <div class="row">
        <div class="col-6 col-md">
          <h5>Sobre Nós</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Conheça nossa história</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Contato</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="contato.php">Fale conosco</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
      crossorigin="anonymous"></script>
    <script>
      $(function () {
        var nua = navigator.userAgent
        var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
        if (isAndroid) {
          $('select.form-control').removeClass('form-control').css('width', '100%')
        }
      })
    </script>
</body>

</html>