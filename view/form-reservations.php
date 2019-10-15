<?php include 'header.php' ?>

<div class="form-group">
    <form method="GET">
        <input type="hidden" name="op" value="reservatie"/>
        <input type="hidden" name="bioscoopId" value="<?php echo $_REQUEST['bioscoopId'] ?>"/>
        <input type="hidden" name="zaalId" value="<?php echo $_REQUEST['zaalId'] ?>"/>
        <input type="hidden" name="prijs" value="<?php echo $_REQUEST['prijs'] ?>"/>
        <input type="hidden" name="create" value="true"/>

        <div class="form-group">
            <label for="fname">Voornaam: </label>
            <input type="text" id="fname" class="form-control" name="firstname" placeholder="uw voornaam" required>
        </div>

        <div class="form-group">
            <label for="lname">Achternaam: </label>
            <input type="text" id="lname" class="form-control" name="lastname" placeholder="uw achternaam" required>
        </div>

        <div class="form-group">
            <label for="geslacht">Geslacht: </label>
            <select id="geslacht" class="form-control" name="geslacht" required>
                <option value="man">Man</option>
                <option value="vrouw">Vrouw</option>
                <option value="helicopter">Helicopter</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nummer">Telefoonnummer: </label>
            <input type="number" id="nummer" class="form-control" name="nummer" placeholder="06-1234567" required>
        </div>

        <div class="form-group">
            <label for="date">Datum: </label>
            <input type="date" id="date" class="form-control" name="date" placeholder="" required>
        </div>

        <div class="form-group">
            <label for="aantal">Aantal personen: </label>
            <input type="number" id="aantal" class="form-control" name="aantal" min="0" placeholder="aantal" required>
        </div>

        <input type="submit" class="btn btn-primary" value="Bestel">
    </form>
</div>


<?php include 'footer.php' ?>;

