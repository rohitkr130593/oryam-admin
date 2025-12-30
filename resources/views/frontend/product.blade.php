<!DOCTYPE html>
<html>
<head>
    <title>{{ $product->name }} | ORYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial; background:#f8fafc; margin:0; }
        .container { max-width:1100px; margin:auto; padding:20px; }
        .gallery { display:flex; gap:10px; overflow-x:auto; }
        .gallery img {
            height:220px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,.1);
        }
        .price { color:#16a34a; font-size:20px; font-weight:bold; }
    </style>
</head>
<body>

<div class="container">
    <h1>{{ $product->name }}</h1>
    <p class="price">₹{{ $product->price }}</p>

    {{-- IMAGE GALLERY --}}
    @if($product->images)
        <div class="gallery">
            @foreach($product->images as $image)
                <img src="{{ asset('storage/'.$image) }}" alt="">
            @endforeach
        </div>
    @endif

    <hr>

    <p>{!! nl2br(e($product->description)) !!}</p>

    <p><strong>Category:</strong> {{ $product->category->name }}</p>
</div>

</body>
</html>
