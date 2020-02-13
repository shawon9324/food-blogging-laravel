<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard.view.view_category');
        
    }

    public function create()
    {
        return view('admin.dashboard.add.add_category');
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
