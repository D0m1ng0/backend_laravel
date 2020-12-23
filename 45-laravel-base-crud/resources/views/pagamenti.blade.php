@extends('layouts.main-layout')
@section('content')
  <h1>PAGAMENTO</h1>
  <h1>prov</h1>

    <ul>
      @foreach ($pagamenti as $pagamento)
      <li>
        {{$pagamento -> status}}
        {{$pagamento -> price}}
        {{-- ALLA ROUTE CI ARRIVO pagamento.destroy dato quell'id del pagamento
         --}}
         <a href="{{route('pagamento.edit', $pagamento -> id )}}">E</a>
        <a href="{{route('pagamento.destroy', $pagamento -> id )}}">X</a>
      </li>
      @endforeach
    </ul>
@endsection
