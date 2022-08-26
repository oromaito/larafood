@extends('adminlte::page')

@section('title', 'Detalhjes do plano')

@section('content_header')
    <h1>Detalhes do plano {{ $plan->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{$plan->name}}
                </li>
                <li>
                    <strong>URL: </strong> {{ $plan->url }}
                </li>
                <li>
                    <strong>Preço: </strong> {{ $plan->price }}
                </li>
                <li> 
                    <strong>Descrição: </strong> R$ {{ number_format($plan->price, 2, ',', '.') }}
                </li>
            </ul>
            <form action="{{ route('plans.destroy', $plan->url) }}" method="POST"> 
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">deletar o registro</button>
            </form>
        </div>
    </div>
@stop