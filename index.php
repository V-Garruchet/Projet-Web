<!DOCTYPE html>

<html>

<head>
  <title>MyForms</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<?php include "includes/header.php"; ?>

<body>

  <div class="container">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 caroussel-img" src="images/form.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousselText">Créez vos campagnes de test</h5>
            <p class="carousselText"> Avec MyForms, vous pouvez créer et partager des campagnes de test facilement</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 caroussel-img" src="images/results.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousselText">Consultez les résultats en temps réel</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 caroussel-img" src="images/multipleForms.png" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousselText2">Plusieurs tests disponibles</h5>
            <p class="carousselText2">SUS, NASA-TLX, et d'autres à venir !</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon carousel-control" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon caroussel-img" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container">

    <p class="description">
      MyForms est un site conçu pour vous faciliter la création, la diffusion et l'analyse de questionnaires génériques, comme
      par exemple le test
      <span data-toggle="tooltip" data-placement="top" title="Questionnaire générique créé 1986 pour répondre à un besoin de mesure rapide 
        d’un système électronique." id="susDescription">SUS</span>
      (System Usability Scale) ou NASA-TLX. Connectez-vous et gérez vos campagnes de test !
    </p>
  </div>
</body>

<?php include "includes/footer.php"; ?>
<?php include "includes/dependencies.php"; ?>




</html>