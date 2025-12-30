<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }} | ORYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <a href="{{ url('/product/'.$product->slug) }}" style="text-decoration:none;color:inherit;">
    <div class="card">
        <h3>{{ $product->name }}</h3>

        <div class="price">₹{{ $product->price }}</div>

        <div class="soon">View Details</div>
    </div>
</a>
    <style>
        body { font-family: Arial; background:#f8fafc; margin:0; }
        .container { max-width:1100px; margin:auto; padding:20px; }
        h1 { margin-bottom:20px; }
        .grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(220px,1fr)); gap:20px; }
        .card {
            background:#fff; border-radius:10px; padding:15px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
        }
        .price { color:#16a34a; font-weight:bold; }
        .soon {
            display:inline-block; margin-top:8px;
            background:#facc15; padding:4px 10px;
            border-radius:20px; font-size:12px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>{{ $category->name }}</h1>

    <div class="grid">
        @foreach($category->products as $product)
            <div class="card">
                <h3>{{ $product->name }}</h3>
                <div class="price">₹{{ $product->price }}</div>
                <div class="soon">Coming Soon</div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
