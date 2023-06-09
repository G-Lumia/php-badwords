<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body class="bg-primary">
     <div class="container text-center bg-light my-5">
          <h1>
               <?php echo "Salve, inserisci un testo ed una parola da censurare";?>
          </h1>
     
          <form class="d-flex flex-column align-items-center gap-3 py-5" action="censura.php" method="POST">
               <label for="text">Testo: </label>
               <textarea class="w-100" rows="8" cols="50" name="text" id="text"></textarea> 
               <label for="censura">Censura: </label>
               <input type="text" name="censura" id="censura">
               <input type="submit" value="invia">
          </form>
     </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>