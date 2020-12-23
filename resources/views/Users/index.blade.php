@extends('_template')


@section('content')
@include('shared.alerts')

<div class="row mb-4">
    <div class="col-lg-10 col-md-9 col-6 left">
        <h4>Usuários</h4>
    </div>
    
    <div class="col-lg-2 col-md-3 col-6">
        <a href="{{ url('admin/usuarios/create/0') }}" class="btn btn-outline-info right">
            <i class="fa fa-plus"> Novo Usuário</i>
        </a>
    </div>
    
</div>

<form action="" id="formFiltros" method="post">
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
                
                <td> {{ $user->name }}</td>
                
                <td> {{ $user->email  }}</td>
                
                <td> {{ $user->cpf }} </td>
                 
                <td nowrap>
                    <a href="" class="btn btn-outline-theme btn-font" title="Editar">
                        <i class="fa-sm fa fa-edit"></i>
                    </a>
                    <a href="" onclick="if(!confirm('Você tem certeza que deseja excluir esse item?') ) { return false; }" class="btn btn-outline-theme btn-font" title="Excluir">
                        <i class="fa-sm fa fa-trash"></i>
                    </a> 
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
<div class="">
    @include('shared.paginate', ['form' => 'formFiltros', 'itens' => $users])
</div>
@endsection