@extends('layouts.app')

@section('title','Edição')

@section('content')
    <div class="container mt-5">
        <h1>Editar compromisso</h1>
        <hr>
        <form action="{{ route('agenda-update', ['id'=>$agenda->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome_do_compromisso">Nome:</label>
                    <input type="text" class="form-control" name="nome_do_compromisso" value="{{ $agenda->nome_do_compromisso }}" placeholder="Digite o nome do compromisso">
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" class="form-control" name="data" value="{{ $agenda->data }}" placeholder="Digite a data">
                </div>
                <div class="form-group">
                    <label for="hora_inicio">Hora do inicio:</label>
                    <input type="time" class="form-control" name="hora_inicio" value="{{ $agenda->hora_inicio }}" placeholder="Digite a hora do inicio">
                </div>
                <div class="form-group">
                    <label for="hora_termino">Hora do termino:</label>
                    <input type="time" class="form-control" name="hora_termino" value="{{ $agenda->hora_termino }}" placeholder="Digite a hora do termino">
                </div>
                <div class="form-group">
                    <label for="local">Local:</label>
                    <input type="text" class="form-control" name="local" value="{{ $agenda->local }}" placeholder="Digite o local do compromisso">
                </div>
                <div class="form-group">
                    <label for="status">status:</label>
                    <input type="text" class="form-control" name="status" value="{{ $agenda->status }}" placeholder="status">
                </div>
                <div class="form-group">
                    <label for="observacoes">observações:</label>
                    <input type="text" class="form-control" name="observacoes" value="{{ $agenda->observacoes }}" placeholder="Observação">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>

@endsection
