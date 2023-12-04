<?php
require __DIR__ . '/../../../../vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?&include_video=false&language=pt-BR&page=1&sort_by=popularity.desc', [
    'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0MGU0MGQyOGZjMmU5NDMzNGUyZjhlZjMxNWY0MzMyZCIsInN1YiI6IjYzOTNkZTE1OWY1ZGZiMDA5MTZjODNkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.pPu9uJsyC7UWNL8knICyo3kX-tj6Fk2aGNkogkIgznw',
        'accept' => 'application/json',
    ],
]);

$data = json_decode($response->getBody(), true);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php
    // Verifica se a resposta contém resultados
    if (isset($data['results']) && is_array($data['results'])) {
        // Itera sobre os resultados
        foreach ($data['results'] as $movie) {
            // Verifica se há um caminho de plano de fundo (backdrop_path)
            if (isset($movie['backdrop_path'])) {
                ?>
                <div class="card m-3" style="width: 18rem; text-align: center;">
                    <img class="card-img-top" src="https://image.tmdb.org/t/p/w500<?php echo $movie['backdrop_path']; ?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $movie['original_title'] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $movie['overview'] ?>
                        </p>
                        <a href="#" class="btn btn-primary">Assistir</a>
                        <a href="#" class="btn btn-primary">Assistir</a>
                    </div>
                </div>

                <?php
            }
        }
    }
    ?>

</body>

</html>