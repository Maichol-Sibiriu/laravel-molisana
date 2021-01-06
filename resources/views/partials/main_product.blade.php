<main class="product">
    <div class="container">
        
        @if($id > 0)
            <a href="{{ route('product', $id - 1) }}">
              <i class="fas fa-angle-left fa-2x"></i>
            </a>
        @endif

        <h1>{{ $product['titolo'] }}</h1>

        <div class="img">
            <img src="{{ $product['src-h'] }}" alt="">
            <img src="{{ $product['src-p'] }}" alt="">
        </div>

        <div class="text">
           <p>{!! $product['descrizione'] !!}</p>
        </div>
        
        @if($id < $length)
            <a href="{{ route('product', $id + 1) }}">
               <i class="fas fa-angle-right fa-2x"></i>
            </a>
        @endif

    </div>
</main>