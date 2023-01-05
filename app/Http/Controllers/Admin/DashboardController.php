<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index(){
        $items = Item::latest()->paginate(10);
    
        return view('admin.dashboard',compact('items'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
        // return view('admin.dashboard');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-product');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'category_id' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount' => 'required',
        ]);
    
        Item::create($request->all());
     
        return redirect()->route('dashboard.index')
                        ->with('success','Item created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('admin.show-product',compact('item'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('admin.edit-product', compact('item'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'category_id' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount' => 'required',
        ]);
    
        Item::whereId($id)->update($request);
    
        return redirect()->route('dashboard.index')
                        ->with('success','Item updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = Item::findOrFail($id);
        $data->delete();
    
        return redirect()->route('dashboard.index')
                        ->with('success','Item deleted successfully');
    }
}

