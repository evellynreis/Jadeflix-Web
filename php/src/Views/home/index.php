<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="../img/pipoca.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous" />

</head>

<body>
    <div class="components-home">
        <div class="components-menu">
            <?= file_get_contents(__DIR__ . '/../components/menu/index.html'); ?>
        </div>
        <div class="components-content">
            <?= file_get_contents(__DIR__ . '/../components/dark/dark.html'); ?>
            <?php include_once __DIR__ . '/../components/api/api_filmes.php' ?>
        </div>
    </div>
</body>

</html>