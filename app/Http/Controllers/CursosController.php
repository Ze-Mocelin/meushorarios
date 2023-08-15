<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado

class CursosController extends Controller
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
                'nomecurso' => 'required|min:1|max:100|unique:cursos,nomecurso',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nomecurso.required' => 'Campo obrigatório',
                'nomecurso.min' => 'Mínimo de caracteres é 1',
                'nomecurso.max' => 'Máximo de caracteres são 100',
                'nomecurso.unique' => 'curso já cadastrado',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $cur = new Curso;
                $cur -> nomecurso = e($request->nomecurso);
                $cur -> matutino = isset($request->matutino)?1:0;
                $cur -> vespertino = isset($request->vespertino)?1:0;
                $cur -> noturno = isset($request->noturno)?1:0;
                $cur -> seg = isset($request->segunda)?1:0;
                $cur -> ter = isset($request->terca)?1:0;
                $cur -> qua = isset($request->quarta)?1:0;
                $cur -> qui = isset($request->quinta)?1:0;
                $cur -> sex = isset($request->sexta)?1:0;
                $cur -> sab = isset($request->sabado)?1:0;
                $cur -> dom = isset($request->domingo)?1:0;
                $cur ->id_user = Auth::user()->id;
                if ($cur->save()){
                    return redirect()->back()->with('message', 'Ok! Curso criado com sucesso!');
                }else{
                    return redirect()->back()->withInput()->with('error', 'Ops! Ocorreu algum problema ao salvar os dados.');
                }
                return redirect()->back()->withInput()->with('status', 'Ops! Curso já cadastrado.');

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
    public function show(Cursos $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cursos $cursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'nomecurso' => 'required|min:1|max:100',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator)
                    ->with('error', 'Ops! Verifique o nome do curso.');
        }else{
            $curso = e($request->nomecurso);
            $matutino = isset($request->matutino)?1:0;
            $vespertino = isset($request->vespertino)?1:0;
            $noturno = isset($request->noturno)?1:0;
            $seg = isset($request->segunda)?1:0;
            $ter = isset($request->terca)?1:0;
            $qua = isset($request->quarta)?1:0;
            $qui = isset($request->quinta)?1:0;
            $sex = isset($request->sexta)?1:0;
            $sab = isset($request->sabado)?1:0;
            $dom = isset($request->domingo)?1:0;
            if (Curso::where('id', '=', $request->id)
                ->update(['nomecurso' => $curso,
                          'matutino' => $matutino,
                          'vespertino' => $vespertino,
                          'noturno' => $noturno,
                          'seg' => $seg,
                          'ter' => $ter,
                          'qua' => $qua,
                          'qui' => $qui,
                          'sex' => $sex,
                          'sab' => $sab,
                          'dom' => $dom,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Curso atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar curso.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso =Curso::find($id);
        $curso ->delete();
        return redirect()->back()->with('message', 'Ok! Curso deletado com sucesso!');
    }
}
