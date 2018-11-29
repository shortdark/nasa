<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NASA API Explorer</title>

    <link rel="preload" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" as="style" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></noscript>

    <style>
        html,body {
            height: 100%;
        }
    </style>

</head>
<body class="bg-light">

<div class="container-fluid h-100">
    <div class="h-100 align-top">
        <h1 class="display-3 text-center">NASA API Explorer</h1>

        <div id="app" class="d-block w-100">

            <img src="{{ $content }}" class="rounded mx-auto d-block img-fluid">

        </div>
    </div>
</div>



</body>
</html>
