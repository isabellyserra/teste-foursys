@extends('_template')


@section('content')
<div class="row mb-4">
    <div class="col-lg-12 col-md-12 col-12 left">
        <h4>Novo Usuário</h4>
    </div>
</div>

<form action="" id="formUser" method="post">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{ $user->name }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="email">E-mail</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $user->cpf }}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="data_nascimento">Data de Nascimento</label>
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $user->data_nascimento }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ $user->telefone }}" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="label-cad" for="logradouro">Endereço</label>
                <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{ $user->logradouro }}" required>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                <label class="label-cad" for="numero">Número</label>
                <input type="text" class="form-control" name="numero" id="numero" value="{{ $user->numero }}" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $user->complemento }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $user->bairro }}" required>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form-group">
                <label class="label-cad" for="estado">Estado</label>
                <select class="form-control"  name="estado" id="estado">
                    <option value="SP" {!! "SP" == $user->estado ? 'selected="selected"' : '' !!}>SP</option>
                    <option value="AC" {!! "AC" == $user->estado ? 'selected="selected"' : '' !!}>AC</option>
                    <option value="AL" {!! "AL" == $user->estado ? 'selected="selected"' : '' !!}>AL</option>
                    <option value="AP" {!! "AP" == $user->estado ? 'selected="selected"' : '' !!}>AP</option>
                    <option value="AM" {!! "AM" == $user->estado ? 'selected="selected"' : '' !!}>AM</option>
                    <option value="BA" {!! "BA" == $user->estado ? 'selected="selected"' : '' !!}>BA</option>
                    <option value="CE" {!! "CE" == $user->estado ? 'selected="selected"' : '' !!}>CE</option>
                    <option value="DF" {!! "DF" == $user->estado ? 'selected="selected"' : '' !!}>DF</option>
                    <option value="ES" {!! "ES" == $user->estado ? 'selected="selected"' : '' !!}>ES</option>
                    <option value="GO" {!! "GO" == $user->estado ? 'selected="selected"' : '' !!}>GO</option>
                    <option value="MA" {!! "MA" == $user->estado ? 'selected="selected"' : '' !!}>MA</option>
                    <option value="MT" {!! "MT" == $user->estado ? 'selected="selected"' : '' !!}>MT</option>
                    <option value="MS" {!! "MS" == $user->estado ? 'selected="selected"' : '' !!}>MS</option>
                    <option value="MG" {!! "MG" == $user->estado ? 'selected="selected"' : '' !!}>MG</option>
                    <option value="PA" {!! "PA" == $user->estado ? 'selected="selected"' : '' !!}>PA</option>
                    <option value="PB" {!! "PB" == $user->estado ? 'selected="selected"' : '' !!}>PB</option>
                    <option value="PR" {!! "PR" == $user->estado ? 'selected="selected"' : '' !!}>PR</option>
                    <option value="PE" {!! "PE" == $user->estado ? 'selected="selected"' : '' !!}>PE</option>
                    <option value="PI" {!! "PI" == $user->estado ? 'selected="selected"' : '' !!}>PI</option>
                    <option value="RJ" {!! "RJ" == $user->estado ? 'selected="selected"' : '' !!}>RJ</option>
                    <option value="RN" {!! "RN" == $user->estado ? 'selected="selected"' : '' !!}>RN</option>
                    <option value="RS" {!! "RS" == $user->estado ? 'selected="selected"' : '' !!}>RS</option>
                    <option value="RO" {!! "RO" == $user->estado ? 'selected="selected"' : '' !!}>RO</option>
                    <option value="RR" {!! "RR" == $user->estado ? 'selected="selected"' : '' !!}>RR</option>
                    <option value="SC" {!! "SC" == $user->estado ? 'selected="selected"' : '' !!}>SC</option>
                    <option value="SE" {!! "SE" == $user->estado ? 'selected="selected"' : '' !!}>SE</option>
                    <option value="TO" {!! "TO" == $user->estado ? 'selected="selected"' : '' !!}>TO</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="label-cad" for="cidade">Cidade</label>
                <select class="form-control"  name="cidade" id="cidade">
                   
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-info"><i class="fa fa-save"> Salvar</i></button>
    </div>
</form>

@endsection