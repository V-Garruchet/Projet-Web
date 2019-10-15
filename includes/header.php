<header class="header">
    <link href="css/styles.css" rel="stylesheet">


    <?php
        $connected = false;
        $id = "Michel";
        $links = ["login.php","login.php","login.php"];
        if ($connected)
            $links=["campaign.php", "newCampaign.php", "tests.php"];
    ?>

        <nav class="navbar navbar-toggleable-md background-faded navbar-dark bg-dark justify-content inverse sticky-top">

            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> MyForms </a>

            <a class="nav-link" href=<?php echo $links[0];?>>Mes campagnes</a>
            <!-- <a class="nav-link" href=<?php echo $links[1];?>>Créer une campagne</a> -->
            <a class="nav-link" href=<?php echo $links[2];?>>Tests effectués</a>

            <?php
        if($connected == false){ ?>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                        <i class="fa fa-user nav-icon">
                            <span class="connect"> Se connecter </span>
                        </i>
                    </a>
                    <div id="login-dp" class="row dropdown-menu">
                        <div class="col-md-12">
                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">

                                <div class="input-group">
                                    <span id="fa-user-form" class="input-group-addon">
                                        <i class="fa fa-user login-icon"></i>
                                    </span>
                                    <label class="sr-only" for="id">Identifiant</label>
                                    <input type="id" class="form-control" id="id" placeholder="Identifiant" required>
                                </div>

                                        <div class="input-group">
                                            <span id="fa-user-form" class="input-group-addon">
                                                <i class="fa fa-lock login-icon"></i>
                                            </span>
                                            <label class="sr-only" for="password">Mot de passe</label>
                                            <input type="password" class="form-control" id="password2" placeholder="Mot de passe" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                                        </div>
                                        <div class="help-block text-right float-left">
                                            <a href="forgotPassword.php">Mot de passe oublié ?</a>
                                        </div>
                                        <div class="help-block text-right float-left">
                                            <a href="register.php">S'inscrire</a>
                                        </div>
                            </form>
                            </div>
                            </div>
                            <?php }
        else{ ?>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">
                                    <i class="fa fa-user nav-icon">
                                        <span class="connect">
                                            <?php echo $id ?> </span>
                                    </i>
                                </a>
                                <div id="login-dp" class="row dropdown-menu">
                                    <div class="">
                                        <a class="nav-link" href="">
                                            <i class="fa fa-cog">
                                                <span class="userMenuText"> Paramètres </span>
                                            </i>
                                        </a>
                                        <a class="nav-link" href="">
                                            <i class="fa fa-sign-out">
                                                <span class="userMenuText"> Se déconnecter </span>
                                            </i>
                                        </a>
                                    </div>
                                </div>


                                <?php } ?>





        </nav>





</header>