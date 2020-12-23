@extends('layouts.main-layout')
@section('content')
  <h1>EDIT PAGAMENTO</h1>
  {{-- FORM DELLA BLADE A CUI ARRIVO DA UN PRECISO id TRAMITE LA ROUTE CHE DALL'id INVIA AL CONTROLLER CHE SCATENA LA FUNZIONE edit() CHE RIMANDA ALLA VIEW --}}
              {{-- IL FORM VA INSTRADATO DALLA ROUTE AL CONTROLLER CHE SCATENA LA FUNZIONE UPDATE --}}
  <form action="{{ route('pagamento.update', $pagamento -> id) }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      {{-- IL for DEVE AVERE VALORE IDENTICO AL VALORE DI name --}}
      <label for="status">STATUS</label>
      {{-- SOSTITUISCO LA input CON UNA SELECT --}}
      {{-- <input type="text" name="status" value="{{ $pagamento -> status }}"> --}}
      <br>
                        {{-- IL name DELLA SELECT DEVE ESSERE LO STESSO DI for DELLA label --}}
        <select class="" name="status">
          <option value="accepted">ACCEPTED</option>
          <option value="rejected">REJECTED</option>
          <option value="pending">PENDING</option>
        </select>
      <br>
    </div>
    <div class="form-group">
      <label for="price">PRICE</label>
      <br>
      <input type="text" name="price" value="{{ $pagamento -> price }}">
    </div>
    <button type="submit" name="button">UPDATE EDITS</button>
  </form>
@endsection
