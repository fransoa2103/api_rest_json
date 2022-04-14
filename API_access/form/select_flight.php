<?php
// $flightList = json_decode(file_get_contents("https://fcb-test-api.herokuapp.com/?arrival=", true));

ob_start(); ?>

<form action="API_access\controller\flightList.php" method="GET" class="form-group fs-3">
    
    <div class="input-group mb-3">
        <label class="input-group-text me-1" for="depart">Depart</label>
        <select class="custom-select" id="depart" name="depart">
                <option selected value="all">All</option>
                <option value="paris">Paris</option>
                <option value="lyon">Lyon</option>
                <option value="lille">Lille</option>
                <option value="brussel">Brussel</option>
                <option value="perpignan">Perpignan</option>
        </select>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text me-1" for="arrival">Arrival</label>
            <select class="custom-select" id="arrival" name="arrival">
                <option selected value="all">All</option>
                <option value="paris">Paris</option>
                <option value="lyon">Lyon</option>
                <option value="lille">Lille</option>
                <option value="brussel">Brussel</option>
                <option value="perpignan">Perpignan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean();