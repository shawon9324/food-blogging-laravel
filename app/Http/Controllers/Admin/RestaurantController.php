<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    
    public function index()
    {

        $data = [

            'restaurants' => Restaurant::all()
        ];
        return view('admin.dashboard.view.view_restaurant')->with($data);
    }

    public function create()
    {
        $data['restaurants'] =  Restaurant::orderBy('name')->get();
        return view('admin.dashboard.add.add_restaurant');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address'=> 'required'
        ]);
  
        Restaurant::create($request->all());
        return redirect()->route('restaurant.create')
                        ->with('success','Restaurant created successfully.');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}
