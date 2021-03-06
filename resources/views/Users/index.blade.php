@extends('_template')


@section('content')
@include('shared.alerts')

<div class="row mb-4">
    <div class="col-lg-10 col-md-9 col-6 left">
        <h4>Listagem de Usuários</h4>
    </div>
    
    <div class="col-lg-2 col-md-3 col-6">
        <a href="{{ url('create/0') }}" class="btn btn-outline-info right">
            <i class="fa fa-plus"> Novo Usuário</i>
        </a>
    </div>
    
</div>

<form action="" id="formPaginate" method="post">
    {!! csrf_field() !!}
    <input type="hidden" name="page" id="page" value="{{ $request->page }}">
</form>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th width="1%">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                
                <td> 
                    <a href="{{ url('show/'.$user->id) }}">
                        
                        {{ $user->name }}
                    </a>
                    
                </td>
                
                <td> {{ $user->email  }}</td>
                
                <td> {{ $user->cpf }} </td>
                
                <td nowrap>
                    <a href="{{ url('create/'.$user->id) }}" class="btn btn-outline-theme btn-font" title="Editar">
                        <i class="fa-sm fa fa-edit"></i>
                    </a>
                    <a href="{{ url('delete/'.$user->id) }}" onclick="if(!confirm('Você tem certeza que deseja excluir esse item?') ) { return false; }" class="btn btn-outline-theme btn-font" title="Excluir">
                        <i class="fa-sm fa fa-trash"></i>
                    </a> 
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
<div class="">
    @include('shared.paginate', ['form' => 'formPaginate', 'itens' => $users])
</div>
@endsection