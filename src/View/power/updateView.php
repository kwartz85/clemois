<section class="container-fluid">
    <form action="<?=   PATH ."/index.php/power/update/".$power->getId(); ?>" method="POST" class="form-horizontal">
        <fieldset>
            <legend> 'Modification d'un super pouvoir'</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="powerName">Nom du pouvoir</label>
                <div class="col-sm-10">
                    <input type="text"
                           name="powerName"
                           value="<?=  $power->getPowerName(); ?>"
                           id="powerName"
                           class="form-control"
                           placeholder="saissez le nom d'un pouvoir">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="powerDesc">Description</label>
                <div class="col-sm-10">
                    <input type="text"
                           name="powerDesc"
                           value="<?= $power->getPowerDesc(); ?>"
                           id="powerDesc"
                           class="form-control"
                           placeholder="Décrivez le pouvoir">
                </div>
            </div>
            <div class="col-sm-offset-10 col-sm-2">
                <input type="submit" class="form-control" value="Valider">
            </div>
        </fieldset>
    </form>
</section>
