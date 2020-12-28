<main>

   @if ( !empty($long) )
    {{-- lunghe --}}
    <div class="container">
       @foreach ($long as $card)
            <div>
               {{-- {{ route('product', $card['id']) }} --}}
               <h1>{{ $card['tipo'] }}</h1>
               <img src="{{ $card['src'] }}" alt="">
               <h3>{{ $card['titolo'] }}</h3>
               <a href="{{ route('product', $card['id']) }}">vedi prodotto</a>
            </div>           
       @endforeach
    </div>
   @endif

    @if ( !empty($short) )
    {{-- corte --}}
    <div class="container">
        @foreach ($short as $card)
             <div>
 
                <h1>{{ $card['tipo'] }}</h1>
                <img src="{{ $card['src'] }}" alt="">
                <h3>{{ $card['titolo'] }}</h3>
                <a href="{{ route('product', $card['id']) }}">vedi prodotto</a>
                <div class="text">
                  <p>{!! $card['descrizione'] !!}</p>
                </div>
             </div>           
        @endforeach
    </div>
    @endif

    @if ( !empty($veryShort) )
    {{-- cortissime --}}
    <div class="container">
        @foreach ($veryShort as $card)
            <div>
 
               <h1>{{ $card['tipo'] }}</h1>
               <img src="{{ $card['src'] }}" alt="">
               <h3>{{ $card['titolo'] }}</h3>
               <a href="{{ route('product', $card['id']) }}">vedi prodotto</a>
               <div class="text">
                  <p>{!! $card['descrizione'] !!}</p>
               </div>

            </div>           
        @endforeach
    </div>
    @endif
</main>