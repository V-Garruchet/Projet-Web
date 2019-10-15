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
            <h3>Veuillez vous connecter pour continuer</h3>  
        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login">
            <div class="form-group">
                    <label for="identifiant2">Identifiant</label>
                    <input type="id" class="form-control" id="identifiant2" placeholder="Identifiant" required>
            </div>
            <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe" required>
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
            <div class="help-block text-right float-left"><a href="forgotPassword.php">Mot de passe oublié ?</a></div>
            </br
            <div class="help-block text-right float-left"><a href="register.php">Pas encore inscrit ? Inscrivez-vous !</a></div>
        </form>
        </div>
    </body>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/dependencies.php"; ?>




</html>