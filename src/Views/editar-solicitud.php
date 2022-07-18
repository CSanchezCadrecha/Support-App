<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base MVC with PHP</title>
    <script src="https://kit.fontawesome.com/4029e392d6.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Fem Desk</h1>
    <i class="fa-solid fa-pen-to-square"></i>
    <?php 
       var_dump($data);

        foreach ($data as $key => $value) {
            $html = <<<HTML
                <div>
                    $key . ':' . $value
                </div>
            HTML;

            echo $html;
        }

        echo "home sweet home. Hello {$data['name']}." 

    ?>

</body>
</html>