@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center">Lista de Estudantes</h3>
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Sala</th>
                    <th>Ações</th>
                </tr>
                @foreach ($estudantes as $estudante)
                <tr>
                    <td>{{ $estudante->nome }}</td>
                    <td>{{ $estudante->cpf }}</td>
                    <td>{{ $estudante->nascimento }}</td>
                    <td>{{ $estudante->sala_id }}</td>
                    <td>
                        <form action="{{ route('estudantes.destroy', $estudante->id) }}" method="POST">
                            <a href="{{ route('estudantes.show', $estudante->id) }}" title="Ver"><i class="fas fa-eye text-success fa-lg"></i></a>
                            <a href="{{ route('estudantes.edit', $estudante->id) }}" title="Editar"><i class="fas fa-edit fa-lg"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Excluir" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection


