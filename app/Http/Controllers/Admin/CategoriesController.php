<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', ['categories'=>$categories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz'=>'required',
            'name_ru'=>'required',
        ]);

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['name_uz']);

        Category::create($requestData);

        return redirect()->route('admin.categories.index')->with('success', 'Category create successfully!');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name_uz'=>'required',
            'name_ru'=>'required',
        ]);

        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['name_uz']);
        $category->update($requestData);
        return redirect()->route('admin.categories.index')->with('success', 'Category update successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully!');
    }
}
