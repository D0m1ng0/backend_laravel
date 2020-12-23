@extends('layouts.main-layout')
@section('section')
  <h1>PAGANTI</h1>

  @foreach ($paganti as $pagante)
    <ul>
      <li>
        {{$pagante -> name}}
        {{$pagante -> lastname}}
      </li>
    </ul>
  @endforeach

@endsection
