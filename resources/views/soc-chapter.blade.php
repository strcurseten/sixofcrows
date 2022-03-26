<html>
    <head>

    </head>
    <title>

    </title>
    <body>
        <h1>{{ $book_name }}</h1>
        <h2>{{ $part_name }}</h2>
        <h3>
            Congrats!
        </h3>
        <hr>
        <pre>@include("chapter" . $route_chapter)</pre>
        
    </body>
</html>