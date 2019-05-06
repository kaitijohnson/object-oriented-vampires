<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Object Oriented Vampires</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Vampires
                </div>
                  {{ $vampire }}
                <div id="app">
                  This is broken because of props:
                  <example-component :vampire="{{ $vampire }}"></example-component>
                </div>

            </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
