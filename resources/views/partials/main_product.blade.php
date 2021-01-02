<main>
    <div class="container">
        
        <i class="fas fa-angle-left fa-2x"></i>
        
        <h1>{{ $product['titolo'] }}</h1>
        <img src="{{ $product['src-h'] }}" alt="">
        <img src="{{ $product['src-p'] }}" alt="">

        <div class="text">
           <p>{!! $product['descrizione'] !!}</p>
        </div>

        <i class="fas fa-angle-right fa-2x"></i>

    </div>
</main>