<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        //dd('Olla mundo');
        $agenda = Agenda::all();
        //dd($agenda);
        return view('agenda.index',['agenda'=>$agenda]);
    }

    public function create() {
        return view('agenda.create');
    }

    public function store(Request $request) {
        Agenda::create($request->all());
        return redirect()->route('agenda-index');
    }

    public function edit($id){

        $agenda = Agenda::where('id',$id)->first();
        if(!empty($agenda)){
            return view('agenda.edit',['agenda'=>$agenda] );
        } else {
            return redirect()->route('agenda-index');
        }

    }

    public function update(Request $request, $id) {
        $data = [
        'nome_do_compromisso' => $request->nome_do_compromisso,
        'data' => $request->data,
        'hora_inicio' => $request->hora_inicio,
        'hora_termino' => $request->hora_termino,
        'local' => $request->local,
        'status' => $request->status,
        'observacoes' => $request->observacoes,
        ];
        Agenda::where('id',$id)->update($data);
        return redirect()->route('agenda-index');
    }

    public function destroy($id){
        Agenda::where('id',$id)->delete();
        return redirect()->route('agenda-index');
    }
}
