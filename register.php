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
        <h3>Inscription</h3>
        <form class="form col" role="form" method="post" action="login" accept-charset="UTF-8" id="register">
            <div class="form-group row-md-3">
                <label for="identifiant">Identifiant</label>
                <input type="id" class="form-control" id="identifiant" placeholder="Identifiant" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <span class="float-right" id="passwordHelp"></span>
                <input type="password" class="form-control" id="createdPassword" placeholder="Mot de passe" required>
                <input type="password" class="form-control" id="createdPassword2" placeholder="Veuillez retaper votre mot de passe" required>
                <i title="" id="passwordIcon"></i>

            </div>
            <div class="form-group">
                <label for="mail">Adresse mail</label>
                <input type="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Adresse mail" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
            </div>
        </form>
    </div>
    </br>
</body>



<?php include "includes/footer.php"; 
    include "includes/dependencies.php"; ?>
<script src="includes/register.js"></script>





</html>