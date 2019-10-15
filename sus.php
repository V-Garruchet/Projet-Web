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
        <h3 class="text-center">SUS (System Usability Scale) Test</h3>
        <br>
        <br>

        <form class="form col" role="form" method="post" action="submit" accept-charset="UTF-8" id="sus">
            <div class="form-group" id="sus1">
                <div class="row agreeDisagree">
                    <div class="col-3"></div>
                    <div class="col-5 text-left">Pas du tout d'accord</div>
                    <div class="col-2">D'accord</div>
                </div>
                <br>


                <div class="custom-radios row">
                    <h6 class="col-4">1. Je pense que je vais utiliser ce service fréquemment.</h6>
                    <div class="col-1">
                        <input type="radio" id="color-1" name="color" value="1">
                        <label for="color-1">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                        </label>
                        <span class="col-1 susValue">1</span>
                    </div>

                    <div class="col-1">
                        <input type="radio" id="color-2" name="color" value="2">
                        <label for="color-2">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                        </label>
                        <span class="col-1 susValue">2</span>
                    </div>

                    <div class="col-1">
                        
                        <input type="radio" id="color-3" name="color" value="3">
                        <label for="color-3">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                        </label>
                        <span class="col-1 susValue">3</span>
                    </div>

                    <div class="col-1">
                        <input type="radio" id="color-4" name="color" value="4">
                        <label for="color-4">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                        </label>
                        <span class="col-1 susValue">4</span>
                    </div>

                    <div class="col-1">
                        <input type="radio" id="color-5" name="color" value="5">
                        <label for="color-5">
                            <span>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                            </span>
                            
                        </label>
                        <span class="col-1 susValue text-center">5</span>
                    </div>
                </div>

            </div>


        </form>
    </div>
    </br>
</body>

<?php include "includes/footer.php"; 
    include "includes/dependencies.php"; ?>


</html>