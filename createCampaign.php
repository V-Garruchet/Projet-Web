<br>
<form>

    <h5>Informations</h5>
    <br>
    <div class="form-group row">
        <label for="campaignName" class=" col-sm-2">Nom de la campagne: </label>
        <input type="text" class="form-control col-sm-10" id="campaignName" placeholder="Entrez le nom de votre campagne">
    </div>

    <div class="form-group row">
        <label for="campaignDesc" class=" col-sm-2">Description :</label>
        <textarea class="form-control col-sm-8" id="campaignDesc" placeholder="Description de votre campagne" rows="3"></textarea>
    </div>

    <div class="form-group row">
        <label for="campaignAdmins" class="col-sm-2">Expérimentateurs : </label>
        <input type="text" class="form-control col-sm-8" id="campaignAdmins" placeholder="Entrez le nom d'un autre administrateur (laissez vide si vous souhaitez être seul)">
        <span class="col-sm-1"></span>
        <button type="button" class="btn btn-secondary col-sm-1">Ajouter</button>
    </div>

    <h5>Expériences</h5>
    <br>
    <button type="button" class="btn btn-secondary col-sm-1">Ajouter</button>
    <div class="form-group row">
        <label for="expName" class=" col-sm-2">Nom de l'expérience : </label>
        <input type="text" class="form-control col-sm-10" id="campaignName" placeholder="Entrez le nom de votre expérience">
    </div>
    <div class="form-group row">
        <label for="expName" class=" col-sm-2">Type de test : </label>
        <input type="text" class="form-control col-sm-10" id="campaignName" placeholder="Entrez le nom de votre expérience">
    </div>
    <div class="form-group row">
        <label for="expName" class="col-sm-2">Type de questionnaire : </label>
        <select class="custom-select custom-select col-sm-8">
            
            <option selected>Choisissez le type de questionnaire ...</option>
            <option value="sus">SUS</option>
            <option value="nasa">NASA-TLX</option>
        </select>
    </div>



</form>


