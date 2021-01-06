<main class="home">

   @if ( !empty($main) )

      {{-- tipo prodotti --}}
      <div class="container">
         
         <h1>{{ $title }}</h1>
         
         <div class="content">
            @foreach ($main as $card)
               <div class="image">
                  <a href="{{ route('product', $card['id']) }}">
                     <img src="{{ $card['src'] }}" alt="">
                  </a>      
               </div>
            @endforeach
         </div>

      </div>

   @endif

</main>