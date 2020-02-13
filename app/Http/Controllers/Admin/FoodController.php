<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard.view.view_food');
    }

    
    public function create()
    {
        return view('admin.dashboard.add.add_food');
    }

    
    public function store(Request $request)
    {
        
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
