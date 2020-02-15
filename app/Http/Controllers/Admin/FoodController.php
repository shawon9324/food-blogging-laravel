<?php

namespace App\Http\Controllers\Admin;

use App\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meal;
use App\Restaurant;
use App\Category;

class FoodController extends Controller
{

    public function index()
    {
        $data = [

            'foods' => Food::all(),
            'categories' => Category::all(),
            'meals' => Meal::all(),
            'restaurants' => Restaurant::all(),
        ];
        return view('admin.dashboard.view.view_food')->with($data);
    }


    public function create()
    {
        $data['foods'] =  Food::orderBy('id')->get();
        $data['categories'] =  Category::orderBy('id')->get();
        $data['meals'] =  Meal::orderBy('id')->get();
        $data['restaurants'] =  Restaurant::orderBy('id')->get();
        return view('admin.dashboard.add.add_food')->with($data);
    }


    public function store(Request $request)
    {


        $food = Food::create($this->validateRequest());
        $this->storeImage($food);
        return redirect()->route('food.create')
            ->with('success', 'Blog created successfully.');
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
    public function validateRequest()
    {
        return tap(request()->validate([
            'title' => 'required',
            'description' => 'required',
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'restaurant_id' => 'required',
            'meal_id' => 'required',
        ]), function () {
            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'required|image|max:5000'
                ]);
            }
        });
    }
    public function storeImage($food)
    {

        if (request()->has('image')) {
            $food->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
