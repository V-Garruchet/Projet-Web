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
        <h3>Mot de passe oublié ?</h3>  
        <p> Votre mot de passe vous sera envoyé par mail </p>
        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="forgotPassword">
            <div class="form-group">
                    <label for="mail2">Adresse mail</label>
                    <input type="mail" class="form-control" id="mail2" placeholder="Adresse mail (utilisée lors de l'inscription)" required>
            </div>
            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </div>
        </form>
        </div>
    </body>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/dependencies.php"; ?>




</html>