<!DOCTYPE html>
<html>
<head>
    <title>Categories | ORYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial; background:#f8fafc; margin:0; }
        .container { max-width:1100px; margin:auto; padding:20px; }
        .grid {
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
            gap:20px;
        }
        .card {
            background:#fff;
            padding:18px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
            text-align:center;
        }
        a { text-decoration:none; color:inherit; }
    </style>
</head>
<body>

<div class="container">
    <h1>All Categories</h1>

    <div class="grid">
        @foreach($categories as $category)
            <a href="{{ url('/categories/'.$category->slug) }}">
                <div class="card">
                    <h3>{{ $category->name }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</div>

</body>
</html>
