<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado


class ProfessorController extends Controller
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
                'horas' => 'required',
                'disciplina' => 'required',
            ];
            //Posibles mensajes de error de validación
            $messages = [
                'nome.required' => 'Campo obrigatório',
                'nome.min' => 'Mínimo de caracteres é 1',
                'nome.max' => 'Máximo de caracteres são 100',
                'horas.required' => 'Campo obrigatório',
                'disciplina.required' => 'campo obrigatório'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            //Si la validación no es correcta redireccionar al formulario con los errores
            if ($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }
            else{ // criado novo categoria
                $prof = new Professor;
                $prof -> nome = e($request->nome);
                $prof -> horas = e($request->horas);
                $prof -> disciplina = e($request->disciplina);
                $prof -> matutino = e($request->matutino)?1:0;
                $prof -> vespertino = e($request->vespertino)?1:0;
                $prof -> noturno = e($request->noturno)?1:0;
                $prof -> mseg11 = e($request->mseg11)?0:1;
                $prof -> mseg12 = e($request->mseg12)?0:1;
                $prof -> mseg13 = e($request->mseg13)?0:1;
                $prof -> mseg14 = e($request->mseg14)?0:1;
                $prof -> mseg15 = e($request->mseg15)?0:1;
                $prof -> mseg16 = e($request->mseg16)?0:1;

                $prof -> mter11 = e($request->mter11)?0:1;
                $prof -> mter12 = e($request->mter12)?0:1;
                $prof -> mter13 = e($request->mter13)?0:1;
                $prof -> mter14 = e($request->mter14)?0:1;
                $prof -> mter15 = e($request->mter15)?0:1;
                $prof -> mter16 = e($request->mter16)?0:1;

                $prof -> mqua11 = e($request->mqua11)?0:1;
                $prof -> mqua12 = e($request->mqua12)?0:1;
                $prof -> mqua13 = e($request->mqua13)?0:1;
                $prof -> mqua14 = e($request->mqua14)?0:1;
                $prof -> mqua15 = e($request->mqua15)?0:1;
                $prof -> mqua16 = e($request->mqua16)?0:1;

                $prof -> mqui11 = e($request->mqui11)?0:1;
                $prof -> mqui12 = e($request->mqui12)?0:1;
                $prof -> mqui13 = e($request->mqui13)?0:1;
                $prof -> mqui14 = e($request->mqui14)?0:1;
                $prof -> mqui15 = e($request->mqui15)?0:1;
                $prof -> mqui16 = e($request->mqui16)?0:1;

                $prof -> msex11 = e($request->msex11)?0:1;
                $prof -> msex12 = e($request->msex12)?0:1;
                $prof -> msex13 = e($request->msex13)?0:1;
                $prof -> msex14 = e($request->msex14)?0:1;
                $prof -> msex15 = e($request->msex15)?0:1;
                $prof -> msex16 = e($request->msex16)?0:1;

                $prof -> msab11 = e($request->msab11)?0:1;
                $prof -> msab12 = e($request->msab12)?0:1;
                $prof -> msab13 = e($request->msab13)?0:1;
                $prof -> msab14 = e($request->msab14)?0:1;
                $prof -> msab15 = e($request->msab15)?0:1;
                $prof -> msab16 = e($request->msab16)?0:1;

                $prof -> mdom11 = e($request->mdom11)?0:1;
                $prof -> mdom12 = e($request->mdom12)?0:1;
                $prof -> mdom13 = e($request->mdom13)?0:1;
                $prof -> mdom14 = e($request->mdom14)?0:1;
                $prof -> mdom15 = e($request->mdom15)?0:1;
                $prof -> mdom16 = e($request->mdom16)?0:1;
                $prof ->id_user = Auth::user()->id;
                if ($prof->save()){
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
    public function show(Professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor)
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
            'horas' => 'required',
            'disciplina' => 'required',
        ];
        //Posibles mensajes de error de validación
        $messages = [
            'nome.required' => 'Campo obrigatório',
            'nome.min' => 'Mínimo de caracteres é 1',
            'nome.max' => 'Máximo de caracteres são 100',
            'horas.required' => 'Campo obrigatório',
            'disciplina.required' => 'campo obrigatório'
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
            $horas = e($request->horas);
            $disciplina = e($request->disciplina);
            $matutino = e($request->matutino)?1:0;
            $vespertino = e($request->vespertino)?1:0;
            $noturno = e($request->noturno)?1:0;
            $mseg11 = e($request->mseg11)?0:1;
            $mseg12 = e($request->mseg12)?0:1;
            $mseg13 = e($request->mseg13)?0:1;
            $mseg14 = e($request->mseg14)?0:1;
            $mseg15 = e($request->mseg15)?0:1;
            $mseg16 = e($request->mseg16)?0:1;

            $mter11 = e($request->mter11)?0:1;
            $mter12 = e($request->mter12)?0:1;
            $mter13 = e($request->mter13)?0:1;
            $mter14 = e($request->mter14)?0:1;
            $mter15 = e($request->mter15)?0:1;
            $mter16 = e($request->mter16)?0:1;

            $mqua11 = e($request->mqua11)?0:1;
            $mqua12 = e($request->mqua12)?0:1;
            $mqua13 = e($request->mqua13)?0:1;
            $mqua14 = e($request->mqua14)?0:1;
            $mqua15 = e($request->mqua15)?0:1;
            $mqua16 = e($request->mqua16)?0:1;

            $mqui11 = e($request->mqui11)?0:1;
            $mqui12 = e($request->mqui12)?0:1;
            $mqui13 = e($request->mqui13)?0:1;
            $mqui14 = e($request->mqui14)?0:1;
            $mqui15 = e($request->mqui15)?0:1;
            $mqui16 = e($request->mqui16)?0:1;

            $msex11 = e($request->msex11)?0:1;
            $msex12 = e($request->msex12)?0:1;
            $msex13 = e($request->msex13)?0:1;
            $msex14 = e($request->msex14)?0:1;
            $msex15 = e($request->msex15)?0:1;
            $msex16 = e($request->msex16)?0:1;

            $msab11 = e($request->msab11)?0:1;
            $msab12 = e($request->msab12)?0:1;
            $msab13 = e($request->msab13)?0:1;
            $msab14 = e($request->msab14)?0:1;
            $msab15 = e($request->msab15)?0:1;
            $msab16 = e($request->msab16)?0:1;

            $mdom11 = e($request->mdom11)?0:1;
            $mdom12 = e($request->mdom12)?0:1;
            $mdom13 = e($request->mdom13)?0:1;
            $mdom14 = e($request->mdom14)?0:1;
            $mdom15 = e($request->mdom15)?0:1;
            $mdom16 = e($request->mdom16)?0:1;

            if (Professor::where('id', '=', $request->id)
                ->update([
                    'nome' => $nome,
                    'horas' => $horas,
                    'disciplina' => $disciplina,
                    'matutino' => $matutino,
                    'vespertino' => $vespertino,
                    'noturno' => $noturno,
                    'mseg11' => $mseg11,
                    'mseg12' => $mseg12,
                    'mseg13' => $mseg13,
                    'mseg14' => $mseg14,
                    'mseg15' => $mseg15,
                    'mseg16' => $mseg16,

                    'mter11' => $mter11,
                    'mter12' => $mter12,
                    'mter13' => $mter13,
                    'mter14' => $mter14,
                    'mter15' => $mter15,
                    'mter16' => $mter16,

                    'mqua11' => $mqua11,
                    'mqua12' => $mqua12,
                    'mqua13' => $mqua13,
                    'mqua14' => $mqua14,
                    'mqua15' => $mqua15,
                    'mqua16' => $mqua16,

                    'mqui11' => $mqui11,
                    'mqui12' => $mqui12,
                    'mqui13' => $mqui13,
                    'mqui14' => $mqui14,
                    'mqui15' => $mqui15,
                    'mqui16' => $mqui16,

                    'msex11' => $msex11,
                    'msex12' => $msex12,
                    'msex13' => $msex13,
                    'msex14' => $msex14,
                    'msex15' => $msex15,
                    'msex16' => $msex16,

                    'msab11' => $msab11,
                    'msab12' => $msab12,
                    'msab13' => $msab13,
                    'msab14' => $msab14,
                    'msab15' => $msab15,
                    'msab16' => $msab16,

                    'mdom11' => $mdom11,
                    'mdom12' => $mdom12,
                    'mdom13' => $mdom13,
                    'mdom14' => $mdom14,
                    'mdom15' => $mdom15,
                    'mdom16' => $mdom16,

                ])){
                return redirect()
                    ->back()
                    ->with('status', 'Cadastro do Professor atualizado com sucesso!');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao atualizar o cadastro do professor.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso =Professor::find($id);
        $curso ->delete();
        return redirect()->back()->with('message', 'Ok! Professor excluído com sucesso!');
    }
}
