<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Urna</title>
</head>
<body>
    <div class="container">
        @foreach ($candidato as $candidato)
            <div class="card mt-2 mb-2" style="max-width: 600px;">
                <div class="row">
                    <div class="col-md">
                        <img src="images\men.png" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <div class="card-content">
                                <h5 class="card-title">{{$candidato->nome}}</h5>
                                <p class="card-text">{{$candidato->numero_chapa}}</p>
                                <p class="card-text">Partido: {{$candidato->partido}}</p>
                            </div>      
                            <div class="card-button">
                                <a href="{{ route('registrarVoto', ['id'=>$candidato->id]) }}" class="btn btn-primary">Votar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        .container {
            min-height:100vh;
            justify-content: space-around;
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            background-color: blue;
        }
        .card {
            width: 350px;
            justify-content: flex;
            flex-wrap: wrap;
        }
        .img-fluid {
            flex: 1 1 120px;
            
        }
        .card-body {
            flex: 1 1 120px;
            justify-content: space-between;
            border-radius: 3px;
            height: 100%;
        }
        .card-content{
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</body>
</html>