<main>

    @if ( !empty($long) )
    {{-- lunghe --}}
    <div>
       @foreach ($long as $card)
            <div>

               <h1>{{ $card['tipo'] }}</h1>
               <img src="{{ $card['src'] }}" alt="">
               <h3>{{ $card['titolo'] }}</h3>
               <p>{{ $card['descrizione'] }}</p>

            </div>           
       @endforeach
    </div>
    @endif

    @if ( !empty($short) )
    {{-- corte --}}
    <div>
        @foreach ($short as $card)
             <div>
 
                <h1>{{ $card['tipo'] }}</h1>
                <img src="{{ $card['src'] }}" alt="">
                <h3>{{ $card['titolo'] }}</h3>
                <p>{{ $card['descrizione'] }}</p>
 
             </div>           
        @endforeach
    </div>
    @endif

    @if ( !empty($veryShort) )
    {{-- cortissime --}}
    <div>
        @foreach ($veryShort as $card)
             <div>
 
                <h1>{{ $card['tipo'] }}</h1>
                <img src="{{ $card['src'] }}" alt="">
                <h3>{{ $card['titolo'] }}</h3>
                <p>{{ $card['descrizione'] }}</p>
 
             </div>           
        @endforeach
    </div>
    @endif
</main>