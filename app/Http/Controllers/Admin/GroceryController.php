<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grocery;
use Illuminate\Support\Facades\DB;

class GroceryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groceries = Grocery::all();
        return view('admin.groceries.index', compact('groceries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $newGrocery = new Grocery();
        $newGrocery->fill($formData);
        if(!$request->has('is_vegetarian')) {
            $newGrocery->is_vegetarian = 0;
        } else {
            $newGrocery->is_vegetarian = 1;
        }
        $newGrocery->save();
        // session()->flash('message', 'Product successfully added.');
        return redirect()->route('admin.groceries.index');
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

    public function eliminateAll() {
        DB::table('groceries')->truncate();
        // DB::table('groceries')->truncate($request->all());
        return redirect()->route('admin.groceries.index');
    }
}
