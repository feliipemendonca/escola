<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{  

    protected $servico;

    public function __construct(Servico $servico)
    {
        $this->middleware('auth');
        $this->post = $servico;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $servicos = Servico::paginate(15);
        return view('admin.servico', ['servicos' => $servicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servico.create');
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
            'title' => 'required',
            'body'  => 'required',
            'img'   => 'required|image|mimes:jpeg, png, jpg'
        ]);

        $imageName = time().'.'.request()->img->getClientOriginalExtension();

        request()->img->move(public_path('upload'), $imageName);

        $servico = new Servico ([
            'nome' => $request->get('title'),
            'sobre'=> $request->get('body'),
            'img'  => $imageName
        ]);

        $servico->save();

        return redirect('/servico')->with('Serviço cadastrado com Sucesso');
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
        return view('admin.servico.edit');
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
            'title'  => 'required',
            'body'  => 'required'
        ]);

        $servico = Servico::find($id);
        $servico->nome = $request->get('title');
        $servico->sobre = $request->get('body');

        $servico->save();

        return redirect('/servico')->with('Servico Atualizado com Sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico->delete();
        return redirect('/servico')->with('Servico Apagado com Sucesso.');
        
    }
}
