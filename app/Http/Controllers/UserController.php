<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Carbon\Carbon;

use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('name', 'ASC')->paginate(5);
        return view('Users.index', compact('request', 'users'));
    }
    
    public function show($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('Users.show', compact('user'));
    }
    
    public function create($user_id)
    {
        $user = User::findOrNew($user_id);
        
        return view('Users.create', compact('user'));
    }
    
    public function save(Request $request, $user_id)
    {
        $obrigatorios =[
            'nome' => 'required',
            'email' => 'required'. ($user_id == 0 ? '|unique:users' : ''),
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'telefone' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
        ];
        $request->validate($obrigatorios);

        $user = User::findOrNew($user_id);
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->data_nascimento = Carbon::createFromFormat('d/m/Y', $request->data_nascimento)->format("Y-m-d");;
        $user->telefone = $request->telefone;
        $user->logradouro = $request->logradouro;
        $user->numero = $request->numero;
        $user->complemento = $request->complemento;
        $user->bairro = $request->bairro;
        $user->estado = $request->estado;
        $user->cidade = $request->cidade;
        $user->save();

        Session::flash('flash_message', 'Usuário salvo com sucesso');
        return redirect('/');
    }
    
    public function delete($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->delete();
        Session::flash('flash_message', 'Usuário excluído com sucesso');
        return redirect('/');
    }
    
}