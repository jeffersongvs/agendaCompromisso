@extends('layouts.app')

@section('title','Criação')

@section('content')
    <div class="container mt-5">
        <h1>Adicione novo compromisso</h1>
        <hr>
        <form action="{{ route('agenda-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome_do_compromisso">Nome:</label>
                    <input type="text" class="form-control" name="nome_do_compromisso" placeholder="Digite o nome do compromisso">
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" class="form-control" name="data" placeholder="Digite a data">
                </div>
                <div class="form-group">
                    <label for="hora_inicio">Hora do inicio:</label>
                    <input type="time" class="form-control" name="hora_inicio" placeholder="Digite a hora do inicio">
                </div>
                <div class="form-group">
                    <label for="hora_termino">Hora do termino:</label>
                    <input type="time" class="form-control" name="hora_termino" placeholder="Digite a hora do termino">
                </div>
                <div class="form-group">
                    <label for="local">Local:</label>
                    <input type="text" class="form-control" name="local" placeholder="Digite o local do compromisso">
                </div>
                <div class="form-group">
                    <label for="status">status:</label>
                    <input type="text" class="form-control" name="status" placeholder="status">
                </div>
                <div class="form-group">
                    <label for="observacoes">observações:</label>
                    <input type="text" class="form-control" name="observacoes" placeholder="Observação">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

@endsection
