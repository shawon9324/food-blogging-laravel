<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
       

        $restaurants = Restaurant::orderBy('name')->get();
        return view('admin.dashboard.view.view_restaurant', ['restaurants' => $restaurants]);
    }

   
    public function create()
    {
        $data['restaurant'] =  Restaurant::orderBy('name')->get();
        return view('admin.dashboard.add.add_restaurant')->with($data);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
  
        Restaurant::create($request->all());
        return redirect()->route('restaurant.create')
                        ->with('success','Restaurant created successfully.');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit(Restaurant $restaurant)
    {
        $restaurant = Restaurant::find($restaurant->id);
        return view('admin.dashboard.edit.edit_restaurant', ['restaurant' => $restaurant]);
    }

    public function update(Request $request,Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            
          ]);
          Restaurant::find($restaurant->id)->update($request->all());
          return redirect()->route('restaurant.index');
    }

   
    public function destroy(Restaurant $restaurant)
    {
        Restaurant::find($restaurant->id)->delete();
        return redirect()->route('restaurant.index');
 
   }

}

