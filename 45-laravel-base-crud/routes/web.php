<?php

use Illuminate\Support\Facades\Route;

//CI ARRIVO DA pagamenti.index, VADO AL CNTROLLER E SCATENO UNA FUNZIONE CHE RITORNA ALLA VIEW
Route::get('/', 'PagamentoController@index') -> name('pagamenti.index');
// CI ARRIVO DA pagamenti.destroy, ARRIVO ALLA VIEW SOLO PER MOSTRARE CON LA dd, POI TOLGO LA dd E TORNA ALLA VIEW COME REDIRECT
Route::get('/pagamento/delete/{id}', 'PagamentoController@destroy') -> name('pagamento.destroy');
// CI ARRIVO DA pagamenti.edit, ARRIVO ALLA VIEW PER MODIFICARE
Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento.edit');
//CI ARRIVO DAL BLADE pagamento-edit COL METODO POST, VADO AL CONTROLLER PER MODIFICARE I VALORI DELL'ENTITA' DEL MODELLO
Route::post('/pagamento/update/{id}','PagamentoController@update')-> name('pagamento.update');
