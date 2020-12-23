{{-- GOAL : seguendo il pdf come linea guida grafica, generare un nuovo progetto laravel che riporti la pagina delle paste, prendendo i dati dall'oggeto $data compattato verso le views di blade. Cercare di mantenere la struttura di layout/partials vista in classe per header, footer e content. Cercare inoltre di suddividere le paste correttamente all'interno della sezione corrispondente (matching tra il campo -tipo- presente nell'array e il titolo corrispondente --}}

 @extends('layouts.main-layout')

 @section('content')
   <h1>
     QUI VA IL CONTENT
     <br>

     @php
       echo $hello;
     @endphp

   </h1>
 @endsection
