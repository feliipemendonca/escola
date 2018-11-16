<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $cursos = Curso::all();
        return view('admin.curso', ['cursos' =>$cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'curso'      => 'required',
            'sobre'     => 'required',
            'alvo'      => 'required',
            'carga'     => 'required',
            'mercado'   =>'required',
            'valor'     =>'required|integer',
            'img'   => 'required|image|mimes:jpeg, png, jpg'
        ]);

        $imageName = time().'.'.request()->img->getClientOriginalExtension();

        request()->img->move(public_path('upload'), $imageName);

        $curso = new Curso([
            'nome'      => $request->get('curso'),
            'sobre'     => $request->get('sobre'),
            'alvo'      => $request->get('alvo'),
            'carga'     => $request->get('carga'),
            'mercado'   => $request->get('mercado'),
            'valor'     => $request->get('valor'),
            'img'       => $imageName
        ]);

        $curso->save();
        return redirect('/curso')->with('Cadastro realizidado com Sucesso.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.curso.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([       
            'curso'      => 'required',
            'sobre'     => 'required',
            'alvo'      => 'required',
            'carga'     => 'required',
            'mercado'   =>'required',
            'valor'     =>'required|integer',
        ]);

        $curso = Curso::find($id);
        $curso->nome = $request->get('curso');
        $curso->sobre = $request->get('sobre');
        $curso->alvo = $request->get('alvo');
        $curso->carga = $request->get('carga');
        $curso->mercado = $request->get('mercado');
        $curso->valor = $request->get('valor');

        $curso->save();

        return redirect('/curso')->with('Curso Atualizado com Sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return redirect('/curso')->with('Curso Apagado com Sucesso');
    }
}
