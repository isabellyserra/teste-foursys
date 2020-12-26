@extends('_template')


@section('content')
<div class="row mb-4">
    <div class="col-lg-12 col-md-12 col-12 left">
        <h4>Novo Usuário</h4>
    </div>
</div>

<form id="formUser" method="post">
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
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="cpf">CPF</label>
                <input type="text" class="form-control cpf" name="cpf" id="cpf" value="{{ $user->cpf }}" required>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="data_nascimento">Data de Nascimento</label>
                <div class="input-group">
                    <input type="text" class="form-control datepicker" name="data_nascimento" id="data_nascimento" autocomplete="off" value="{{ isset($user->data_nascimento) ? $user->data_nascimento->format('d/m/Y') : '' }}" required>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="calendar"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="label-cad" for="telefone">Telefone</label>
                <input type="text" class="form-control telefone" name="telefone" id="telefone" value="{{ $user->telefone }}" required>
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
                <input type="text" class="form-control" name="complemento" id="complemento" value="{{ $user->complemento }}">
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
                <select class="form-control"  name="estado" id="estado" onchange="buscaCidades(this.value)">
                    <option value="">:: UF ::</option>
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
                <select class="form-control select2"  name="cidade" id="cidade">
                    <option value="">:: Selecione ::</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" onclick="validaCpf()" class="btn btn-info"><i class="fa fa-save"> Salvar</i></button>
        @if( $user->id != 0 )
            <a href="{{ url('delete/'.$user->id) }}" class="btn btn-danger"><i class="fa fa-trash"> Excluir</i></a>
        @endif
    </div>
</form>
    
@endsection
@section('scripts')
    
    <script>
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-90:+0",
            dateFormat: 'dd/mm/yy',
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
            dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'] 
        });
        
        $(document).ready(function(){
            $(".cpf").mask("999.999.999-99");
            $(".telefone").mask("(99) 99999-9999");
        }); 
        
        var json_cidades = {};
        $.ajax({
            url: "{{ asset('cidades/cidades.json') }}",
            async: false,
            dataType: 'json',
            success: function(data) {
                json_cidades = data;
            }
        });
        
        var user_estado = '{{ $user->estado }}';
        var user_cidade = '{{ $user->cidade }}';
        
        if(user_estado != ""){
            this.buscaCidades(user_estado);
            $('.select2').select2().select2('val', user_cidade)
            
        }else{
            $(".select2").select2();
        }
        
        function buscaCidades(estado){
            document.querySelector("#cidade").innerHTML = '';
            var def_opt = document.createElement('option');
            def_opt.innerHTML = ":: Selecione ::";
            def_opt.setAttribute('value', "")
            document.querySelector("#cidade").appendChild(def_opt);
            $('#cidade').val("").change();
            
            
            var cidade_select = document.querySelector("#cidade");
            var num_estados = json_cidades.estados.length;
            var j_index = -1;
            
            for(var i = 0; i < num_estados; i++){
                if(json_cidades.estados[i].sigla == estado){
                    j_index = i;
                }
            }
            
            if(j_index != -1){
                json_cidades.estados[j_index].cidades.forEach(function(cidade){
                    var cid_opts = document.createElement('option');
                    cid_opts.setAttribute('value', cidade)
                    cid_opts.innerHTML = cidade;
                    cidade_select.appendChild(cid_opts);
                });
            }else{
                document.querySelector("#cidade").innerHTML = '';
            }
        }
        
        function validaCpf()
        {
            let cpf = $("#cpf").val();
            if(cpf != null){
                cpf = cpf.replace('.','');
                cpf = cpf.replace('.','');
                cpf = cpf.replace('-','');
            }
            let erro = new String;
            if (cpf.length < 11) erro += "São necessarios 11 digitos para verificacao do CPF! \n\n"; 
            var nonNumbers = /\D/;
            if (nonNumbers.test(cpf)) erro += "Numero de CPF invalido! Por favor, insira apenas numeros! \n\n";  
            if (cpf == "00000000000" || cpf == "11111111111" || 
            cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || 
            cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || 
            cpf == "88888888888" || cpf == "99999999999"){
                erro += "Numero de CPF invalido!"
            }
            var a = [];
            var b = new Number;
            var c = 11;
            for (i=0; i<11; i++){
                a[i] = cpf.charAt(i);
                if (i <  9) b += (a[i] *  --c);
            }
            if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
            b = 0;
            c = 11;
            for (y=0; y<10; y++) b += (a[y] *  c--); 
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
            status = a[9] + ""+ a[10]
            if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])){
                erro +="Numero de CPF invalido! \n\n";
            }
            if (erro.length > 0){
                alert(erro);
            }
            else{
                document.getElementById("formUser").submit();
            }
        }
    </script>
    
@endsection