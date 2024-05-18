<html>
    <head>
        <title>{{$title}}  </title>
            <link rel="stylesheet" href="{{asset ('/css/app.css')}}">
    </head>
    <body>
        <nav>
            <h3>Olá, nerd</h3>
            <hr>
        </nav>
        {{$slot}}
        <footer>
            <hr/>
        </footer>
    </body>
</html>
