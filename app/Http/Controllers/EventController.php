<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\User;


class EventController extends Controller
{
    public function index(){

        $alunos = Aluno::all();

        foreach ($alunos as $aluno){
            $aluno->fimPlano = $aluno->calcularFimPlano();
        }
        
        return view('welcome',['alunos'=>$alunos]);



    }
    
    public function create(){

        return view(('events.create'));

    }

    public function store(Request $request){

        $aluno = new Aluno;

        $aluno->name = $request->name;
        $aluno->age = $request->age;
        $aluno->sex = $request->sex;
        $aluno->description = $request->description;
        $aluno->type = $request->type;
        $aluno->plan = $request->plan;
        $aluno->inicio_plano = $request->inicio_plano;
        $aluno->pay = $request->pay;

        //$aluno->fimPlano = $aluno->calcularFimPlano();

        
        $aluno->save();

        return redirect('/');

    }
        
public function show($id){
    $aluno =  Aluno::findOrFail($id);


  
}

public function dashboard() {
    $alunos = Aluno::all();

    foreach ($alunos as $aluno){

        $aluno->fimPlano = $aluno->calcularFimPlano();
    }
    
    return view('events.dashboard',['alunos'=>$alunos]);

}

public function destroy($id){
    Aluno::findOrFail($id)->delete();

    return redirect('/dashboard')->with('msg', 'Aluno excluido com sucesso!');
}

public function edit($id){
    
    $aluno = Aluno::findOrfail($id);
    return view ('events.edit', ['aluno'=>$aluno]);
}


public function update(Request $request){
    $data = $request->all();

    Aluno::findOrFail($request->id)->update($data);

    return redirect('/dashboard');
}

public function MostrarFimPlano($id){
    $aluno = Aluno::find($id);
    $fimPlano = $aluno->calcularFimPlano();
}





}


