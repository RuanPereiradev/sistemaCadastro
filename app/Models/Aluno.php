<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'age',
        'sex',
        'description',
        'type',
        'plan',
        'inicio_plano',
    ];

    protected $casts = [
        'inicio_plano' => 'datetime',
    ];
    

    public function getInicioPlanoAttribute($value){
        return Carbon::parse($value)->format('d/m/Y');
    }
    

    public function calcularIdade(){
        return Carbon::parse($this->attributes['age'])->age;
    }
    public function calcularFimPlano(){
        $inicioPlano = Carbon::parse($this->attributes['inicio_plano']);
    
        switch(strtolower($this->plan)){
            case 'mensal':
                return $inicioPlano->addMonth()->format('d/m/Y');
            
            case 'semestral':
                return $inicioPlano->addMonths(6)->format('d/m/Y');
        
            case 'anual':
                return $inicioPlano->addYear()->format('d/m/Y');
            
            default:
                return 'Data inválida';
        }
    }
    
}
