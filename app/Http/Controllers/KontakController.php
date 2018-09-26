<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Kontak;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kontak = Kontak::latest()->paginate(5);
        return view('kontak.index', compact('kontak'))->with('i',(request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required,'
          ]);
          Kontak::create($request->all());
          return redirect()->route('kontak.index')->with('success','Post created successfully');
      
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
        $kontak = Kontak::find($id);
        return view('kontak.show', compact('kontak'));
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
        $kontak = Kontak::find($id);
        return view('kontak.edit', compact('kontak'));
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
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required,'
          ]);
          Kontak::find($id)->update($request->all());
          return redirect()->route('kontak.index')->with('success','Post updated successfully');
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
        Kontak::find($id)->delete();
        return redirect()->route('kontak.index')->with('success','Post deleted successfully');
    }
}
