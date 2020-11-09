<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marque;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marque::all();
        return view('marques', ['marques' => $marques]);
    }

    public function List()
    {
        $marqueList = Marque::all();
        return response()->json($marqueList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addMarque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marque = new Marque();

        $marque->name = $request->input('name');
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $request->image->move('marque', $fileName);
            $marque->image = 'marque/' . $fileName;
        }

        $marque->save();

        return redirect('marques');
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
        $marque = Marque::find($id);

        $marque->name = $request->input('name');
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $request->image->move('marque', $fileName);
            $marque->image = 'marque/' . $fileName;
        }

        $marque->save();

        return redirect('marques');
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
