<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://api.themoviedb.org/3/account/16372688/favorite/movies?language=en-US&page=1&sort_by=created_at.asc', [
    'headers' => [
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI0MGU0MGQyOGZjMmU5NDMzNGUyZjhlZjMxNWY0MzMyZCIsInN1YiI6IjYzOTNkZTE1OWY1ZGZiMDA5MTZjODNkYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.pPu9uJsyC7UWNL8knICyo3kX-tj6Fk2aGNkogkIgznw',
        'accept' => 'application/json',
    ],
]);

echo $response->getBody();