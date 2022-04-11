<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- GET BOOTSTRAP V5.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <title>FLIGHTS-API-REST-JSON</title>
    </head>
    
    <!-- BODY -->
    <body class="container bg-dark text-light w-50 border mt-3 p-1">
        <form action="flightList.php" method="GET">
            <div class="mb-3">
                <label for="flightArrival" class="form-label">Arrival ?</label>
                <input type="text" class="form-control" id="flightArrival" name="arrival" aria-describedby="flightArrival">
                <div id="flightArrival" class="form-text">Select your destination</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    <!-- JAVA SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- END JS -->
    </body>
</html>