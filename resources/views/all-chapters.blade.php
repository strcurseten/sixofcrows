<html>
    <head>

    </head>
    <title>

    </title>
    <body>
        <h1>{{ $book_name }}</h1>
        <h2>{{ $part_name }}</h2>
        @for($i = 1; $i <= $chapter_number; $i++)
            <h3>Chapter {{ $i }}</h3>
            <hr>
            <pre>@include("chapter{ $i }")</pre>
        @endfor 
    </body>
</html>