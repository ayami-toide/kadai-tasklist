<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task; 

class kadaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kadais = Task::all();

        return view('kadais.index', [
            'kadais' => $kadais,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kadai = new Task;

        return view('kadais.create', [
            'kadai' => $kadai,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        
        $this->validate($request, [
            'status' => 'required|max:191',   // add
            'content' => 'required|max:191',
        ]);


        $kadai = new Task;
        $kadai->content = $request->content;
        $kadai->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kadai = Task::find($id);

        return view('kadais.show', [
            'kadai' => $kadai,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kadai = Task::find($id);

        return view('kadais.edit', [
            'kadai' => $kadai,
        ]);
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
        $this->validate($request, [
            'status' => 'required|max:191',   // add
            'content' => 'required|max:191',
        ]);
        
        $kadai= Task::find($id);
        $kadai->content = $request->content;
        $kadai->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kadai = Task::find($id);
        $kadai->delete();

        return redirect('/');
    }
}
