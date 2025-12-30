<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $category->name }} | ORYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind CDN (simple & fast) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="max-w-6xl mx-auto px-4 py-8">

        <!-- Category Title -->
        <h1 class="text-3xl font-bold mb-6 text-gray-800">
            {{ $category->name }}
        </h1>

        <!-- Products Grid -->
        @if($category->products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach($category->products as $product)
                    <a href="{{ url('/product/'.$product->slug) }}"
                       class="block bg-white rounded-xl shadow hover:shadow-lg transition">

                        <div class="p-5">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">
                                {{ $product->name }}
                            </h3>

                            <p class="text-green-600 font-bold mb-3">
                                ₹{{ $product->price }}
                            </p>

                            <span class="inline-block text-sm text-blue-600 font-medium">
                                View Details →
                            </span>
                        </div>

                    </a>
                @endforeach

            </div>
        @else
            <p class="text-gray-600">
                No products available in this category.
            </p>
        @endif

    </div>

</body>
</html>
