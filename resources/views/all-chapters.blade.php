<html>
    <head>

    </head>
    <title>
        All Six Of Crows Part One Chapter
    </title>
    <style>
        .content{
            padding: 10px 10px;
            display: flex;
            justify-content: center;
        }
        pre{
            margin: 10px;
            padding: 50px 90px;
            border: 1px solid grey;
        }
    </style>
    <body>
        <h1 style="text-align:center">{{ $book_name }}</h1>
        <h2 style="text-align:center">{{ $part_name }}</h2>
        @for($i = 1; $i <= $chapter_number; $i++)
            <hr>
            <h2 style="text-align:center">Chapter {{ $i }}</h3>
            <div class="content">
                <pre><span style="font-size: 20px; font-family:Times New Roman;">@include("chapter" . $i)<span></pre>
            </div>
        @endfor 
    </body>
</html>