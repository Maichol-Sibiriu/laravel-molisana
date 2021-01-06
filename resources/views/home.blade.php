@extends('layouts.main')

@section('content')
   
   {{-- main products --}}
   @include('partials.main', ['main' => $long, 'title' => 'LE LUNGHE']);
   @include('partials.main', ['main' => $short, 'title' => 'LE CORTE']);
   @include('partials.main', ['main' => $veryShort, 'title' => 'LE CORTISSIME']);

@endsection


