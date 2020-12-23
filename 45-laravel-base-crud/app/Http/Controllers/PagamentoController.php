<?php

namespace App\Http\Controllers;

use App\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    // METODO CON CUI IL CONTROLLO TORNA I DATI DEL DATABASE NELLA VIEW
    public function index() {
      $pagamenti = Pagamento::all();
      return view('pagamenti', compact('pagamenti'));
    }

    public function destroy($id) {
      // LA dd MOSTRA id DEL PAGAMENTO
      // dd($id);
      //IL CNTROLLER TORNA I DATI DAL DATABASE, INDIVIDUA IL PRECISO id E LO CHIAMA COME VARIABILE E LO CANCELLA
      $pagamento = Pagamento::findOrFail($id);
      $pagamento -> delete();
      // REINDIRIZZAMENTO ALLA VIEW index INDICANDO LA ROTTA AL CONTROLLER CHE AGISCE COL METODO INDEX PER TORNARE LA VIEW
      return redirect() -> route('pagamenti.index');
    }

    public function edit($id) {
      //TORNO I DATI DAL DATABASE FACENDO RICERCA DEL PRECISO id E LO CHIAMA COME VARIABILE
      $pagamento = Pagamento::findOrFail($id);
      //E TORNA ALLA VIEW COMPATTANDO QUELLA VARIABILE
      return view('pagamento-edit', compact('pagamento'));
    }

    //LA FUNZIONE update() HA 2 ARGOMENTI UN PARAMENTRO Request $request E L'id
    public function update(Request $request, $id) {
      //TUTTE I CAMPI DELLA TABELLA SONO LEZIONATI
      $data = $request -> all();
      //STAMPA CON dd INFO SULLA $data
      // dd($data);
      //CERCA IL L'id FRA TUTTI E LO SALVA COME VARIABILE $pagamento
      $pagamento = Pagamento::findOrFail($id);
      //PER QUELL'id AGGIORNA I CAMPI EDITATI NEL FORM
      $pagamento -> update($data);

      //RITORNA ALLA VIEW pagamenti.index
      return redirect() -> route('pagamenti.index');

    }
}
