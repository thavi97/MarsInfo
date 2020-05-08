<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NasaHack</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
    <body>
      <div class="container">
        @foreach($url_json as $sol)
        <div>
          <p>Average Temperature on Mars: {{$sol['AT']['av']+32}} C</p>
          <p>Min Temperature on Mars: {{$sol['AT']['mn']+32}} C</p>
          <p>Max Temperature on Mars: {{$sol['AT']['mx']+32}} C</p>
        </div>
        <br>
        @endforeach
      </div>
    </body>
</html>
