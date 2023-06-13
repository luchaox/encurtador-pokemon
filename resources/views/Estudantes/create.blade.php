@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Adicionar Novo Estudante</h3>
            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Houve alguns problemas com o preenchimento.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('estudantes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" placeholder="Digite o nome" name="nome" value="{{ old('nome') }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" placeholder="Digite o CPF" name="cpf" value="{{ old('cpf') }}">
                </div>
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="date" class="form-control" placeholder="Digite a data de nascimento" name="nascimento" value="{{ old('nascimento') }}">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
