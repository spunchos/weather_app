<?php

$weather = '';

  if(isset($_GET['city'])){
    $pogoda = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=771eb3ad976b6d9672bca4c8194f006b');

    $gavno = json_decode($pogoda, true);

    $weather = $gavno['main']['temp'];
 
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/styles.css">


    <title>pogoda</title>
  </head>
  <body>
    <div class="container" id="main">
      <h1>gorod tvoy pishi</h1>
      <form>
        <div class="align-items-center">
        <div class="col-auto">
          <label for="city" class="col-form-label">city</label>
        </div>
        <div class="col-auto">
          <input placeholder="gorod pishi" type="text" id="city" name="city" class="form-control" aria-describedby="city">
        </div>
        <div class="col-auto"></div>
        <button type="submit" class="btn btn-primary">Показать</button>
        </div>
      </form>
        <div id="asd">
        <?php

        if ($weather) {
          echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
        }
        

        ?>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>