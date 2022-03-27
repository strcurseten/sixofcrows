<html>
    <head>

    </head>
    <title>
    Six of Crows
    </title>
    <body>
        <h1 style="text-align:center">{{ $book_name }}</h1>
        <h2 style="text-align:center">{{ $part_name }}</h2>
        <div style="text-align:center">
            @for($i = 1; $i <= $chapter_number; $i++)
            <h3>
                <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
            </h3>
            @endfor
            <h3>
                <a href="/all-chapters">All Chapters</a>
            </h3>
        </div>
    </body>
</html>
