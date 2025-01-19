@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')


<div class="col-md-10 offset-md-1 dashboard-events-container">  
    <div class="form-wrapper">
    <h1>Tabela de Alunos</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Plano</th>
                <th scope="col">Início do Plano</th>
                <th scope="col">Fim do Plano</th>
                <th scope="col">Método de Pagamento</th>
                <th scope="col">Observações</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td><a href="">{{$aluno->name}}</a></td>
                <td>{{$aluno->plan}}</td>
                <td>{{$aluno->inicio_plano}}</td>
                <td>{{$aluno->calcularFImPlano()}}</td>
                <td>{{$aluno->pay}}</td>
                <td>{{$aluno->description}}</td>
                <td>
                    <a href="/events/edit/{{$aluno->id}}" class="btn btn-info edit-btn text-white">
                        <ion-icon name="create-outline"></ion-icon> Editar
                    </a>
                    <form action="/events/{{$aluno->id}}" method="POST" style="display:inline;" onsubmit="return confirmDeletion();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon> Deletar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<script>
    function confirmDeletion() {
        return confirm("Tem certeza de que deseja excluir este aluno? Esta ação não pode ser desfeita.");
    }
</script>

@endsection
