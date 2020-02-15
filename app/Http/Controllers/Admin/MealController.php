<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meal;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $meals = Meal::orderBy('type')->get();
        return view('admin.dashboard.view.view_meal', ['meals' => $meals]);
    }

   
    public function create()
    {
        $data['meals'] =  Meal::orderBy('type')->get();
        return view('admin.dashboard.add.add_meal')->with($data);
       
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
        ]);
  
        Meal::create($request->all());
        return redirect()->route('meal.create')
                        ->with('success','Meal created successfully.');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit(Meal $meal)
    {
        $meal = Meal::find($meal->id);
        return view('admin.dashboard.edit.edit_meal', ['meal' => $meal]);
    }

   
    public function update(Request $request, Meal $meal)
    {
         $request->validate([
            'type' => 'required',
            'availablity_time' => 'required',
            
          ]);
          Meal::find($meal->id)->update($request->all());
          return redirect()->route('meal.index');
    }

    public function destroy(Meal $meal)
    {
        Meal::find($meal->id)->delete();
        return redirect()->route('meal.index');
    }
}
