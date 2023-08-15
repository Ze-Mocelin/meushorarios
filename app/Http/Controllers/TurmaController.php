<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'nometurma' => 'required|min:1|max:100|unique:turmas,nometurma',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nometurma.required' => 'Campo obrigatório',
                'nometurma.min' => 'Mínimo de caracteres é 1',
                'nometurma.max' => 'Máximo de caracteres são 100',
                'nometurma.unique' => 'Turma já cadastrado',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $tur = new Turma;
                $tur -> nometurma = e($request->nometurma);
                $tur -> curso = e($request->curso);
                $tur ->id_user = Auth::user()->id;
                if ($tur->save()){
                    return redirect()->back()->with('message', 'Ok! Turma criado com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Turma já cadastrado.');

            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Turma $turma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso =Turma::find($id);
        $curso ->delete();
        return redirect()->back()->with('message', 'Ok! Turma excluída com sucesso!');
    }
}
