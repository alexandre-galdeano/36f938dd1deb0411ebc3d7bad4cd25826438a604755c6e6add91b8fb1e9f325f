<?php $this->titre = "Motif du recours"; ?>
<?php include_once("Vue/_Commun/header.php"); ?>
<div class="slide_inside col-sm-8 col-md-6 col-lg-4 center-block">
    <h2>Motif du recours</h2>
    <br>

    <form class="form-signin form-horizontal" role="form" action="boncommande/motif" method="post">
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="radio" name="motif_motif" id="optionsRadios1" value="acc" checked>
                    Accroissement temporaire d’activité
                </label>
            </div>
        </div>
        <p>Remplacement d'un salarié</p>

        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="radio" name="motif_motif" id="optionsRadios2" value="CP">
                    Congé payé (CP)
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="radio" name="motif_motif" id="optionsRadios3" value="MAL.">
                    Maladie (MAL.)
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="radio" name="motif_motif" id="optionsRadios4" value="AUTRES">
                    Autres, précisez : <input type="text" name="motif_autres" id="optionsRadios5">
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    Nom du salarié
                    <input type="text" name="motif_nom" id="optionsRadios6">
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    Prénom du salarié
                    <input type="text" name="motif_prenom" id="optionsRadios7">
                </label>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    Définition du poste de travail
                    <textarea class="form-control" rows="2" name="motif_definition" id="options9"></textarea>
                </label>
            </div>
        </div>
        <hr>
        <p>Permis</p>

        <div class="form-group">
            <div class="checkbox col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="checkbox" name="permis_c" value="C">
                    C
                </label>
            </div>
            <div class="checkbox col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="checkbox" name="permis_ec" value="EC">
                    EC
                </label>
            </div>
            <div class="checkbox col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    <input type="checkbox" name="permis_adr" value="ADR">
                    ADR
                </label>
            </div>
            <div class="checkbox col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    Classe
                    <select class="form-control" name="permis_classe">
                        <option>A</option>
                        <option>A1</option>
                        <option>A2</option>
                        <option>AM</option>
                        <option>B</option>
                        <option>B1</option>
                        <option>B96</option>
                        <option>C1</option>
                        <option>D1</option>
                        <option>D</option>
                        <option>BE</option>
                        <option>C1E</option>
                        <option>D1E</option>
                        <option>DE</option>
                    </select>
                </label>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="radio col-sm-6 col-sm-offset-2 col-md-8">
                <label>
                    Horaires :
                    <input type="text" name="motif_hor">
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-6">
                <button type="submit" class="btn btn-default btn-primary"><span
                        class="glyphicon glyphicon-log-in"></span> Connexion
                </button>
            </div>
        </div>
    </form>
</div>
<?php include_once("Vue/_Commun/footer.php"); ?>
