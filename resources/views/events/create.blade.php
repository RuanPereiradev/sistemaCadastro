@extends('layouts.main')
@section('title', 'Cadastro')
@section('content')

<div id="create-event-container" class="col-md-6 offset-md-3">
    <div class="form-wrapper">
        <h1>Tela de Cadastro</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do aluno" required>
            </div>

            <div class="form-group">
                <label for="age">Idade</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Idade do aluno" required>
            </div>
            
            <div class="form-group">
                <label for="city">Localidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Localidade">
            </div>

            <div class="form-group">
                <label for="sex">Sexo</label>
                <select name="sex" id="sex" class="form-control" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Serviços</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="Muay Thay">Muay Thay</option>
                    <option value="Musculação">Musculação</option>
                    <option value="Ambos">Ambos</option>
                </select>
            </div>

            <div class="form-group">
                <label for="plan">Planos</label>
                <select name="plan" id="plan" class="form-control" required>
                    <option value="Mensal">Mensal</option>
                    <option value="Semestral">Semestral</option>
                    <option value="Anual">Anual</option>
                </select>
            </div>

            <label for="inicio_plano">Data da matricula</label>
            <input type="date" id="inicio_plano" name="inicio_plano" value="{{ old('inicio_plano') }}">
            
            <div class="form-group">
                <label for="pay">Método de pagamento</label>
                <select name="pay" id="pay" class="form-control" required>
                    <option value="">Selecionar</option>
                    <option value="Credito">CRÉDITO</option>
                    <option value="Debito">DÉBITO</option>
                    <option value="pix">PIX</option>
                    <option value="dinheiro">DINHEIRO</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="condition">Possui alguma condição física ou mental?</label>
                <select name="condition" id="condition" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" class="form-control" placeholder="Descreva eventuais dores, objetivo, peso inicial etc"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Cadastrar Aluno">
        </form>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function(){
        const iniciopagoInput = document.getElementsById('inicio_plano');
        const planInput = document.getElementsById('plan');
        const fimPlanoInput = document.getElementsById('fim_plano');

        function calcularFImPlano(){
            const inicioPlano = new Date(inicioPlanoInput.value);
            const plano = planInput.value;
            let fimPlano;


            if(!isNaN(inicioPlano.getTime())){
                switch(plano){
                    case 'Mensal':
                    fimPlano = newDate(inicioPlano.setMouth(inicioPlano.getMouth()+1));
                    break;

                    case 'Semestre':
                    fimPlano = newDate(inicioPlano.setMouth(inicioPlano.getMouth()+6));
                    break;

                    case 'Anual':
                    fimPlano = new Date(inicioPlano.setFullYear(inicioPlano.getFullYear() + 1));
                    break;

                    default:
                    fimPlano = null;
                }

                if(fimPlano){
                    const dia = String(fimPlano.getDate()).padStart(2,'0');
                    const mes = String(fimPlano.getMonth() + 1).padStart(2, '0'); // Janeiro é mês 0
                    const ano = fimPlano.getFullYear();
                    fimPlanoInput.value = `${dia}/${mes}/${ano}`;
                }


            }
        }
        const mes = String(fimPlano.getMonth() + 1).padStart(2, '0'); // Janeiro é mês 0
            
        const ano = fimPlano.getFullYear();
        fimPlanoInput.value = `${dia}/${mes}/${ano}`;
    })


</script>

@endsection
