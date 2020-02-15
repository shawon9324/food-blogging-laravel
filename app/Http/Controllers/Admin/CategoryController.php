<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        

        $categories = Category::get();
        return view('admin.dashboard.view.view_category', ['categories' => $categories]);
        
    }

    public function create()
    {
        $data['categories'] =  Category::get();
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
        $data['category'] = Category::findOrFail($id);
        return view('')->with($data);
    }
    
    public function edit(Category $category)
    {
        $category = Category::find($category->id);
        return view('admin.dashboard.edit.edit_category', ['category' => $category]);
        
    }
    
    public function update(Request $request,Category $category)
    {
        $request->validate([
            'name' => 'required',
            
          ]);
          Category::find($category->id)->update($request->all());
          return redirect()->route('category.index')->with('success','Post Has Updated Successfully');
    }
   
    public function destroy(Category $category)
    {
        Category::find($category->id)->delete();
        return redirect()->route('category.index');
    }
}
