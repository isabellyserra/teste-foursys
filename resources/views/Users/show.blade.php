@extends('_template')


@section('content')
@include('shared.alerts')

<div class="row mb-5">
    <div class="col-lg-12 col-md-12 col-12 center">
        <h4>Visualizar {{ $user->name }}  </h4>
    </div>
</div>
<div class="container padding">
    
    <div class="row mb-3">
        <div class="col-md-4 left">
            <strong>E-mail:</strong>
            <br>
            {{ $user->email }}
        </div>
        <div class="col-md-4 left">
            <strong>CPF:</strong>
            <br>
            {{ $user->cpf }}
        </div>
        <div class="col-md-4 left">
            <strong>Data de Nascimento:</strong>
            <br>
            {{ $user->data_nascimento->format('d/m/Y') }}
        </div>
    </div>
    <div class="row mb-3">
        
        <div class="col-md-4 left">
            <strong>Telefone:</strong>
            <br>
            {{ $user->telefone }}
        </div>
        <div class="col-md-4 left">
            <strong>Endereço:</strong>
            <br>
            {{ $user->logradouro }} - N° {{ $user->numero }}
        </div>
        
        <div class="col-md-4 left">
            <strong>Complemento:</strong>
            <br>
            {{ isset($user->complemento) ? $user->complemento : 'Não Consta' }}
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-md-4 left">
            <strong>Bairro:</strong>
            <br>
            {{ $user->bairro }}
        </div>
        
        <div class="col-md-4 left">
            <strong>Cidade / Estado:</strong>
            <br>
            {{ $user->cidade }} - {{ $user->estado }}
        </div>

        <div class="col-md-4 left">
            <strong>Cadastro efetuado em:</strong>
            <br>
            {{ $user->created_at->format('d/m/Y') }} 
        </div>
    </div>
    <div class="center mt-5">
        <a href="{{ url('/') }}" class="btn btn-info">Voltar</a>
    </div>
</div>

@endsection