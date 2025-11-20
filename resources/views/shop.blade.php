<x-app-layout>
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="row">
                @if(count($products) > 0)
                    @foreach($products as $product)
                        <div class="col-md-3 mt-2">
                            <div class="card" style="width: 18rem;">

                                <img class="card-img-top"
                                     src="{{ asset("assets/images/$product->image") }}" alt="">
                                <div class="card-body">
                                    <h1 class="card-title" style="font-size: 20px;">{{ $product->name }}</h1>
                                    <h1 class="card-title" style="font-size: 20px;">{{ $product->price }}</h1>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <a href="{{ route('add-to-cart', $product->id) }}" class="btn btn-success mt-3">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
