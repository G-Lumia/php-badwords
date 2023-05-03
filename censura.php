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
        <?php
            if(isset($_POST['text']) && $_POST['censura'])
            {
                $text = $_POST['text'];
                $censura = $_POST['censura'];
                $censoredText = str_replace($censura , "***" , $text);
            }
            else
            {
                $censoredText = "Valore invalido";
            }
        ?>

        <h1 class="py-3">
            <?php echo "$censoredText";?>
        </h1>

     </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>