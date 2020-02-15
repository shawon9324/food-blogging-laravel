<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
        $data = [

            'categories' => Category::all()
        ];
        
        return view('admin.dashboard.view.view_category')->with($data);
    }

    public function create()
    {
        $data['categories'] =  Category::orderBy('name')->get();
        return view('admin.dashboard.add.add_category')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        Category::create($request->all());
        return redirect()->route('category.create')
                        ->with('success','Category created successfully.');
        
    }

    public function show($id)
    {
    }

    public function edit(Category $category)
    {
        //$data['categories'] =  Category::orderBy('id')->get();
        
        //$data['category'] = $id;
        return view('admin.dashboard.update.update_category');
    }

    public function update(Request $request,Category $category)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $category->update($request->all());
  
        return redirect()->route('category.index')
                        ->with('success','Category updated successfully.');

        
    }

    public function destroy($id)
    {
    }
}
