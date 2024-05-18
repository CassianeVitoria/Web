<html>
    <head>
        <title>{{$title}}  </title>
            <link rel="stylesheet" href="{{asset ('/css/app.css')}}">
    </head>
    <body>
        <nav>
            <h3>Bem vindo ao meu site </h3>
            <hr>
        </nav>
        {{$slot}}
        <footer>
            <hr/>
            Cassi
        </footer>
    </body>
</html>
