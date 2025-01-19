@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    
    
<h1>Tela de produtos</h1>

@if(@$id!=null)
<p>Exibindo produto id:{{$id}}</p>
@endif

@if($busca != '')
<p>O usuário está buscando por {{$busca}}</p>
@endif
@endsection
