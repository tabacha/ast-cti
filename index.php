<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Famile Anders Telefonbuch</title>

    <!-- Bootstrap core CSS -->
          <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<meta name="msapplication-config" content="vendor/twbs/bootstrap/site//docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


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
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Anders-Hamburg</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" tel="202" href="#">Arbeitszimmer</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" tel="201" href="#">Wohnzimmer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" tel="203" href="#">Schlafzimmer</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="starter-template">
    <h1>Telefonbuch Anders-Hamburg</h1>
    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Suche" aria-label="Suche">

    <p class="lead">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Vorname</th>
      <th scope="col">Nachname</th>
      <th scope="col">Organisation</th>
      <th scope="col">Telefonnummer</th>
    </tr>
  </thead>
  <tbody id="telBody" >
  </tbody>
</table>
</p>
  </div>

</main><!-- /.container -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
 <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
 var password="<?php echo $_GET['password']; ?>";
</script>
<script src="index.js"></script>
           </body>

</html>
