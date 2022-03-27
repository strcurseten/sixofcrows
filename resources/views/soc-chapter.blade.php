<html>
    <head>

    </head>
    <title>
    Chapter {{$route_chapter}}
    </title>
    <style>
        a{
            padding: 10px 10px;
        }
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
        <div style="text-align:center; font-size:18px;">
            @for($i = 1; $i <= $chapter_number; $i++)
                <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
            @endfor
        </div>
        <div class="content">
            <pre><span style="font-size: 20px; font-family:Times New Roman;">@include("chapter" . $route_chapter)<span></pre>
        </div>
    </body>
</html>