<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card {
            background-color: rgb(3, 37, 65);
            position: relative;
            border-radius: 23px;
            overflow: hidden;
            width: 281px;
            height: 194px;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
            /* Ofuscamento */
            padding: 15px;
        }

        .card-title {
            color: white;
            margin-bottom: 10px;
        }

        #sinopse {
            background-color: #D8D8D8;
            color: #032541;
            font-weight: bold;
            border-radius: 65.63px;
            width: 98px;
            height: 34.28px;
            border: 1px;
            font-size: 14px;
            display: inline-block;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include_once __DIR__ . '/api.php';

            if (isset($data['results']) && is_array($data['results'])) {
                foreach ($data['results'] as $movie) {
                    if (isset($movie['backdrop_path'])) {
                        ?>
                        <div class="col-md-3">
                            <div class="card m-3">
                                <img class="card-img-top img-fluid"
                                    src="https://image.tmdb.org/t/p/w500<?php echo $movie['backdrop_path']; ?>"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $movie['original_title'] ?>
                                    </h5>
                                    <a href="#" class="btn btn-primary" id="sinopse">SINOPSE</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>