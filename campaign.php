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
            <h3 class="text-center">Mes campagnes</h3>  
        </div>
        <br>

        <nav>
            <div class="nav nav-tabs campaign-tabs nav-justified" id="nav-tab" role="tablist">
                <a class="nav-item nav-campaign nav-link active" id="nav-campaign-actual-tab" data-toggle="tab" href="#nav-campaign-actual" role="tab" aria-controls="nav-campaign-actual" aria-selected="true">Campagnes en cours</a>
                <a class="nav-item nav-campaign nav-link show " id="nav-campaign-ended-tab" data-toggle="tab" href="#nav-campaign-ended" role="tab" aria-controls="nav-campaign-ended" aria-selected="false">Campagnes terminées</a>
                <a class="nav-item nav-campaign nav-link " id="nav-campaign-create-tab" data-toggle="tab" href="#nav-campaign-create" role="tab" aria-controls="nav-campaign-create" aria-selected="false">Nouvelle campagne</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-campaign-actual" role="tabpanel" aria-labelledby="nav-campaign-actual-tab"><?php include "actualCampaigns.php"?></div>
        <div class="tab-pane" id="nav-campaign-ended" role="tabpanel" aria-labelledby="nav-campaign-ended-tab"><?php include "endedCampaigns.php"?></div>
        <div class="tab-pane" id="nav-campaign-create" role="tabpanel" aria-labelledby="nav-campaign-create-tab"><?php include "createCampaign.php"?></div>
        </div>
        <nav>



        
        
    </body>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/dependencies.php"; ?>




</html>