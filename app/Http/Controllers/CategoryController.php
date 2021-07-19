<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::all();
        return view('category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add');
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
            'name' => 'bail|required|unique:tb_category',
            'text' => 'required'
        ],
        
        [
            'name.required' => 'Kategori Wajib Diisi',
            'name.required' => 'Kategori Sudah Ada',
            'text.required' => 'Keterangan Wajib di Isi'
        ])
        ;

        Category::create([
            'name' =>$request->name,
            'text' =>$request->text
        ]);
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Category::findOrFail($id);
        return view('category.edit', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Category::findOrFail($id); 
        return view('category.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'bail|required|',
            'text' => 'required'

        ],
        
        [
            'name.required' => 'Kategori Wajib Diisi',
            'text.required' => 'Keterangan Wajib di Isi'
            
        ]);

        $row = Category::findOrFail($id); 
        $row->update([

            'name' => $request->name,
            'text' => $request->text


        ]);

        return redirect('/category');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        {$row = Category::findOrFail($id); 
        $row->delete();


        return redirect('/category');}
    }
}
