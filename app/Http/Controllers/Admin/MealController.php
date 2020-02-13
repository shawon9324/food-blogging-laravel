<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    
    public function index()
    {

        return view('admin.dashboard.view.view_meal');
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
            'availablity_time'=> 'required'
        ]);
  
        Meal::create($request->all());
        return redirect()->route('meal.create')
                        ->with('success','Meal created successfully.');
        
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
