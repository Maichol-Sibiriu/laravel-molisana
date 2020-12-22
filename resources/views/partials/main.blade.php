<main>
    <div>
       @foreach ($cards as $card)
            <div>

               <h1>{{ $card['tipo'] }}</h1>
               <img src="{{ $card['src'] }}" alt="">
               <h3>{{ $card['titolo'] }}</h3>
               <p>{{ $card['descrizione'] }}</p>

            </div>           
       @endforeach
    </div>
</main>