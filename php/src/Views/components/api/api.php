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