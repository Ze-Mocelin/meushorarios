<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class DisciplinaController extends Controller
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
    public function create(Request $request)
    {
        if ($request->isMethod('post'))
        {
            //Roles de validación
            $rules = [
                'nome' => 'required|min:1|max:100|',
                'abreviatura' => 'required|min:1|max:100|regex:/^[0-9]+$/i',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
            'abreviatura.required' => 'Campo obrigatório',
            'abreviatura.min' => 'Mínimo de caracteres é 1',
            'abreviatura.max' => 'Máximo de caracteres são 100',
            'abreviatura.regex' => 'Somente números',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $disc = new Disciplina;
                $disc -> nome = e($request->nome);
                $disc -> abreviatura = e($request->abreviatura);
                $disc ->id_user = Auth::user()->id;
                if ($disc->save()){
                    return redirect()->back()->with('message', 'Ok! Disciplina criada com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Disciplina já cadastrado.');

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
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'nome' => 'required|min:1|max:100|',
            'abreviatura' => 'required|min:1|max:100|regex:/^[0-9]+$/i',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
            'abreviatura.required' => 'Campo obrigatório',
            'abreviatura.min' => 'Mínimo de caracteres é 1',
            'abreviatura.max' => 'Máximo de caracteres são 100',
            'abreviatura.regex' => 'Somente números',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique o nome da disciplina.');
        }else{
            $nome = e($request->nome);
            $abreviatura = e($request->abreviatura);

            if (Disciplina::where('id', '=', $request->id)
                ->update(['nome' => $nome,
                          'abreviatura' => $abreviatura,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Disciplina atualizada com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar a disciplina.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso =Disciplina::find($id);
        $curso ->delete();
        return redirect()->back()->with('message', 'Ok! Disciplina excluída com sucesso!');
    }
}
