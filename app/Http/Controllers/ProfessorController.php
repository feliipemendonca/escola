<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Http\Controlle\HomeController;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = Professor::all();
        return view('admin.professor', ['professors' => $professors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professor.create');
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
            'nome'  => 'required',
            'cpf'   => 'required|integer',
            'rg'    => 'required|integer',
            'email' => 'required',
            'senha' =>  'required'
        ]);

        $users = new Users([
            'name'  => $request->get('nome'),
            'email' => $request->get('email'),
            'password' => $request->get('senha')
        ]);

        $users->save();

        $id = Users::all($email)
        
        $professors = new Professor([
            'nome'  => $request->get('nome'),
            'cpf'   => $request->get('cpf'),
            'rg'    => $request->get('rg'),
            'idtb_users' => $users->id
        ]);

        $professors->save();

        return redirect('/professor')->with('Professor Cadastrado com sucesso.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
